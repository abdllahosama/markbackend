<?php

use Illuminate\Support\Facades\Route;
use App\Modules\ContactUs\Controllers\adminController;
use App\Modules\ContactUs\Controllers\FrontController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('front/contact', FrontController::class)->only(['store']);
    Route::resource('admin/contact', adminController::class)->only(['index', 'show', 'destroy']);

});
