<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Zarinpal\Zarinpal;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        $zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
        $zarinpal->enableSandbox(); // active sandbox mod for test env
        // $zarinpal->isZarinGate(); // active zarinGate mode
        $results = $zarinpal->request(
            route('payment_verify'),          //required
            session()->get('my_cart_total_info')['total_price'],                                  //required
            'شما در حال پرداخت فاکتور خرید کتاب های خود هستید.',                             //required
            'me@example.com',                      //optional
            '09000000000'                        //optional

        );
        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }

    }

    public function verify(Request $request)
    {

        $status = $request->get('Status');
//        dd($status);
        $authority = $request->get('Authority');

        // get cart session
        $session = session()->get('my_cart');

        $session_total = session()->get('my_cart_total_info');
        // store cart session to orders table
        $order = new Order();

        if($status=='OK'){
            $order->status = Order::PREPARING;
        }
        else
            $order->status = Order::CANCELED;

        $order->amount = $session_total['total_price'];
        $order->user_id = auth()->id();

        $order->save();


        //store cart_info session to order_items table

        foreach ($session as $item) {

            $order_items = new OrderItem();
            $order_items->book_id = $item['id'];
            $order_items->order_id = $order->id;
            $order_items->count = $item['count'];

            $order_items->save();

        }

        // update sell_count in books table
//        foreach ($session as $item){
////            Book::fin


        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->authority = $authority;
        $payment->status = $request->get('Status') == 'OK' ? 1 : 2;
        $payment->save();

        Cart::destroy();

        if ($status=='OK'){
            session()->flash('OK_payment','پرداخت با موفقیت انجام شد.');
        }
        else
            session()->flash('NOK_payment','پرداخت ناموفق بود.');

        return view('payment');



    }
}
