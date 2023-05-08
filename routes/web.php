<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('index', [App\Http\Controllers\ShopController::class, 'index'])->name('index');
Route::get('homepage', [App\Http\Controllers\ShopController::class, 'homepage'])->name('homepage');
Route::get('shop', [App\Http\Controllers\ShopController::class, 'shop'])->name('shop');
Route::get('/addProduct', [App\Http\Controllers\ShopController::class, 'addproduct'])->name('addproduct');
Route::post('/store', [App\Http\Controllers\ShopController::class, 'store'])->name('store');
Route::get('cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('cart');
Route::post('cart_store', [App\Http\Controllers\ShopController::class, 'cart_store'])->name('cart_store');
Route::get('Lashes', [App\Http\Controllers\ShopController::class, 'Lashes'])->name('Lashes');
Route::get('nails', [App\Http\Controllers\ShopController::class, 'nails'])->name('nails');
Route::get('average', [App\Http\Controllers\ShopController::class, 'average'])->name('average');
Route::get('standard', [App\Http\Controllers\ShopController::class, 'standard'])->name('standard');
Route::get('premium', [App\Http\Controllers\ShopController::class, 'premium'])->name('premium');
Auth::routes();



