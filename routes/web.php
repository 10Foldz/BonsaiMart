<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('user-choice', function () {
    return view('flow.userchoice');
})->name('user.choice');

Route::get('customer-view', function () {
    return view('flow.customerview');
})->name('customer.view');

Route::get('seller-view', function () {
    return view('flow.sellerview');
})->name('seller.view');

Route::get('add-product', function () {
    return view('flow.addproduct');
})->name('add.product');

Route::get('product-page', function () {
    return view('flow.productpage');
})->name('product.page');

Route::post('add-product', [SellerController::class, 'addProduct'])->name('add.product');
Route::get('product-page', [SellerController::class, 'productPage'])->name('product.page');

Route::get('about-page', function () {
    return view('about');
})->name('about.page');

Route::get('cart-page', function () {
    return view('flow.cartpage');
})->name('cart.page');

Route::post('add-to-cart/{productId}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('cart-page', [CartController::class, 'cartPage'])->name('cart.page');
Route::put('update-cart/{id}', [CartController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove.from.cart');
