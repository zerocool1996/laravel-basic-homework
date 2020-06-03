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
    return view('index');
})->name('index');

Route::get('check-token', function () {
    return "check token passed";
})->name('checkToken')->middleware('checkToken');

Route::get('check-token-fail', function () {
    return "check token failed";
})->name('checkTokenFail');
