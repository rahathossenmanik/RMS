<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
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


Route::get("/", 'App\Http\Controllers\HomeController@index');

Route::get("/redirects",'App\Http\Controllers\HomeController@redirects');

#Route::get("/menu",'App\Http\Controllers\MenuController@menu');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

Route::get("/cart", [CartController::class, 'index'])->name('cart');


Route::post('/menu/{product}', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
