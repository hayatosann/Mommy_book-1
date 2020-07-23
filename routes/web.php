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

// Route::get('/', function () {
//     return view('login');
// });

//妊婦健診一覧表示画面
Route::get('momcheckups', function() {
    return view('momcheckups');
});
// // 妊婦健診登録・編集画面
// Route::get('momcheckups_form', function() {
//     return view('create');
// });

// // Route::resource('maternity_checkups', 'Maternity_checkupController');

// 胎児進捗一覧表示画面
Route::get('babygrowth', function(){
    return view('babygrowth');
});
// // 胎児進捗登録・編集画面
// Route::get('babygrowth_form', function() {
//     return view('babygrowth_form');
// });

// 赤ちゃん検診一覧表示画面
Route::get('babycheckups', function(){
    return view('babycheckups');
});
// // 赤ちゃん検診登録・編集画面
// Route::get('babycheckups_form', function(){
//     return view('babycheckups_form');
// });


// 予防接種一覧表示画面
Route::get('vaccination', function(){
    return view('vaccination');
});
// // 予防接種登録・編集画面
// Route::get('vaccination_form', function(){
//     return view('vaccination_form');
// });

// Route::get('/mommy', function () {
//     return view('mommy');
// });
// Route::get('/baby', function () {
//     return view('baby');
// });

// Route::get('/mamaform', function () {
//     return view('mamaform');
// });
// Route::get('/mamaconfirm', function () {
//     return view('mamaconfirm');
// });
// Route::get('/kidform', function () {
//     return view('kidform');
// });
// Route::get('/kidconfirm', function () {
//     return view('kidconfirm');

// });



Route::resource('maternity_checkups', 'Maternity_checkupController');
// Route::get('maternity_checkups', 'Maternity_checkupController@create')->name('maternity_checkups');
// Route::post('maternity_checkups', 'Maternity_checkupController@store')->name('maternity_checkups');

