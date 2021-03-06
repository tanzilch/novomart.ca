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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(["middleware"=>"auth"], function(){

	Route::get('/',[App\Http\Controllers\Controller::class, 'dashboard'])->name('dashboard');
	Route::post('/orders/filter',[App\Http\Controllers\Controller::class, 'filterOrder'])->name('filter.order');
	Route::get('/product/status/update/{id}',[App\Http\Controllers\Controller::class, 'productStatus'])->name('product.status');
});



Route::get('/products',[App\Http\Controllers\ProductController::class, 'showProducts'])->name('products');

Route::post('/cart/add-to',[App\Http\Controllers\ProductController::class, 'addToCart'])->name('add.to.cart');

Route::get('/cart/show-to',[App\Http\Controllers\ProductController::class, 'showToCart'])->name('show.to.cart');


Route::post('/mail',[App\Http\Controllers\ProductController::class, 'productMail'])->name('product.mail');

Route::get('/cart/delet-from/{id}',[App\Http\Controllers\ProductController::class, 'delFromCart'])->name('del.from.cart');

Route::get('/cart',[App\Http\Controllers\ProductController::class, 'showCart'])->name('show.cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
