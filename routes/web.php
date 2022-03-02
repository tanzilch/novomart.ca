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

Route::get('/',[App\Http\Controllers\Controller::class, 'dashboard'])->name('dashboard');

Route::get('/products',[App\Http\Controllers\ProductController::class, 'showProducts'])->name('products');

Route::post('/cart/add-to',[App\Http\Controllers\ProductController::class, 'addToCart'])->name('add.to.cart');

Route::post('/cart/delet-from',[App\Http\Controllers\ProductController::class, 'delFromCart'])->name('del.from.cart');

Route::get('/cart',[App\Http\Controllers\ProductController::class, 'showCart'])->name('show.cart');