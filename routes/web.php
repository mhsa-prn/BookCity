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



Route::get('/authors',[\App\Http\Controllers\Site\AuthorController::class,'authors'])->name('authorsList');

Route::get('/bookmarks/{id}',[\App\Http\Controllers\Site\BookmarkController::class, 'add'])->name('addBookmark');
Route::get('/bookmarks',[\App\Http\Controllers\Site\BookmarkController::class, 'index'])->name('bookmarks');


Route::post('/book',[\App\Http\Controllers\BookController::class, 'store'])->name('books');

Route::post('/users/register',[\App\Http\Controllers\Site\UserController::class,'register']);
Route::get('/users/register',[\App\Http\Controllers\Site\UserController::class,'registerForm']);

Route::post('/users/login',[\App\Http\Controllers\Site\UserController::class,'login']);
Route::get('/users/login',[\App\Http\Controllers\Site\UserController::class,'loginForm']);

Route::get('/add-to-Cart/{id}', [\App\Http\Controllers\Site\CartController::class, 'addToCart']);
Route::get('/destroy-Cart', [\App\Http\Controllers\Site\CartController::class, 'destroyCart'])->name('destroyCart');
Route::get('/cart',[\App\Http\Controllers\Site\CartController::class,'index'])->name('cart');
Route::get('/carts/{item}',[\App\Http\Controllers\Site\CartController::class,'removeItem'])->name('removeItem');
Route::get('/increase-count/{id}',[\App\Http\Controllers\Site\CartController::class,'increaseCount'])->name('increaseCartCount');
Route::get('/decrease_count/{id}',[\App\Http\Controllers\Site\CartController::class,'decreaseCount'])->name('decreaseCartCount');
//Auth::routes();

Route::get('/payment',[\App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
Route::get('/payment/verify',[\App\Http\Controllers\PaymentController::class, 'verify'])->name('payment_verify');
Route::get('/user/panel',[\App\Http\Controllers\User\IndexController::class, 'index'])->name('index');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth:web')->get('/test', function () {
    dd('ok');
});
