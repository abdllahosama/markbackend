<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
    return view('welcome');
});

//foreach (scandir($path = app_path("Modules")) as $dir) {
//
//    if (file_exists($filepath = $path.'/'.$dir.'/routes.php')) {
//       // echo $filepath;
//        require $filepath;
//    }
//}
