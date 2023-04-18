<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about', [
        "name" =>"Yulius Andre",
        "email" =>"andrepoliban@gmail.com",
        "image" =>"kalimantan selatan logo.png"
    ]);
});

Route::get('/blog', function () {
    return view ('posts',[
        "jalan" =>"Jalan Kayutangi Komplek Unlam",
        "kantor" =>"Politeknik Negeri Banjarmasin",
        "image" =>"poliban.jpg"
    ]);
});
