<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('site.authors', compact('authors'));
    }


    public function update_book_count($id)
    {
        $author = Author::find($id);
        $author->published_books = Book::where('author_id', $id)->count();
        $author->save();
    }

    public function showStoreAuthorForm()
    {
        return view('storeAuthorForm');
    }

    public function storeAuthor(Request $request)
    {


        if ($request->hasFile('image')) {
            $image = $request->file('image');
        }
        else
            $image=null;

        $authors = new Author();
        $authors->fill($request->all());
        $file_name = md5(time()) . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs(
            'public/books', $image, $file_name
        );

        $authors->image = "storage/books/".$file_name;
        $authors->save();

    }
}
