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


        $category_counts = Category::with('books');
        //$newest_books = Product::orderBy('id', 'DESC')->get();

        return view('site.index', compact('user_count', 'book_count',
            'books',
            'categories',
            'order_count',
            'deram',
            'asheghane',
            'jenayi',
            'tarikhi'));


    }


    public function search(Request $request)
    {
        $books = Book::where('title', 'like', "%" . $request->input('title') . "%")->get();

        return view('site.search');
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

}
