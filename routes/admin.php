<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\Admin\HotelsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactUsController;

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

    //contact us
    Route::get('/contact-us-messages', [ContactUsController::class, 'messages'])->name('admin.contact.messages');

    //Settings
    Route::get('/general-settings', [SettingController::class, 'generalSettings'])->name('admin.setting.general');
    Route::post('/update-general-settings', [SettingController::class, 'updateGeneralSettings'])->name('admin.setting.general.update');
    Route::get('/email-settings', [SettingController::class, 'emailSettings'])->name('admin.setting.email');
    Route::post('/update-email-settings', [SettingController::class, 'updateEmailSettings'])->name('admin.setting.email.update');
    Route::get('/about-us', [SettingController::class, 'aboutUs'])->name('admin.setting.about.us');
    Route::post('/update-about-us', [SettingController::class, 'updateAboutUs'])->name('admin.setting.about.us.update');
});
