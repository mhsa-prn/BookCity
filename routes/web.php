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


Route::get('/search', [\App\Http\Controllers\Site\SiteController::class, 'search']);



Route::get('/authors',[\App\Http\Controllers\Site\AuthorController::class,'index'])->name('authorsList');


//===================Bookmarks routes=============================
Route::get('/bookmark/{id}',[\App\Http\Controllers\Site\BookmarkController::class, 'add'])->name('addToBookmark');
Route::get('/bookmarks/{id}',[\App\Http\Controllers\Site\BookmarkController::class, 'remove'])->name('removeBookmark');
Route::get('/bookmarks',[\App\Http\Controllers\Site\BookmarkController::class, 'index'])->name('bookmarks');
Route::get('/bookmarks-count/',[\App\Http\Controllers\Site\SiteController::class, 'bookmarksCount']);//->name('bookmarks');
//===================End bookmarks routes=============================

Route::post('/book',[\App\Http\Controllers\BookController::class, 'store'])->name('books');


//======================User routes===================================
Route::post('/users/register',[\App\Http\Controllers\Site\UserController::class,'register']);
Route::get('/users/register',[\App\Http\Controllers\Site\UserController::class,'registerForm'])->name('register');

Route::post('/users/login',[\App\Http\Controllers\Site\UserController::class,'login']);
Route::get('/users/login',[\App\Http\Controllers\Site\UserController::class,'loginForm'])->name('login');

Route::get('/users/logout',[\App\Http\Controllers\Site\UserController::class,'logout'])->name('logout');

//======================End user routes================================


//========================Cart routes==================================
Route::get('/add-to-Cart/{id}', [\App\Http\Controllers\Site\CartController::class, 'addToCart']);
Route::get('/destroy-Cart', [\App\Http\Controllers\Site\CartController::class, 'destroyCart'])->name('destroyCart');
Route::get('/cart',[\App\Http\Controllers\Site\CartController::class,'index'])->name('cart');
Route::get('/carts/{item}',[\App\Http\Controllers\Site\CartController::class,'removeItem'])->name('removeItem');
Route::get('/increase-count/{id}',[\App\Http\Controllers\Site\CartController::class,'increaseCount'])->name('increaseCartCount');
Route::get('/decrease_count/{id}',[\App\Http\Controllers\Site\CartController::class,'decreaseCount'])->name('decreaseCartCount');
//=======================End cart routes==========================


//============================Payment routes=======================
Route::get('/payment',[\App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
Route::get('/payment/verify',[\App\Http\Controllers\PaymentController::class, 'verify'])->name('payment_verify');
//Route::get('/user/panel',[\App\Http\Controllers\User\IndexController::class, 'index'])->name('index');
//==========================payment routes==========================


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth:web')->get('/test', function () {
    dd('ok');
});


//========================User Panel routes========================
Route::middleware('auth:web')->prefix('user')->name('user.')->group(function (){
    Route::get('/profile',[\App\Http\Controllers\User\ProfileController::class,'showProfile'])->name('profile');
    Route::get('/orders-list',[\App\Http\Controllers\User\ProfileController::class,'showOrders'])->name('orders');
    Route::get('/order-items/{order_id}/{count}',[\App\Http\Controllers\User\ProfileController::class,'showOrderItems'])->name('orderItemsList');
    Route::get('/bookmarks-list',[\App\Http\Controllers\User\ProfileController::class,'showBookmarks'])->name('bookmarks');
});


//=======================Contact us routes========================
Route::get('/contactus', [\App\Http\Controllers\Site\MessageController::class,'index'])->name('contactUs');
Route::post('/contactus/store', [\App\Http\Controllers\Site\MessageController::class,'store'])->name('messageStore');


//Auth::routes();
