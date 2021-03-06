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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'HomeController@show_users')->name('users');
Route::get('/api/users', 'HomeController@get_users');

Route::get('/barangs', 'HomeController@show_barangs')->name('barangs');
Route::get('/api/barangs', 'HomeController@get_barangs');
Route::post('/barangs', 'HomeController@add_barangs')->name('tambah barang');

