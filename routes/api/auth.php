<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\MeController;

Route::post('login', LoginController::class);
Route::post('register', RegisterController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('me', MeController::class);
    Route::post('logout', LogoutController::class);
});
