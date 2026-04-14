<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

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
