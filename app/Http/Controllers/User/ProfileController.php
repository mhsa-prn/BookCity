<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Site\BookmarkController;
use App\Models\Bookmark;
use App\Models\Cart;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function showProfile()
    {
        $user = User::find(auth()->id());
        return view('user.profile', compact('user'));
    }

    public function showOrders()
    {
        $count = 1;
        $orders = Order::where('user_id', auth()->id())->get();
        return view('user.ordersList', compact('orders', 'count'));
    }

    public function showOrderItems($order_id, $count)
    {
        $factor = Order::find($order_id);

        $orders = Order::with('items.book')
            ->where('user_id', auth()->id())
            ->where('id', $order_id)
            ->first();

        // برای زمانی که میخوایم روی فیلد های ریلیشن تغییر ایجاد کنیم
      /* return  $orders = Order::with(['items' => function ($q) {
           $q->with('book');
        }])
            ->where('user_id', auth()->id())
            ->where('id', $order_id)
            ->first();*/

        //$items=Book::where('id',$orders->book_id)->get();


        return view('user.orderItemsList', compact('factor', 'orders', 'count'));
    }

    public function showBookmarks()
    {
        $bookmarks = Bookmark::with('books')->where('user_id', auth()->id())->get();
        return view('user.bookmarksList', compact('bookmarks'));
    }
}
