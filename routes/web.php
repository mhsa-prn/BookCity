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

Route::get('/', [\App\Http\Controllers\Site\SiteController::class, 'index']);
Route::get('/search', [\App\Http\Controllers\Site\SiteController::class, 'search']);
Route::get('/add-to-basket/{id}', [\App\Http\Controllers\Site\SiteController::class, 'addToBasket']);


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
