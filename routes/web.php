<?php

use Illuminate\Support\Facades\Route;

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

Route::get('contact', function () {
    return view('contact');
})->name('contact');

// portfolio
Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// portfolio
Route::get('blog', function () {
    return view('blog-single');
})->name('blog');




