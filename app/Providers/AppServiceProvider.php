<?php

namespace App\Providers;

use App\Models\Bookmark;
use App\Models\Category;
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
            $categories = Category::all();
            $bookmarks_count = Bookmark::where('user_id', auth()->id())->count();
            $view->with(compact('categories', 'bookmarks_count'));
        });
    }
}
