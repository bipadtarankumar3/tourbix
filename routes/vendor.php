<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\vendor\BookingHistoryController;
use App\Http\Controllers\vendor\ReportsController;
use App\Http\Controllers\vendor\VendorAuthController;
use App\Http\Controllers\vendor\HotelController;
use App\Http\Controllers\vendor\ReportController;
use App\Http\Controllers\vendor\PayoutsController;
use App\Http\Controllers\vendor\ExperianceController;

Route::get('vendor/login', [VendorAuthController::class, 'login'])->name('vendor.login');
Route::post('vendor-login-action', [VendorAuthController::class, 'vendorLoginAction']);

Route::group(['prefix' => 'vendor', 'as' => 'vendor.', 'middleware' => ['App\Http\Middleware\vendorAuth']], function () {
    Route::get('dashboard', [VendorAuthController::class, 'dashboard']);
    Route::get('logout', [VendorAuthController::class, 'logout']);
    Route::get('my-profile', [VendorAuthController::class, 'myProfile']);
    Route::get('change-password', [VendorAuthController::class, 'changePassword']);
    Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {
        Route::get('booking-report', [ReportsController::class, 'bookingReports']);
        Route::get('enquiry_report', [ReportsController::class, 'enquiry_report']);
    });
    Route::group(['prefix' => 'booking', 'as' => 'booking.'], function () {
        Route::get('history', [BookingHistoryController::class, 'BookingHistory']);
    });
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('list', [VendorAuthController::class, 'userList']);
    });

    Route::group(['prefix' => 'payouts', 'as' => 'payouts.'], function () {
        Route::get('list', [PayoutsController::class, 'payoutsList']);
    });

    Route::group(['prefix' => 'hotel', 'as' => 'hotel.'], function () {
        Route::get('list', [HotelController::class, 'hotelList']);
        Route::get('add_hotel', [HotelController::class, 'add_hotel']);
        Route::get('proprity_type', [HotelController::class, 'proprity_type']);
        Route::get('facility', [HotelController::class, 'facility']);
        Route::get('hotel_service', [HotelController::class, 'hotel_service']);
    });

    Route::group(['prefix' => 'room', 'as' => 'room.'], function () {

        Route::get('amenities', [HotelController::class, 'roomamenities']);
        Route::get('type', [HotelController::class, 'roomtype']);
        Route::get('list', [HotelController::class, 'roomList']);
        Route::get('addRoom', [HotelController::class, 'addRoom']);
        Route::get('avalibility', [HotelController::class, 'roomAvalibility']);
       
    });


    Route::group(['prefix' => 'experiance', 'as' => 'experiance.'], function () {
        Route::get('list', [ExperianceController::class, 'experianceList']);
        Route::get('add-new-tour', [ExperianceController::class, 'addNewTour']);
        Route::get('category', [ExperianceController::class, 'category']);
        Route::get('attributes', [ExperianceController::class, 'attributes']);
       
    });


});
