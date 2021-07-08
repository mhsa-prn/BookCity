<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

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
}
