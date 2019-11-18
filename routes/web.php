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
    return view('welcome');
})->name('/');

Route::get('/register', 'authController@getregister');
Route::post('/register', 'authController@postregister')->name('register') ;
Route::get('/login', 'authController@getlogin');
Route::post('/login', 'authController@postlogin')->name('login');

Route::get('/dashboard', 'tampilan_awal\dashboardController@index');


Route::get('/enkripsi', 'enkripsiController@index');

Route::get('/upload',  'upload\uploadController@upload');
Route::post('/upload/proses', 'upload\uploadController@proses_upload');