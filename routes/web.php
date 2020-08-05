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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 赤ちゃんページ
Route::resource('babies', 'BabyController');
Route::post('babies/confirm', 'BabyController@confirm')->name('babies.confirm');
Route::post('babies/sinblings', 'BabyController@sinbling')->name('babies.sinbling');
Route::resource('mommies', 'MommyController');




Route::resource('baby_checkups', 'Baby_checkupController');
Route::post('users/confirm', 'UserController@confirm')->name('users.confirm');
// Route::post('users/register', 'RegisterController@confirm')->name('users.register');
