<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Site\SiteController::class, 'index'])->name('home');
Route::get('/contactus', [\App\Http\Controllers\Site\ContactUsController::class,'index'])->name('contactUs');

Route::get('/search', [\App\Http\Controllers\Site\SiteController::class, 'search']);

Route::get('/add-to-basket/{id}', [\App\Http\Controllers\Site\SiteController::class, 'addToBasket']);
Route::get('/destroy-basket', [\App\Http\Controllers\Site\SiteController::class, 'destroyBasket'])->name('destroyBasket');

Route::get('/authors',[\App\Http\Controllers\Site\AuthorController::class,'authors'])->name('authorsList');

Route::get('/bookmarks/{id}',[\App\Http\Controllers\Site\BookmarkController::class, 'add'])->name('addBookmark');
Route::get('/bookmarks',[\App\Http\Controllers\Site\BookmarkController::class, 'index'])->name('bookmarks');


Route::post('/book',[\App\Http\Controllers\BookController::class, 'store'])->name('books');

Route::post('/users/register',[\App\Http\Controllers\Site\UserController::class,'register']);
Route::get('/users/register',[\App\Http\Controllers\Site\UserController::class,'registerForm']);

Route::post('/users/login',[\App\Http\Controllers\Site\UserController::class,'login']);
Route::get('/users/login',[\App\Http\Controllers\Site\UserController::class,'loginForm']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth:web')->get('/test', function () {
    dd('ok');
});
