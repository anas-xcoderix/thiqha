<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\TermsConditionController;
use \App\Http\Controllers\CheckoutController;
use \App\Http\Controllers\AddtoCartController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register/user', [RegisterController::class, 'storeUser'])->name('register.user');
    Route::post('/register/partner', [RegisterController::class, 'storePartner'])->name('register.partner');
});

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/vendor', [VendorController::class, 'index'])->name('vendor');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/policy', [PolicyController::class, 'index'])->name('policy');

Route::get('/terms-condition', [TermsConditionController::class, 'index'])->name('terms-condition');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/add-to-cart', [AddtoCartController::class, 'index'])->name('add-to-cart');
