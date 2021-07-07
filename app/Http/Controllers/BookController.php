<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $books = new Book();

        $books->fill($request->all());

        $file = $request->file('image');

        $file_name = md5(time()) . '.' . $file->getClientOriginalExtension();

        $file->move('books', $file_name);

        $file_address = '/books/' . $file_name;

        $books->image = $file_address;

        $books->save();

    }

    public function index()
    {
        $categories=Category::all();
        $books=Book::all();
        return view('book.index',compact('books','categories'));
    }
}
