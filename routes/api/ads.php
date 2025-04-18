<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdController;

Route::get('/', [AdController::class, 'index']);
Route::get('{ad}', [AdController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/', [AdController::class, 'store']);
    Route::put('{ad}', [AdController::class, 'update']);
    Route::delete('{ad}', [AdController::class, 'destroy']);
});
