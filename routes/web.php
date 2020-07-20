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
    return view('login');
});

Route::get('/mommy', function () {
    return view('mommy');
});
Route::get('/baby', function () {
    return view('baby');
});

Route::get('/mamaform', function () {
    return view('mamaform');
});
Route::get('/mamaconfirm', function () {
    return view('mamaconfirm');
});
Route::get('/kidform', function () {
    return view('kidform');
});
Route::get('/kidconfirm', function () {
    return view('kidconfirm');
});

