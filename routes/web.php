<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register/user', [RegisterController::class, 'storeUser'])->name('register.user');
    Route::post('/register/partner', [RegisterController::class, 'storePartner'])->name('register.partner');
});

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/vendor', [VendorController::class, 'index'])->name('vendor');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/policy', [PolicyController::class, 'index'])->name('policy');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/ServiceProvider', [ServiceProviderController::class, 'index'])->name('ServiceProvider');

Route::get('/ProductDetails', [ProductDetailsController::class, 'index'])->name('ProductDetails');

Route::get('/Cart', [CartController::class, 'index'])->name('Cart');
