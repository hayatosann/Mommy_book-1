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

// ネスト
Route::resource('mommies.maternity_checkups', 'Maternity_checkupController');

// ネスト
Route::resource('babies.albums', 'AlbumController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@root')->name('root');

// 赤ちゃんページ
Route::resource('babies', 'BabyController');
Route::resource('babies.baby_checkups', 'Baby_checkupController');
Route::post('babies/confirm', 'BabyController@confirm')->name('babies.confirm');
Route::post('babies/sinblings', 'BabyController@sinbling')->name('babies.sinbling');
Route::resource('mommies', 'MommyController');
// Route::resource('vaccines', 'VaccineController');
Route::resource('babies.vaccines', 'VaccineController');


Route::post('users/confirm', 'UserController@confirm')->name('users.confirm');
// Route::post('users/register', 'RegisterController@confirm')->name('users.register');
