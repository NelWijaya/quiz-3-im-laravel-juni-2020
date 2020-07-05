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

Route::get('/', 'ArtikelController@index');

Route::get('/artikel/create', 'ArtikelController@artikel_form'); // menampilkan halaman form
Route::get('/artikel', 'ArtikelController@artikel'); // menampilkan halaman tabel
Route::post('/artikel', 'ArtikelController@artikel_post'); // menyimpan data
Route::get('/artikel/{id}', 'ArtikelController@artikel_detail'); // menampilkan detail arikel dengan id
Route::get('/artikel/{id}/edit', 'ArtikelController@artikel_detail_edit'); // menampilkan form untuk edit artikel
Route::put('/artikel/{id}', 'ArtikelController@artikel_edited'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'ArtikelController@delete_artikel'); // menghapus data dengan id
