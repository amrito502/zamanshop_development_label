<?php

use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SellerRequestController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\ProductController;

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

// ===========Start-Auth-routes==============================
Route::get('/sign-up', [AuthController::class, 'sign_up'])->name('sign_up');
Route::post('/store-sign-up', [AuthController::class, 'store_sign_up'])->name('store.sign_up');
Route::get('/verify-phone', [AuthController::class, 'verify_phone'])->name('verify.phone');
Route::post('/verify-phone-store', [AuthController::class, 'verify_phone_store'])->name('verify.phone.store');
Route::post('/resend-otp', [AuthController::class, 'resend_otp'])->name('otp.resend');
// ========login========
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-store', [AuthController::class, 'login_store'])->name('login.store');
// ===========End-Auth-routes==============================


Route::middleware(['auth', 'ensurePhoneVerified'])->group(function () {
    Route::middleware('customer')->group(function () {
        Route::get('/customer/dashboard', [CustomerDashboardController::class, 'customerDashboard'])->name('customer.dashboard');

        Route::get('/seller/request', [SellerRequestController::class, 'create'])->name('seller.request.create');
        Route::post('/seller/request', [SellerRequestController::class, 'store'])->name('seller.request.store');
    });

    Route::middleware('seller')->group(function () {
        Route::get('/seller/dashboard', [SellerDashboardController::class, 'sellerDashboard'])->name('seller.dashboard');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');
        // =====seller-requests=====
        Route::get('/admin/seller-requests', [SellerRequestController::class, 'index'])->name('admin.seller.requests');
        Route::post('/admin/seller-requests/{id}/approve', [SellerRequestController::class, 'approve'])->name('admin.seller.requests.approve');
        Route::post('/admin/seller-requests/{id}/reject', [SellerRequestController::class, 'reject'])->name('admin.seller.requests.reject');
        // =========users-status=====
        Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
        Route::post('/admin/users/{id}/block', [AdminController::class, 'blockUser'])->name('admin.users.block');
        Route::post('/admin/users/{id}/unblock', [AdminController::class, 'unblockUser'])->name('admin.users.unblock');

        // =========Category-routes=====
        Route::resource('categories', CategoryController::class);
        Route::resource('subcategories', SubCategoryController::class);
        Route::resource('brands', BrandController::class);
        Route::resource('sections', SectionController::class);
        Route::resource('products', ProductController::class);
        Route::get('/get-subdistricts', [ProductController::class, 'getSubDistricts'])->name('get.subdistricts');
        Route::get('/get-subcategories', [ProductController::class, 'getSubCategories'])->name('get.subcategories');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



//===========without-login-route-start====================//
Route::get('/', [CustomerController::class,'index'])->name('index');

Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class,'add_to_cart'])->name('cart.add');

//===========without-login-route-end====================//
