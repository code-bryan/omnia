<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::resource('login', LoginController::class)->only(['index', 'store', 'destroy']);
    Route::resource('forgot', ForgotPasswordController::class)->only(['index', 'store']);
});

Route::get('/', function () {
    return view('welcome');
});
