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
                'image' => '/',
                'count' => 1,
                'price' => $book->price
            ];
        }

        session(['my_basket' => $basket]);

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
}
