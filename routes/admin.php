<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HajjController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\VisaController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\Admin\HotelsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\PromotionController;

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

    //Hajj 
    Route::get('/hajj-queries', [HajjController::class, 'hajjQueries'])->name('admin.hajj.queries');

    //student visa
    Route::get('/student-visa-queries', [VisaController::class, 'studentVisaQueries'])->name('admin.visa.student.queries');

    //tourist visa
    Route::get('/tourist-visa-queries', [VisaController::class, 'touristVisaQueries'])->name('admin.visa.tourist.queries');

    //student visa
    Route::get('/package-tour-queries', [TourController::class, 'packageTourQueries'])->name('admin.tour.package.queries');

    //Hotel Bookings
    Route::get('/hotel-bookings', [HotelsController::class, 'index'])->name('admin.hotel.bookings');

    //contact us
    Route::get('/contact-us-messages', [ContactUsController::class, 'messages'])->name('admin.contact.messages');

    //Settings
    Route::get('/general-settings', [SettingController::class, 'generalSettings'])->name('admin.setting.general');
    Route::post('/update-general-settings', [SettingController::class, 'updateGeneralSettings'])->name('admin.setting.general.update');
    Route::get('/email-settings', [SettingController::class, 'emailSettings'])->name('admin.setting.email');
    Route::post('/update-email-settings', [SettingController::class, 'updateEmailSettings'])->name('admin.setting.email.update');
    Route::post('/test-mail', [SettingController::class, 'testMail'])->name('admin.setting.email.test');
    Route::get('/about-us', [SettingController::class, 'aboutUs'])->name('admin.setting.about.us');
    Route::post('/update-about-us', [SettingController::class, 'updateAboutUs'])->name('admin.setting.about.us.update');

    //Promotions
    Route::get('/campains', [PromotionController::class, 'campains'])->name('admin.promotion.campain');
    Route::get('/create-new-campain', [PromotionController::class, 'newCampain'])->name('admin.promotion.campain.new');
    Route::post('/store-new-campain', [PromotionController::class, 'storeNewCampain'])->name('admin.promotion.campain.new.store');
    Route::post('/delete-campain', [PromotionController::class, 'deleteCampain'])->name('admin.promotion.campain.delete');

    Route::get('/deals', [PromotionController::class, 'deals'])->name('admin.promotion.deals');
    Route::get('/add-new-deal', [PromotionController::class, 'newDeal'])->name('admin.promotion.deals.add.new');
    Route::post('/store-new-deal', [PromotionController::class, 'storeNewDeal'])->name('admin.promotion.deals.store.new');
    Route::post('/delete-deal', [PromotionController::class, 'deleteDeal'])->name('admin.promotion.deals.delete');
    Route::get('/edit-deal/{id}', [PromotionController::class, 'editDeal'])->name('admin.promotion.deals.edit');
    Route::post('/update-deal', [PromotionController::class, 'updateDeal'])->name('admin.promotion.deals.update');

    //users
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/add-new-user', [AdminController::class, 'newUser'])->name('admin.users.add.new');
    Route::post('/store-new-user', [AdminController::class, 'storeNewUser'])->name('admin.users.store.new');
    Route::post('/delete-user', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    Route::get('/edit-user/{id}', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::post('/update-user', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::post('/update-user-password', [AdminController::class, 'updateUserPassword'])->name('admin.users.update.password');
});
