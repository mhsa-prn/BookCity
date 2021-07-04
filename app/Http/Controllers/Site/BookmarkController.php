<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        //$bookmarks = Bookmark::with('books')->where('user_id', auth()->id())->get();

        $bookmarks = Bookmark::with('books')->where('user_id', 1)->get();

        return view('site.bookmarks',[
        'bookmarks'=>$bookmarks
        ]);
    }

    public function add($book_id)
    {
        //$user_id = auth()->id();
        $user_id = 1;
        $bookmark = new Bookmark();
        $bookmark->fill([
            'user_id' => $user_id,
            'book_id' => $book_id]);

        $bookmark->save();
    }

    public function remove()
    {

    }

}
