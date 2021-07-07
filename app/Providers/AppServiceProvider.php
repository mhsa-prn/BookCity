<?php

namespace App\Providers;

use App\Models\Bookmark;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load categories for layout

        View::composer('layouts.app', function ($view) {
            if ($user=User::find(auth()->id()))
                $user_firstname=$user->first_name;
            else
                $user_firstname=null;
            $category_count=Category::count();
            $categories = Category::all();
            $bookmarks_count = Bookmark::where('user_id', auth()->id())->count();
            $view->with(compact('categories', 'bookmarks_count','category_count','user_firstname'));
        });
    }
}
