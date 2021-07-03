<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $user_count = User::count();


        $books = Book::all();
        //$newest_books = Product::orderBy('id', 'DESC')->get();

        return view('site.index', compact('user_count', 'books'));
    }

    public function search(Request $request)
    {
        $books = Book::where('title', 'like', "%" . $request->input('title') . "%")->get();

        return view('site.search');
    }


    public function addToBasket($id)
    {
        Basket::add(Book::find($id));
        return back();
    }
}
