<?php

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// [][][]---------- Korn part start -----------------------[][][]
Route::get('/admain', function () {
    return view('admin_main');
});

Route::get('/add_item', function () {
    return view('add_item');
});

Route::get('/add_voucher', function () {
    return view('add_voucher');
});

Route::get('/add_promotion', function () {
    return view('add_promotion');
});
// [][][]---------- Korn part end -----------------------[][][]
