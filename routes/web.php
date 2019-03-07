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

Route::get('kategori_film', function(){
    return "Andiazhr";
});

Route::get('detail_kategori/{id_kategori_film}', function($id_kategori_film){
    return "halaman" . $id_kategori_film ;
});

Route::resource('kategori_film', 'KategoriFilmController')->except(['destroy']);

Route::resource('film', 'FilmController')->except(['destroy']);

Route::resource('transaksi_peminjaman', 'TransaksiPeminjamanController')->except(['destroy']);