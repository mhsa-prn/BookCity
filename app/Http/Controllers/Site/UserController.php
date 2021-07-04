<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        //validation
        $this->validate($request, [
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'username' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'password|required|min:8'
        ]);

        //store
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->input('password'));
        $user->save();

        session()->flash('success', 'ثبت نام با موفقیت انجام شد');

        return redirect('/');
        //return redirect(route('home'));
    }

    public function registerForm()
    {
        return view('site.register');
    }

    public function login(Request $request)
    {
        //validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'password|required|min:8'
        ]);


        $user=null;
        if (Auth::attempt($request->only(['email','password'])))
            $user = User::where('email', $request->input('email'))->first();

        if ($user &&
            Hash::check($request->input('password'), $user->password)) {
                redirect(route('home'));
        }
    }


    public function loginForm()
    {
        return view('site.login');
    }
}
