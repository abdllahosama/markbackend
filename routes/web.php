<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Portal\PortalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
})->name('about');

// services
Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('contact-us', function () {
    return view('contact-us');
});


