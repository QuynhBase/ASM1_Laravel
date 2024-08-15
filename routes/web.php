<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Client\ProductPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('client')->as('client.')->group(function(){
    Route::get('/',function () {
        return view('client.home');
    })->name('home');
    Route::get('products', [\App\Http\Controllers\Client\ProductController::class, 'list'])->name('products.list');
    Route::get('product/{id}', [\App\Http\Controllers\Client\ProductController::class, 'detail'])->name('product.detail');

    // Đăng ký dăng nhập
    Route::get('auth/register', [RegisterController::class, 'index'])
    ->name('register');
    Route::post('auth/register', [RegisterController::class, 'register'])
    ->name('register');

    Route::get('auth/login', [LoginController::class, 'index'])
    ->name('login');
    Route::post('auth/login', [LoginController::class, 'login'])
    ->name('login');
    Route::get('auth/logout', [LoginController::class, 'logout'])
    ->name('logout');
});

// Giỏ hàng
    Route::post('cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::get('cart/list', [\App\Http\Controllers\CartController::class, 'list'])->name('cart.list');
    Route::post('order/add', [\App\Http\Controllers\OrderController::class, 'add'])->name('order.add');
    Route::get('order/list', [\App\Http\Controllers\OrderController::class, 'list'])->name('order.list');





