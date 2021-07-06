<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Bookmark;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        //$bookmarks = Bookmark::with('books')->where('user_id', auth()->id())->get();

        $bookmarks = Bookmark::with('books')->where('user_id', auth()->id())->get();

        return view('site.bookmarks', [
            'bookmarks' => $bookmarks
        ]);
    }

    public function add($book_id)
    {
        //$user_id = auth()->id();
        if (auth()->check())
        {
            $exist = Bookmark::where('user_id', auth()->id())->where('book_id', $book_id)->first();
            if (!$exist) {
                $user_id = auth()->id();;
                $bookmark = new Bookmark();
                $bookmark->fill([
                    'user_id' => $user_id,
                    'book_id' => $book_id]);
                $bookmark->save();
            }
        }
        else
            session()->flash('bookmark','ابتدا وارد حساب کاربری خود شوید.');

        return back();
    }

    public function remove()
    {

    }


}
