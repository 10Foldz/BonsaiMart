<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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
    return view('sellerpermit.sellerview');
})->name('seller.view');

Route::get('add-product', function () {
    return view('sellerpermit.addproduct');
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

Route::get('seller-product', [SellerController::class, 'sellerProductPage'])->name('seller.product');
Route::delete('delete-product/{id}', [SellerController::class, 'deleteProduct'])->name('delete.product');
Route::get('edit-product/{id}', [SellerController::class, 'editProduct'])->name('edit.product');
Route::put('update-product/{id}', [SellerController::class, 'updateProduct'])->name('update.product');

Route::get('checkout', [CheckoutController::class, 'showCheckoutPage'])->name('checkout.page');
Route::post('process-checkout', [CheckoutController::class, 'processCheckout'])->name('process.checkout');
Route::get('order/{order}', [CheckoutController::class, 'showOrder'])->name('order.show');
Route::get('receipt', [CheckoutController::class, 'showReceiptPage'])->name('receipt.page');
