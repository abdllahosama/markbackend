<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Settings\Controllers\adminController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('settings', adminController::class)->only(['store', 'edit', 'update']);
});
