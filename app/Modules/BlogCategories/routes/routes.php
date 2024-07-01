<?php

use Illuminate\Support\Facades\Route;
use App\Modules\BlogCategories\Controllers\adminController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('blogCategories', adminController::class);
});
