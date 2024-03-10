<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/basicTable','basicTable')->name('basicTable');
    Route::get('/addDetails','addDetails')->name('add.details');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login','index')->name('login');
    Route::post('/userlogin','login');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile','index')->name('prfile');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/','home')->name('home');
});

Route::controller(DashboardController::class)->group(function () {

    Route::get('/dashboard','index')->name('dashboard');
});
