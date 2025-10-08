<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/auth')->group(function () {
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.api');
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'check'])->name('auth.api.check');
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.api.logout');
});
