<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::resource('login', LoginController::class)->only(['index', 'create', 'store', 'destroy']);
});

Route::get('/', function () {
    return view('welcome');
});
