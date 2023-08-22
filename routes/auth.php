<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LogoutController;

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::post('register', [LoginController::class,'register'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [LogoutController::class, 'index'])->name('logout');
    Route::post('logout', [LogoutController::class, 'logout']);
});
