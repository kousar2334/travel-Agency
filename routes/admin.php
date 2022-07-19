<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\Admin\HotelsController;
use App\Http\Controllers\Admin\SettingController;

Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login.form');
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
//admin middleware start
Route::group(['middleware' => 'auth:admin', 'namespace' => 'Admin'], function () {

    /**
     * Dashboard
     */
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    //Air tickets
    Route::get('/air-tickets', [FlightController::class, 'index'])->name('admin.air.tickets');

    //Hotel Bookings
    Route::get('/hotel-bookings', [HotelsController::class, 'index'])->name('admin.hotel.bookings');

    //Settings
    Route::get('/general-settings', [SettingController::class, 'generalSettings'])->name('admin.setting.general');
    Route::post('/update-general-settings', [SettingController::class, 'updateGeneralSettings'])->name('admin.setting.general.update');
});
