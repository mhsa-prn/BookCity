<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\CategoryBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Morilog\Jalali\Jalalian;

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
        } else
            $image = null;

        $books = new Book();
        $books->fill($request->all());
        $file_name = md5(time()) . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs(
            'public/books', $image, $file_name
        );

        $books->image = "storage/books/" . $file_name;
        $books->published_date = Jalalian::forge($request->published_date);
        $books->save();

    }

    public function index(Request $request)
    {

        // Many to Many Relation

        $categories = Category::query();

        $books = Book::query();

        if ($request->has('category_id')) {

            $books->whereHas('categories', function ($q) use ($request) {
                $q->where('categories.id', $request->get('category_id'));
            });
        }

        $books = $books->with(['categories', 'author'])->get();
        //return $books;
        $categories = $categories->with('books')->get();

        return view('book.index', compact('categories', 'books'));
    }

    public function showCategories()
    {
        $categories = Category::with('categoryBooks')->get();

        return $categories[0];
//        $count=-1;
//        foreach($categories as $category){
//            return $category->categories;
//        }
    }

    public function showDetails($id)
    {
        $book=Book::with(['categories', 'author'])->where('id',$id)->get();

//        return $book;

        $categories = Category::query();
        $categories = $categories->with('books')->get();

        return view ('book.bookDetails',compact('categories','book'));
    }
}
