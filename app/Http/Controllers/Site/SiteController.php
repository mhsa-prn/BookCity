<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class SiteController extends Controller
{
    public function index()
    {
        //counts
        $user_count = User::count();
        $book_count=Book::count();

        //categories
        $categories=Category::all();

        $books = Book::all();
        //$newest_books = Product::orderBy('id', 'DESC')->get();

        return view('site.index', compact('user_count','book_count',
            'books',
            'categories'));
    }

    public function search(Request $request)
    {
        $books = Book::where('title', 'like', "%" . $request->input('title') . "%")->get();

        return view('site.search');
    }



    //Authors part
    public function showAuthors()
    {
        $author=new Author();
        $author->index();
    }



}
