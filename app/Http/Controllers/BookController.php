<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\CategoryBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function showStoreBookForm()
    {
        return view('storeBookForm');
    }


    public function storeBook(Request $request)
    {


        if ($request->hasFile('image')) {
            $image = $request->file('image');
        }
        else
            $image=null;

        $books = new Book();
        $books->fill($request->all());
        $file_name = md5(time()) . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs(
            'public/books', $image, $file_name
        );

        $books->image = "storage/books/".$file_name;
        $books->save();

    }

    public function index()
    {
        $categories=Category::all();
        $books=Book::all();
        return view('book.index',compact('books','categories'));
    }

    public function showCategories()
    {
        $categories=Category::with('categoryBooks')->get();

        return $categories[0];
//        $count=-1;
//        foreach($categories as $category){
//            return $category->categories;
//        }
    }
}
