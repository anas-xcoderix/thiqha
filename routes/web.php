<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Partner\CategoryController as AdminPartnerCategoryController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Partner\CategoryController as PartnerCategoryController;
use App\Http\Controllers\Partner\DashboardController as PartnerDashboardController;
use App\Http\Controllers\Partner\PartnerRegisterController;
use App\Http\Controllers\User\AddtoCartController;
use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Auth\UserRegisterController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PasswordController;
use App\Http\Controllers\User\PolicyController;
use App\Http\Controllers\User\ProductsController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RequestController;
use App\Http\Controllers\User\ServiceProviderController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\TermsConditionController;
use App\Http\Controllers\User\VendorController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::resource('login', LoginController::class)->only(['index', 'store']);
    Route::resource('register', RegisterController::class)->only(['create']);
    Route::resource('register/users', UserRegisterController::class)->only(['store']);
    Route::resource('register/partners', PartnerRegisterController::class)->only(['store']);
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('partner')->name('partner.')->group(function () {
        Route::resource('categories', AdminPartnerCategoryController::class);
    });

    Route::resource('product-categories', ProductCategoryController::class)
        ->parameters(['product-categories' => 'category']);
});

Route::middleware(['auth', 'role:partner'])->prefix('partner')->name('partner.')->group(function () {
    Route::get('/dashboard', [PartnerDashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', PartnerCategoryController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('profile', ProfileController::class)->only(['index', 'update']);
    Route::resource('password', PasswordController::class)->only(['update']);
    Route::resource('address', AddressController::class)->only(['store', 'update']);
    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});

Route::resource('products', ProductsController::class)->only(['index', 'show']);
Route::resource('blog', BlogController::class)->only(['index', 'show']);
Route::resource('cart', CartController::class)->only(['index']);
Route::resource('service-providers', ServiceProviderController::class)->only(['index']);
Route::resource('services', ServicesController::class)->only(['index']);
Route::resource('vendor', VendorController::class)->only(['index']);
Route::resource('policy', PolicyController::class)->only(['index']);
Route::resource('about', AboutController::class)->only(['index']);
Route::resource('add-to-cart', AddtoCartController::class)->only(['index']);
Route::resource('terms-condition', TermsConditionController::class)->only(['index']);
Route::resource('request', RequestController::class)->only(['index']);

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
