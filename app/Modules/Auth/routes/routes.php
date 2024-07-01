<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Controllers\AuthController;



Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum' , 'abilities:web'])->group(function () {
    Route::get('user/edit', [AuthController::class, 'edit']);
    Route::put('user/update', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);
});




