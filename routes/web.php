<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\CartController;
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
    Route::resource('productpages', ProductPageController::class);
    Route::resource('carts', CartController::class);
});



