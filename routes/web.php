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


Route::resource('maternity_checkups', 'Maternity_checkupController');


Route::resource('albums', 'AlbumController');


Route::resource('vaccines', 'VaccineController');


Route::resource('baby_checkups', 'Baby_checkupController');

