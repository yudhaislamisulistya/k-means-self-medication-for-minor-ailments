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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'AdminController@getDashboard')->name('getDashboard');

    Route::get('/data-transformasi-nilai', 'AdminController@getDataTransormasiNilai')->name('getDataTransormasiNilai');

    Route::get('/data-pengguna', 'AdminController@getDataPengguna')->name('getDataPengguna');

    Route::get('/pemilihan-obat', 'AdminController@getPemilihanObat')->name('getPemilihanObat');
    Route::post('/hasl-pemilihan-obat', 'AdminController@postHasilPemilihanObat')->name('postHasilPemilihanObat');

    Route::post('/data-riwayat', 'AdminController@postSimpanRiwayat')->name('postSimpanRiwayat');
    Route::get('/data-riwayat', 'AdminController@getSimpanRiwayat')->name('getDataRiwayat');

    Route::get('/data-obat', 'AdminController@getDataObat')->name('getDataObat');

});
