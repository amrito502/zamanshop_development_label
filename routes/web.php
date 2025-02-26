<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\Seller\SellerDashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// ===========Start-Auth-routes==============================
Route::get('/sign-up', [AuthController::class, 'sign_up'])->name('sign_up');
Route::post('/store-sign-up', [AuthController::class, 'store_sign_up'])->name('store.sign_up');
Route::get('/verify-phone', [AuthController::class, 'verify_phone'])->name('verify.phone');
Route::post('/verify-phone-store', [AuthController::class, 'verify_phone_store'])->name('verify.phone.store');
Route::post('/resend-otp', [AuthController::class, 'resend_otp'])->name('otp.resend');
// ===========End-Auth-routes==============================


Route::middleware(['auth', 'ensurePhoneVerified'])->group(function () {
    Route::middleware('customer')->group(function () {
        Route::get('/customer/dashboard', [CustomerDashboardController::class, 'customerDashboard'])->name('customer.dashboard');
    });

    Route::middleware('seller')->group(function () {
        Route::get('/seller/dashboard', [SellerDashboardController::class, 'sellerDashboard'])->name('seller.dashboard');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});