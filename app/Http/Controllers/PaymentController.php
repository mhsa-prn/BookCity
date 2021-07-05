<?php

namespace App\Http\Controllers;

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
            route('home'),          //required
            1000,                                  //required
            'testing',                             //required
            'me@example.com',                      //optional
            '09000000000'                        //optional

        );
        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }

    }

    public function verify()
    {
        //status => $request->get('Status')
        //authority => $request->get('Authority') in orders table
        // get cart session
        // store cart session to orders table
        //store cart_info session to order_items table


    }
}
