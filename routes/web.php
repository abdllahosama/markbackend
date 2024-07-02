<?php

use App\Modules\ContactUs\Models\ContactUs;
use Illuminate\Http\Request;
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

Route::post('contact/store', function ( Request $request) {
    ContactUs::create($request->all());
    return redirect()->route('contact')->with('success', 'Your message has been sent successfully');
})->name('web.contact.store');

Route::get('editing', function () {
    return view('editing');
})->name('editing');



Route::get('feasability', function () {
    return view('feasability');
})->name('feasability');

Route::get('graphic', function () {
    return view('graphic');
})->name('graphic');

Route::get('paid-ads', function () {
    return view('paid-ads');
})->name('paid-ads');

Route::get('products-photograhping', function () {
    return view('products-photograhping');
})->name('products-photograhping');

Route::get('promo-videos', function () {
    return view('promo-videos');
})->name('promo-videos');

Route::get('animations', function () {
    return view('animations');
})->name('animations');

// web-development
Route::get('web-development', function () {
    return view('web-development');
})->name('web-development');


