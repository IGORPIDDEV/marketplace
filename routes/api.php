<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdController;
use App\Http\Controllers\Api\AuthController;

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('me', [AuthController::class, 'me']);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});

Route::prefix('ads')->group(function () {
    Route::get('/', [AdController::class, 'index']);
    Route::get('{ad}', [AdController::class, 'show']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', [AdController::class, 'store']);
        Route::put('{ad}', [AdController::class, 'update']);
        Route::delete('{ad}', [AdController::class, 'destroy']);
    });
});
