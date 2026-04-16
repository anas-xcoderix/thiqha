<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PartnerRegisterController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AddtoCartController;
use App\Http\Controllers\RequestController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware('guest')->group(function () {
    Route::resource('login', LoginController::class)->only(['index', 'store']);
    Route::resource('register', RegisterController::class)->only(['create']);
    Route::resource('register/users', UserRegisterController::class)->only(['store']);
    Route::resource('register/partners', PartnerRegisterController::class)->only(['store']);
});

Route::middleware('auth')->group(function () {
    Route::singleton('logout', LoginController::class)->destroyable()->only(['destroy']);
});

Route::resource('products', ProductsController::class)->only(['index', 'show']);
Route::resource('blog', BlogController::class)->only(['index', 'show']);
Route::resource('cart', CartController::class)->only(['index']);
Route::resource('service-providers', ServiceProviderController::class)->only(['index']);
Route::resource('checkout', CheckoutController::class)->only(['index']);
Route::resource('services', ServicesController::class)->only(['index']);
Route::resource('vendor', VendorController::class)->only(['index']);
Route::resource('policy', PolicyController::class)->only(['index']);
Route::resource('about', AboutController::class)->only(['index']);
Route::resource('add-to-cart', AddtoCartController::class)->only(['index']);
Route::resource('terms-condition', TermsConditionController::class)->only(['index']);
Route::resource('request', RequestController::class)->only(['index']);
