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
        "version" => "1.0.3",
        "title" => "Dashboard",
        "fullVersion" => "Version 1.0.3"
    ]);
});

Route::get('/usage', function () {
    return view('usage', [
        "version" => "1.0.3",
        "title" => "Usage",
        "fullVersion" => "Version 1.0.3"
    ]);
});

Route::get('/cheatsheet', function () {
    return view('cheatsheet', [
        "title" => "Cheatsheet",
        "fullVersion" => "Version 1.0.3"
    ]);
});

Route::get('/license', function () {
    return view('license', [
        "title" => "License",
        "fullVersion" => "Version 1.0.3"
    ]);
});

Route::get('/404', function () {
    return view('404', [
        "title" => "404 Page not found",
        "fullVersion" => "Version 1.0.3"
    ]);
});