<?php


namespace App\Models;


use Illuminate\Support\Facades\Session;

class Cart
{
    public static function add($book)
    {
        $old_Cart = [];

        // Add $Cart to session
        if (session()->has('my_cart')) {
            $old_Cart = session()->get('my_cart');
        }

        $Cart = $old_Cart;

        if (isset($Cart[$book->id])) {
            $Cart[$book->id]['count'] += 1;
        } else {
            // Add $book_id to $books
            $Cart[$book->id] = [
                'id' => $book->id,
                'title' => $book->title,
                'image' => $book->image,
                'count' => 1,
                'price' => $book->price
            ];
        }
        self::updateCount($Cart);


        //session([''my_cart_total_info' => compact('total_count', 'total_price')]);
        //Add to db

        //Cart::create([
        //'Cart'=> json_encode($Cart),
        //user_id => auth()->id()
        //]);

        // چون جدول سفارشات داریم، احتیاجی به ذخیره سبد خرید در دیتابیس نیست
    }

    public static function remove($item)
    {
        //اگر دیتا از سشن unset بشه، تاثیری روی سشن نداره
        $session = session()->get('my_cart');
        unset($session[$item]);
        session(['my_cart' => $session]);

        self::updateCount($session);

    }

    public static function destroy()
    {
        session()->forget('my_cart_total_info');
        session()->forget('my_cart');

    }

    public static function addToCartCount($id)
    {
        $basket = session()->get('my_cart');

        $basket[$id]['count'] = $basket[$id]['count'] + 1;

        session(['my_cart' => $basket]);

        $count = session()->get('my_cart')[$id]['count'] += 1;

        session()->get('my_cart')['count'] = $count;

        self::updateCount($basket);

    }

    public static function removeCartCount($id)
    {
        $basket = session()->get('my_cart');

        $basket[$id]['count'] = $basket[$id]['count'] - 1;

        session(['my_cart' => $basket]);

        $count = session()->get('my_cart')[$id]['count'] += 1;

        session()->get('my_cart')['count'] = $count;

        self::updateCount($basket);

    }


    public static function updateCount($basket)
    {
        $total_price = 0;
        $total_count = 0;

        foreach ($basket as $item) {
            $total_price += $item['price'] * $item['count'];
            $total_count += $item['count'];
        }

        session(['my_cart' => $basket, 'my_cart_total_info' => compact('total_price', 'total_count')]);
    }


}
