<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

//Log in dan Log out
Route::get('/', function () {
    return view('login');
});
Route::get('/postlogin','\App\Http\Controllers\LoginController@index');
Route::post('/simpanregistrasi', '\App\Http\Controllers\RegisterController@simpanregistrasi')->name('simpanregistrasi');
Route::get('/register', '\App\Http\Controllers\RegisterController@index')->name('register');
Route::post('/postlogin','\App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout','\App\Http\Controllers\LoginController@logout')->name('logout');

//Mahasiswa
Route::group(['middleware' => ['auth','ceklevel:mahasiswa']],function(){
    Route::get('/mahasiswa', '\App\Http\Controllers\MahasiswaController@index')->name('mahasiswa');

});
//Dashboard Mahasiswa
Route::get('/mahasiswa/suratkegiatanmhs', '\App\Http\Controllers\MahasiswaController@suratkegiatanmhs')->name('suratkegiatanmhs');
Route::get('/mahasiswa/surattugasmhs', '\App\Http\Controllers\MahasiswaController@surattugasmhs')->name('surattugasmhs');
Route::get('/mahasiswa/suratmasukmhs', '\App\Http\Controllers\MahasiswaController@suratmasukmhs')->name('suratmasukmhs');

//CRUD Surat Mahasiswa
Route::get('/mahasiswa/pengajuansuratmhs', '\App\Http\Controllers\MahasiswaController@pengajuansuratmhs')->name('pengajuansuratmhs');
Route::get('/mahasiswa/viewsuratmhs/{id}', '\App\Http\Controllers\MahasiswaController@viewsuratmhs')->name('viewsuratmhs');
Route::get('/mahasiswa/tambahsuratmhs', '\App\Http\Controllers\MahasiswaController@tambahsuratmhs')->name('tambahsuratmhs');
Route::post('/mahasiswa/simpansuratmhs', '\App\Http\Controllers\MahasiswaController@simpansuratmhs')->name('simpansuratmhs');
Route::get('/mahasiswa/editsuratmhs/{id}', '\App\Http\Controllers\MahasiswaController@editsuratmhs')->name('editsuratmhs');
Route::post('/mahasiswa/updatesuratmhs/{id}', '\App\Http\Controllers\MahasiswaController@updatesuratmhs')->name('updatesuratmhs');
Route::get('/mahasiswa/deletesuratmhs/{id}', '\App\Http\Controllers\MahasiswaController@deletesuratmhs')->name('deletesuratmhs');

//Mencari Surat Mahasiswa
Route::get('/mahasiswa/searchmhs','\App\Http\Controllers\MahasiswaController@searchmhs')->name('searchmhs');

//Dosen
Route::group(['middleware' => ['auth','ceklevel:dosen']],function(){
    Route::get('/dosen', '\App\Http\Controllers\DosenController@index')->name('dosen');

});
//Dashboard Dosen
Route::get('/dosen/skdekan', '\App\Http\Controllers\DosenController@skdekan')->name('skdekan');
Route::get('/dosen/surattugasdsn', '\App\Http\Controllers\DosenController@surattugasdsn')->name('surattugasdsn');
Route::get('/dosen/suratmasukdsn', '\App\Http\Controllers\DosenController@suratmasukdsn')->name('suratmasukdsn');

//CRUD Surat Dosen
Route::get('/dosen/pengajuansuratdsn', '\App\Http\Controllers\DosenController@pengajuansuratdsn')->name('pengajuansuratdsn');
Route::get('/dosen/viewsuratdsn/{id}', '\App\Http\Controllers\DosenController@viewsuratdsn')->name('viewsuratdsn');
Route::get('/dosen/tambahsuratdsn', '\App\Http\Controllers\DosenController@tambahsuratdsn')->name('tambahsuratdsn');
Route::post('/dosen/simpansuratdsn', '\App\Http\Controllers\DosenController@simpansuratdsn')->name('simpansuratdsn');
Route::get('/dosen/editsuratdsn/{id}', '\App\Http\Controllers\DosenController@editsuratdsn')->name('editsuratdsn');
Route::post('/dosen/updatesuratdsn/{id}', '\App\Http\Controllers\DosenController@updatesuratdsn')->name('updatesuratdsn');
Route::get('/dosen/deletesuratdsn/{id}', '\App\Http\Controllers\DosenController@deletesuratdsn')->name('deletesuratdsn');

//Mencari Surat Dosen
Route::get('/dosen/searchdsn','\App\Http\Controllers\DosenController@searchdsn')->name('searchdsn');

//Admin
Route::group(['middleware' => ['auth','ceklevel:admin']],function(){
    Route::get('/adminrpl', '\App\Http\Controllers\AdminController@index')->name('adminrpl');

});
//Dashboard Admin
Route::get('/adminrpl/skdekanadm', '\App\Http\Controllers\AdminController@skdekanadm')->name('skdekanadm');
Route::get('/adminrpl/suratketmhsadm', '\App\Http\Controllers\AdminController@suratketmhsadm')->name('suratketmhsadm');
Route::get('/adminrpl/suratundanganadm', '\App\Http\Controllers\AdminController@suratundanganadm')->name('suratundanganadm');
Route::get('/adminrpl/surattugasadm', '\App\Http\Controllers\AdminController@surattugasadm')->name('surattugasadm');
Route::get('/adminrpl/beritaacaraadm', '\App\Http\Controllers\AdminController@beritaacaraadm')->name('beritaacaraadm');
Route::get('/adminrpl/suratkeluaradm', '\App\Http\Controllers\AdminController@suratkeluaradm')->name('suratkeluaradm');

//CRUD Surat Admin
Route::get('/adminrpl/pengajuansuratadm', '\App\Http\Controllers\AdminController@pengajuansuratadm')->name('pengajuansuratadm');
Route::get('/adminrpl/viewsuratadm/{id}', '\App\Http\Controllers\AdminController@viewsuratadm')->name('viewsuratadm');
Route::get('/adminrpl/tambahsuratadm', '\App\Http\Controllers\AdminController@tambahsuratadm')->name('tambahsuratadm');
Route::post('/adminrpl/simpansuratadm', '\App\Http\Controllers\AdminController@simpansuratadm')->name('simpansuratadm');
Route::get('/adminrpl/editsuratadm/{id}', '\App\Http\Controllers\AdminController@editsuratadm')->name('editsuratadm');
Route::post('/adminrpl/updatesuratadm/{id}', '\App\Http\Controllers\AdminController@updatesuratadm')->name('updatesuratadm');
Route::get('/adminrpl/deletesuratadm/{id}', '\App\Http\Controllers\AdminController@deletesuratadm')->name('deletesuratadm');
Route::get('/adminrpl/kirimsuratadm', '\App\Http\Controllers\AdminController@kirimsuratadm')->name('kirimsuratadm');

//Mencari Surat Admin
Route::get('/adminrpl/searchadm','\App\Http\Controllers\AdminController@searchadm')->name('searchadm');

//Cetak Surat
Route::get('/adminrpl/surattugas','\App\Http\Controllers\AdminController@surattugas')->name('surattugas');
