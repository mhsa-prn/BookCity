<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Book;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    //Basket part
    public function addToBasket($id)
    {
        Basket::add(Book::find($id));
        return back();
    }

    public function destroyBasket(){
        Basket::destroy();
        return back();
    }
}
