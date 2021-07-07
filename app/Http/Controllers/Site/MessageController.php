<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('site.contactUs');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $message = new Message();
        $message->fill($request->all());
        $message->save();
        session()->flash('storeMessage', 'پیام شما با موفقیت ارسال شد.');

        return back();

    }


}
