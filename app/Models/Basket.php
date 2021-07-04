<?php


namespace App\Models;


use Illuminate\Support\Facades\Session;

class Basket
{

    public static function add($book)
    {
        $old_basket = [];

        // Add $basket to session
        if (session()->has('my_basket')) {
            $old_basket = session()->get('my_basket');
        }

        $basket = $old_basket;

        if (isset($basket[$book->id])) {
            $basket[$book->id]['count'] += 1;
        } else {
            // Add $book_id to $books
            $basket[$book->id] = [
                'id' => $book->id,
                'title' => $book->title,
                'image' => $book->image,
                'count' => 1,
                'price' => $book->price
            ];
        }

        $total_price = 0;
        $total_count = 0;


        foreach ($basket as $item) {
            $total_price += $item['price'] * $item['count'];
            $total_count += $item['count'];
        }

        session(['my_basket' => $basket,
            'my_basket_total_info'=>compact('total_price','total_count')]);




        //session([''my_basket_total_info' => compact('total_count', 'total_price')]);
        //Add to db

        //Basket::create([
        //'basket'=> json_encode($basket),
        //user_id => auth()->id()
        //]);

        // چون جدول سفارشات داریم، احتیاجی به ذخیره سبد خرید در دیتابیس نیست
    }

    public static function remove($book_id)
    {

    }

    public static function destroy()
    {
        session()->forget('my_basket_total_info');
        session()->forget('my_basket');

    }
}
