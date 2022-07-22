<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\HajjController;
use App\Http\Controllers\Frontend\TourController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\VisaController;
use App\Http\Controllers\Frontend\FlightController;
use App\Http\Controllers\Frontend\HotelsController;
use App\Http\Controllers\Frontend\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

//Fligts Routes
Route::view('/flights', 'frontend.pages.flight.index')->name('frontend.flight');
Route::group(['middleware' => 'auth:user'], function () {
    Route::post('/flight-booking-request',  [FlightController::class, 'flightBookingRequest'])->name('frontend.flight.booking.request');
});
//Hotels
Route::view('/hotels', 'frontend.pages.hotels.index')->name('frontend.hotels');
Route::group(['middleware' => 'auth:user'], function () {
    Route::post('/hotel-booking',  [HotelsController::class, 'hotelBooking'])->name('frontend.hotels.booking');
});


//Hajj
Route::view('/hajj-umrah', 'frontend.pages.hajj.index')->name('frontend.hajj');
Route::post('/hajj-umrah-send-query', [HajjController::class, 'storeHajjQuery'])->name('frontend.hajj.store.query');

//student visa
Route::view('/student-visa', 'frontend.pages.student_visa.index')->name('frontend.visa.student');
Route::group(['middleware' => 'auth:user'], function () {
    Route::post('/store-student-visa-query',  [VisaController::class, 'storeStudentVisaQuery'])->name('frontend.visa.student.store.query');
});

//Tourist visa
Route::view('/tourist-visa', 'frontend.pages.tourist_visa.index')->name('frontend.visa.tourist');
Route::group(['middleware' => 'auth:user'], function () {
    Route::post('/store-tourist-visa-query',  [VisaController::class, 'storeTouristVisaQuery'])->name('frontend.visa.tourist.store.query');
});

//Package tour
Route::view('/package-tour', 'frontend.pages.package_tour.index')->name('frontend.tour.package');
Route::group(['middleware' => 'auth:user'], function () {
    Route::post('/store-package-tour-query',  [TourController::class, 'storePackageToutQuery'])->name('frontend.tour.package.store.query');
});
//Contact us
Route::view('/contact-us', 'frontend.pages.contact_us.index')->name('frontend.contact.us');
Route::post('/store-contact-us-message', [ContactUsController::class, 'storeContactUs'])->name('frontend.contact.us.store');
//Auth
Route::get('/login', [UserController::class, 'loginPage'])->name('frontend.login');
Route::post('/login', [UserController::class, 'login'])->name('frontend.login.process');
Route::post('/logout', [UserController::class, 'logout'])->name('frontend.user.logout');

Route::get('/signup', [UserController::class, 'registrationForm'])->name('frontend.signup');
Route::post('/create-new-user', [UserController::class, 'createUser'])->name('frontend.signup.completed');


//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
