<?php

use App\Modules\FileService\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'abilities:web'])->group(function () {
    Route::post('fileService', [adminController::class, 'store']);
    Route::get('storeGallery', [adminController::class, 'storeGallery']);

});
