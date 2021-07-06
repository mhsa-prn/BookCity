<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function showProfile()
    {
        $user=User::find(auth()->id());
        return view('user.profile',compact('user'));
    }

    public function showOrders()
    {
        $count=1;
        $orders=Order::where('user_id',auth()->id())->get();
        return view('user.ordersList',compact('orders','count'));
    }
}
