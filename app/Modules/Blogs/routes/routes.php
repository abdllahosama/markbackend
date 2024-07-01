<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Blogs\Controllers\adminController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('blogs', adminController::class);
});
