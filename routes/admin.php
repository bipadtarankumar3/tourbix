<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\CouponManagementController;
use App\Http\Controllers\admin\LocationManagementController;
use App\Http\Controllers\admin\PayoutManagementController;
use App\Http\Controllers\admin\UserManagementController;
use App\Http\Controllers\admin\HotelController;
use App\Http\Controllers\admin\VendorController;
use App\Http\Controllers\admin\ExperianceController;
use App\Http\Controllers\admin\ServiceController;

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('admin-login-action', [AdminAuthController::class, 'adminLoginAction']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['App\Http\Middleware\AdminAuth']], function () {
    Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
    Route::get('enquiry', [AdminAuthController::class, 'enquiry']);
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
            Route::post('add-action', [LocationManagementController::class, 'locationCategoryAddAction']);
            Route::get('edit/{id}', [LocationManagementController::class, 'locationCategoryEdit']);
            Route::post('edit-action/{id}', [LocationManagementController::class, 'locationCategoryEditAction']);
            Route::post('delete/{id}', [LocationManagementController::class, 'locationCategoryDelete']);
        });
    
        // Add the routes for location management
        Route::get('edit/{id?}', [LocationManagementController::class, 'locationEdit'])->name('edit'); // For displaying the edit form
        Route::post('update-action', [LocationManagementController::class, 'locationUpdateAction'])->name('update-action'); // For updating location data
        Route::post('delete/{id}', [LocationManagementController::class, 'locationDelete']);
    
        // Route for adding new location
        Route::post('add-action', [LocationManagementController::class, 'locationAddAction'])->name('add-action');
    });
    

    Route::group(['prefix' => 'hotel', 'as' => 'hotel.'], function () {
        Route::get('list', [HotelController::class, 'hotelList']);
        Route::get('add_hotel', [HotelController::class, 'add_hotel']);
        Route::post('add-action', [HotelController::class, 'add_hotel_action']);
        //property
        Route::get('proprity_type', [HotelController::class, 'proprity_type']);
        Route::post('property-type/add-action', [HotelController::class, 'proprity_typeAddAction']);
        Route::post('property-type/edit-action/{id}', [HotelController::class, 'proprity_typeEditAction']);
        Route::get('property-type/edit/{id}', [HotelController::class, 'proprity_type_edit']);
        Route::post('property-type/delete/{id}', [HotelController::class, 'proprity_type_delete']);

        //facility
        Route::get('facility', [HotelController::class, 'facility']);
        Route::post('facility/add-action', [HotelController::class, 'facilityAddAction']);
        Route::get('facility/edit/{id}', [HotelController::class, 'facility_edit']);
        Route::post('facility/delete/{id}', [HotelController::class, 'facility_delete']);
        Route::post('facility/edit-action/{id}', [HotelController::class, 'facilityEditAction']);
        //privacy
        Route::get('hotel-privacy', [HotelController::class, 'hotelPrivacy']);
        Route::post('privacy/add-action', [HotelController::class, 'privacyAddAction']);
        Route::get('privacy/edit/{id}', [HotelController::class, 'privacy_edit']);
        Route::post('privacy/delete/{id}', [HotelController::class, 'privacy_delete']);
        Route::post('privacy/edit-action/{id}', [HotelController::class, 'privacyEditAction']);
        // services
        Route::get('hotel_service', [ServiceController::class, 'hotel_service']);
        Route::post('service/add-action', [ServiceController::class, 'hotel_service_add_action']);
        Route::post('service/edit-action/{id}', [ServiceController::class, 'hotel_service']);
        Route::get('service/edit/{id}', [ServiceController::class, 'hotel_service']);
        Route::post('service/delete/{id}', [ServiceController::class, 'hotel_service']);
      
    });


    Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function () {
        Route::get('list', [CouponManagementController::class, 'couponList']);
        Route::get('add', [CouponManagementController::class, 'addCoupon']);
        Route::post('add-action', [CouponManagementController::class, 'addAction']);
    });

    Route::group(['prefix' => 'payout', 'as' => 'payout.'], function () {
        Route::get('list', [PayoutManagementController::class, 'payoutList']);
       
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
        Route::post('category/add-action-category', [ExperianceController::class, 'categoryAddAction']);
        Route::get('category/edit/{id}', [ExperianceController::class, 'categoryEdit']);
        Route::get('category/delete/{id}', [ExperianceController::class, 'categoryDelete']);


        Route::get('attributes', [ExperianceController::class, 'attributes']);
        Route::post('attribute/add-action-attribute', [ExperianceController::class, 'attributeAddAction']);
        Route::get('attribute/edit/{id}', [ExperianceController::class, 'attributeEdit']);
        Route::get('attribute/delete/{id}', [ExperianceController::class, 'attributeDelete']);
       
    });
});
