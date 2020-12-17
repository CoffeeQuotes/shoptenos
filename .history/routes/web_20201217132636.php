<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('cart', [ProductController::class,'cart'])->name('cart');
Route::post('/search', [SearchController::class, 'search'])->name('search');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('add-to-cart/{id}',[ProductController::class, 'addToCart'])->name('addToCart');
Route::patch('update-cart', [ProductController::class, 'update']);
Route::delete('remove-from-cart', [ProductController::class, 'remove']);
Route::get('checkout', function() {
    return view('products.checkout');
});
Route::get('shipping', function() {
    return view('products.shipping');
});
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');
Route::post('/pay',[CheckoutController::class, 'pay'])->name('pay');
// Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('/success', function() {
    return view('products.success');
});
