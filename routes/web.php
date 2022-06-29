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
        "title" => "Dashboard"
    ]);
});

Route::get('/usage', function () {
    return view('usage', [
        "title" => "Usage",
        "version" => "1.0.2"
    ]);
});

Route::get('/cheatsheet', function () {
    return view('cheatsheet', [
        "title" => "Cheatsheet"
    ]);
});

Route::get('/license', function () {
    return view('license', [
        "title" => "License"
    ]);
});

Route::get('/404', function () {
    return view('404', [
        "title" => "404 Not found"
    ]);
});