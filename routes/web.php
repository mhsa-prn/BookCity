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
Route::get('/bookmark/{id}',[\App\Http\Controllers\Site\BookmarkController::class, 'add'])->name('addToBookmark')->middleware('auth:web');
Route::get('/bookmarks/{id}',[\App\Http\Controllers\Site\BookmarkController::class, 'remove'])->name('removeBookmark');
Route::get('/bookmarks',[\App\Http\Controllers\Site\BookmarkController::class, 'index'])->name('bookmarks');
Route::get('/bookmarks-count/',[\App\Http\Controllers\Site\SiteController::class, 'bookmarksCount']);//->name('bookmarks');
//===================End bookmarks routes=============================




//======================User routes===================================
Route::post('/users/register',[\App\Http\Controllers\Site\UserController::class,'register']);
Route::get('/users/register',[\App\Http\Controllers\Site\UserController::class,'registerForm'])->name('register');

Route::post('/users/login',[\App\Http\Controllers\Site\UserController::class,'login']);
Route::get('/users/login',[\App\Http\Controllers\Site\UserController::class,'loginForm'])->name('login');

Route::get('/users/logout',[\App\Http\Controllers\Site\UserController::class,'logout'])->name('logout');
//======================End user routes================================


//========================Cart routes==================================
Route::get('/add-to-Cart/{id}', [\App\Http\Controllers\Site\CartController::class, 'addToCart'])->middleware('auth:web');
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
//Route::middleware('auth:web')->get('/test', function () {
//    dd('ok');
//});


//========================User Panel routes========================
Route::middleware('auth:web')->prefix('user')->name('user.')->group(function (){
    Route::get('/profile',[\App\Http\Controllers\User\ProfileController::class,'showProfile'])->name('profile');
    Route::get('/orders-list',[\App\Http\Controllers\User\ProfileController::class,'showOrders'])->name('orders');
    Route::get('/order-items/{order_id}/{count}',[\App\Http\Controllers\User\ProfileController::class,'showOrderItems'])->name('orderItemsList');
    Route::get('/bookmarks-list',[\App\Http\Controllers\User\ProfileController::class,'showBookmarks'])->name('bookmarks');
});
//========================End user Panel routes========================


//=======================Contact us routes========================
Route::get('/contactus', [\App\Http\Controllers\Site\MessageController::class,'index'])->name('contactUs');
Route::post('/contactus/store', [\App\Http\Controllers\Site\MessageController::class,'store'])->name('messageStore');
//=======================Contact us routes========================

//===========================Site routes========================
Route::get('/aboutus',[\App\Http\Controllers\Site\SiteController::class,'aboutUs'])->name('aboutUs');
Route::get('/privacy',[\App\Http\Controllers\Site\SiteController::class,'privacy'])->name('privacy');
Route::get('/affiliates',[\App\Http\Controllers\Site\SiteController::class,'affiliates'])->name('affiliates');
Route::get('/goal',[\App\Http\Controllers\Site\SiteController::class,'goal'])->name('goal');
//===========================End Site routes=====================

//===========================Book routes===========================
Route::prefix('book')->name('book.')->group(function (){
    Route::get('/',[\App\Http\Controllers\BookController::class,'index'])->name('booksList');
    Route::get('/show-categories',[\App\Http\Controllers\BookController::class,'showCategories'])->name('booksCategories');
    Route::get('/show-details/{id}',[\App\Http\Controllers\BookController::class,'showDetails'])->name('bookDetail');
});
//=======================End book routes===========================


//=======================Authors route==============================
Route::prefix('author')->name('author.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Site\AuthorController::class, 'index'])->name('authorsList');
});
//=====================End authors list===========================



//Auth::routes();


Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/upload-image',[\App\Http\Controllers\Site\SiteController::class,'showUploadImageform'])->name('uploadImageForm');
    Route::post('/upload-image',[\App\Http\Controllers\Site\SiteController::class,'uploadImage'])->name('uploadImage');

    Route::get('/store-book',[\App\Http\Controllers\BookController::class, 'showStoreBookForm'])->name('storeBookForm');
    Route::post('/store-book',[\App\Http\Controllers\BookController::class, 'StoreBook'])->name('storeBook');

    Route::get('/store-author',[\App\Http\Controllers\Site\AuthorController::class, 'showStoreAuthorForm'])->name('storeAuthorForm');
    Route::post('/store-author',[\App\Http\Controllers\Site\AuthorController::class, 'StoreAuthor'])->name('storeAuthor');
});
