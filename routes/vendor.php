<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\vendor\VendorAuthController;

Route::get('vendor/login', [VendorAuthController::class, 'login'])->name('vendor.login');
Route::post('vendor-login-action', [VendorAuthController::class, 'vendorLoginAction']);

Route::group(['prefix' => 'vendor', 'as' => 'vendor.', 'middleware' => ['App\Http\Middleware\vendorAuth']], function () {
    Route::get('dashboard', [VendorAuthController::class, 'dashboard']);
    Route::get('logout', [VendorAuthController::class, 'logout']);

});
