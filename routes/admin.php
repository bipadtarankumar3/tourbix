<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\CouponManagementController;
use App\Http\Controllers\admin\LocationManagementController;
use App\Http\Controllers\admin\PayoutManagementController;
use App\Http\Controllers\admin\UserManagementController;
use App\Http\Controllers\admin\HotelController;
use App\Http\Controllers\admin\VendorController;

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('admin-login-action', [AdminAuthController::class, 'adminLoginAction']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['App\Http\Middleware\AdminAuth']], function () {
    Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
    Route::get('logout', [AdminAuthController::class, 'logout']);

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('list', [UserManagementController::class, 'userList']);
    });
    Route::group(['prefix' => 'vendor', 'as' => 'vendor.'], function () {
        Route::get('list', [VendorController::class, 'vendorList']);
    });
    Route::group(['prefix' => 'location', 'as' => 'location.'], function () {
        Route::get('list', [LocationManagementController::class, 'locationList']);
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('list', [LocationManagementController::class, 'locationCategoryList']);
        });
    });

    Route::group(['prefix' => 'hotel', 'as' => 'hotel.'], function () {
        Route::get('list', [HotelController::class, 'hotelList']);
        Route::get('add_hotel', [HotelController::class, 'add_hotel']);
        Route::get('proprity_type', [HotelController::class, 'proprity_type']);
        Route::get('facility', [HotelController::class, 'facility']);
        Route::get('hotel_service', [HotelController::class, 'hotel_service']);
    });


    Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function () {
        Route::get('list', [CouponManagementController::class, 'couponList']);
        Route::get('add', [CouponManagementController::class, 'addCoupon']);
    });

    Route::group(['prefix' => 'payout', 'as' => 'payout.'], function () {
        Route::get('list', [PayoutManagementController::class, 'payoutList']);
       
    });
});
