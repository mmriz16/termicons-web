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
    return view('dashboard', [
        "fullVersion" => "Version 1.0.3"
    ]);
});

Route::get('/usage', function () {
    return view('usage', [
        "version" => "1.0.3",
        "fullVersion" => "Version 1.0.3"
    ]);
});

Route::get('/cheatsheet', function () {
    return view('cheatsheet', [
        "fullVersion" => "Version 1.0.3"
    ]);
});

Route::get('/license', function () {
    return view('license', [
        "fullVersion" => "Version 1.0.3"
    ]);
});