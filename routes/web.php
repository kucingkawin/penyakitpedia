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
    return view('utama');
});

//Penyakit dan artikel.
Route::get('/penyakit/{idPenyakit}', "PenyakitController@dapatkanArtikelPenyakitBerdasarkanId")->name('Penyakit.dapatkanArtikelPenyakitBerdasarkanId');
Route::get('/penyakit/{idPenyakit}/{idArtikelPenyakit}', "PenyakitController@dapatkanIsiArtikelPenyakit")->name('Penyakit.dapatkanIsiArtikelPenyakit');

//------Admin------//

//Utama
Route::get('/admin', function(){
    return 'Ini admin utama';
})->name('Admin');

//Penyakit
Route::get('/admin/penyakit', 'AdminPenyakitController@tampilkan')->name('AdminPenyakit.tampilkan');
Route::get('/admin/penyakit/tambah', 'AdminPenyakitController@tambahGet')->name('AdminPenyakit.tambahGet');
Route::post('/admin/penyakit/tambah', 'AdminPenyakitController@tambahPost')->name('AdminPenyakit.tambahPost');
Route::get('/admin/penyakit/ubah', 'AdminPenyakitController@ubahGet')->name('AdminPenyakit.ubahGet');
Route::post('/admin/penyakit/ubah', 'AdminPenyakitController@ubahPost')->name('AdminPenyakit.ubahPost');
Route::get('/admin/penyakit/hapus', 'AdminPenyakitController@hapusGet')->name('AdminPenyakit.hapusGet');

//Artikel Penyakit
Route::get('/admin/penyakit/artikel', 'AdminArtikelPenyakitController@tampilkan')->name('AdminArtikelPenyakit.tampilkan');
Route::get('/admin/penyakit/artikel/tambah', 'AdminArtikelPenyakitController@tambahGet')->name('AdminArtikelPenyakit.tambahGet');
Route::post('/admin/penyakit/artikel/tambah', 'AdminArtikelPenyakitController@tambahPost')->name('AdminArtikelPenyakit.tambahPost');
Route::get('/admin/penyakit/artikel/ubah', 'AdminArtikelPenyakitController@ubahGet')->name('AdminArtikelPenyakit.ubahGet');
Route::post('/admin/penyakit/artikel/ubah', 'AdminArtikelPenyakitController@ubahPost')->name('AdminArtikelPenyakit.ubahPost');
Route::get('/admin/penyakit/artikel/hapus', 'AdminArtikelPenyakitController@hapusGet')->name('AdminArtikelPenyakit.hapusGet');

//Pertanyaan Artikel Penyakit
/*Route::get('/admin/penyakit/artikel/pertanyaan', '');
Route::post('/admin/penyakit/artikel/pertanyaan/tambah', '');
Route::get('/admin/penyakit/artikel/pertanyaan/ubah', '');
Route::post('/admin/penyakit/artikel/pertanyaan/ubah', '');
Route::get('/admin/penyakit/artikel/pertanyaan/hapus', '');
Route::post('/admin/penyakit/artikel/pertanyaan/hapus', '');

//Feedback Penyakit
Route::get('/admin/penyakit/artikel/feedback', '');
Route::get('/admin/penyakit/artikel/feedback/tambah', '');
Route::get('/admin/penyakit/artikel/feedback/ubah', '');
Route::post('/admin/penyakit/artikel/feedback/ubah', '');
Route::get('/admin/penyakit/artikel/feedback/hapus', '');
Route::post('/admin/penyakit/artikel/feedback/hapus', '');*/