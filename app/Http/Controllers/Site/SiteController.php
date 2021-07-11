<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Book;
use App\Models\Category;
use App\Models\CategoryBook;
use App\Models\Order;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class SiteController extends Controller
{
    public function index()
    {
        //counts
        $user_count = User::count();
        $book_count = Book::count();

        $order_count = Order::count();

        //categories
        $categories = Category::all();

        $books = Book::all();


        $deram = CategoryBook::where('category_id', 1)->count();
        $jenayi = CategoryBook::where('category_id', 2)->count();
        $asheghane = CategoryBook::where('category_id', 3)->count();
        $tarikhi = CategoryBook::where('category_id', 4)->count();

        $authors = \App\Models\Author::all();


        $category_counts = Category::with('books');




        $newest_books=Book::orderBy('id', 'DESC')->with('author')->take(3)->get();


        $recommended_books = Book::whereBetween('id', [1, 5])->get();

        return view('site.index', compact('user_count', 'book_count',
            'authors',
            'books',
            'categories',
            'order_count',
            'deram',
            'asheghane',
            'jenayi',
            'tarikhi',
            'recommended_books',
            'newest_books'));


    }


    public function search(Request $request)
    {
        $books = Book::where('title', 'like', "%" . $request->input('title') . "%")->with('categories','author')->get();
        //return $books;
        return view('book.search', compact('books', 'request'));
    }


    //Authors part
    public function showAuthors()
    {
        $author = new Author();
        $author->index();
    }


    public function showUploadImageform()
    {
        return view('uploadImageForm');
    }

    public function uploadImage(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            Storage::disk('local')->put('public/my-images', $image);
        }
    }

    public function aboutUs()
    {
        return view('site.aboutUs');
    }

    public function privacy()
    {
        return view('site.privacy');
    }

    public function affiliates()
    {
        return view('site.affiliates');
    }

    public function goal()
    {
        return view('site.goal');
    }

}
