<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Book;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('site.cart');
    }

    public function addToCart($id)
    {
        Cart::add(Book::find($id));
        return back();
    }

    public function destroyCart()
    {
        Cart::destroy();
        return back();
    }

    public function removeItem($item)
    {
        Cart::remove($item);
        return back();
    }

    public function increaseCount($id)
    {
        Cart::addToCartCount($id);
        return back();
    }


    public function decreaseCount($id)
    {
        Cart::removeCartCount($id);
        return back();
    }
}
