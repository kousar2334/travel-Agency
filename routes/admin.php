<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login.form');
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
//admin middleware start
Route::group(['middleware' => 'auth:admin', 'namespace' => 'Admin'], function () {

    /**
     * Dashboard
     */
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
