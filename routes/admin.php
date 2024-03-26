<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\UserManagementController;

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('admin-login-action', [AdminAuthController::class, 'adminLoginAction']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['App\Http\Middleware\AdminAuth']], function () {
    Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
    Route::get('logout', [AdminAuthController::class, 'logout']);

    Route::group(['prefix'=>'user','as'=>'user.'],function () {
    Route::get('list', [UserManagementController::class, 'userList']);

    });

});

