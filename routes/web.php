<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Middleware\CheckAuthenticatedUser;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::resource('login', LoginController::class)->only(['index', 'store']);
    Route::resource('forgot', ForgotPasswordController::class)->only(['index', 'store']);
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware([CheckAuthenticatedUser::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('root');
});
