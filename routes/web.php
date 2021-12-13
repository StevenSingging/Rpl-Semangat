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
//Route::get('/postlogin','\App\Http\Controllers\LoginController@index');
Route::post('/simpanregistrasi', '\App\Http\Controllers\RegisterController@simpanregistrasi')->name('simpanregistrasi');
Route::get('/register', '\App\Http\Controllers\RegisterController@index')->name('register');
Route::post('/postlogin','\App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout','\App\Http\Controllers\LoginController@logout')->name('logout');

//Mahasiswa
//Route::group(['middleware' => ['auth','ceklevel:mahasiswa']],function(){
    Route::get('/mahasiswa', '\App\Http\Controllers\MahasiswaController@index')->name('mahasiswa');

//});
//Dashboard Mahasiswa
Route::get('/mahasiswa/suratmasukmhs', '\App\Http\Controllers\MahasiswaController@suratmasukmhs')->name('suratmasukmhs');

//CRUD Surat Mahasiswa
Route::get('/mahasiswa/pengajuansuratmhs', '\App\Http\Controllers\MahasiswaController@pengajuansuratmhs')->name('pengajuansuratmhs');
Route::get('/mahasiswa/viewsuratmhs/{id}', '\App\Http\Controllers\MahasiswaController@viewsuratmhs')->name('viewsuratmhs');
Route::get('/mahasiswa/suratkegiatanmhs', '\App\Http\Controllers\MahasiswaController@suratkegiatanmhs')->name('suratkegiatanmhs');
Route::get('/mahasiswa/surattugaskmhs', '\App\Http\Controllers\MahasiswaController@surattugaskmhs')->name('surattugaskmhs');
Route::get('/mahasiswa/surattugaspmhs', '\App\Http\Controllers\MahasiswaController@surattugaspmhs')->name('surattugaspmhs');
Route::post('/mahasiswa/simpansurattugaskmhs', '\App\Http\Controllers\MahasiswaController@simpansurattugaskmhs')->name('simpansurattugaskmhs');
Route::post('/mahasiswa/simpansurattugaspmhs', '\App\Http\Controllers\MahasiswaController@simpansurattugaspmhs')->name('simpansurattugaspmhs');
Route::post('/mahasiswa/simpansuratkegiatanmhs', '\App\Http\Controllers\MahasiswaController@simpansuratkegiatanmhs')->name('simpansuratkegiatanmhs');

Route::get('/mahasiswa/editsurattgskmhs/{id}', '\App\Http\Controllers\MahasiswaController@editsurattgskmhs')->name('editsurattgskmhs');
Route::get('/mahasiswa/editsurattgspmhs/{id}', '\App\Http\Controllers\MahasiswaController@editsurattgspmhs')->name('editsurattgspmhs');

Route::post('/mahasiswa/updatesuratmhs/{id}', '\App\Http\Controllers\MahasiswaController@updatesuratmhs')->name('updatesuratmhs');
Route::get('/mahasiswa/deletesuratmhs/{id}', '\App\Http\Controllers\MahasiswaController@deletesuratmhs')->name('deletesuratmhs');
Route::get('/mahasiswa/arsipstpmhs/', '\App\Http\Controllers\MahasiswaController@arsipstpmhs')->name('arsipstpmhs');
Route::get('/mahasiswa/arsipstkmhs/', '\App\Http\Controllers\MahasiswaController@arsipstkmhs')->name('arsipstkmhs');
Route::get('/mahasiswa/arsipskmmhs/', '\App\Http\Controllers\MahasiswaController@arsipskmmhs')->name('arsipskmmhs');
Route::get('/mahasiswa/cetakpstpmhs/{id}', '\App\Http\Controllers\MahasiswaController@downloadsurattgsp')->name('downloadstp');
Route::get('/mahasiswa/cetakpstkmhs/{id}', '\App\Http\Controllers\MahasiswaController@downloadsurattgsk')->name('downloadstk');
Route::get('/mahasiswa/cetakskmhs/{id}', '\App\Http\Controllers\MahasiswaController@downloadsuratk')->name('downloadsk');
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
Route::get('/dosen/suratkegiatandsn', '\App\Http\Controllers\DosenController@suratkegiatandsn')->name('suratkegiatandsn');

Route::get('/dosen/surattugaskdsn', '\App\Http\Controllers\DosenController@surattugaskdsn')->name('surattugaskdsn');
Route::get('/dosen/surattugaspdsn', '\App\Http\Controllers\DosenController@surattugaspdsn')->name('surattugaspdsn');
Route::post('/dosen/simpansurattugaskdsn', '\App\Http\Controllers\DosenController@simpansurattugaskdsn')->name('simpansurattugaskdsn');
Route::post('/dosen/simpansurattugaspdsn', '\App\Http\Controllers\DosenController@simpansurattugaspdsn')->name('simpansurattugaspdsn');
Route::post('/dosen/simpansuratkegiatandsn', '\App\Http\Controllers\DosenController@simpansuratkegiatandsn')->name('simpansuratkegiatandsn');
Route::get('/dosen/viewsuratdsn/{id}', '\App\Http\Controllers\DosenController@viewsuratdsn')->name('viewsuratdsn');
Route::get('/dosen/editsurattgspdsn/{id}', '\App\Http\Controllers\DosenController@editsurattgspdsn')->name('editsurattgspdsn');
Route::get('/dosen/editsurattgskdsn/{id}', '\App\Http\Controllers\DosenController@editsurattgskdsn')->name('editsurattgskdsn');
Route::get('/dosen/downloaduratpribadidsn/{id}', '\App\Http\Controllers\MahasiswaController@downloadsurattgsp');
Route::get('/dosen/downloadtgskdsn/{id}', '\App\Http\Controllers\MahasiswaController@downloadsurattgsk');
Route::get('/dosen/downloadskdsn/{id}', '\App\Http\Controllers\MahasiswaController@downloadsuratk');
Route::post('/dosen/updatesuratdsn/{id}', '\App\Http\Controllers\DosenController@updatesuratdsn')->name('updatesuratdsn');
Route::get('/dosen/deletesuratdsn/{id}', '\App\Http\Controllers\DosenController@deletesuratdsn')->name('deletesuratdsn');
Route::get('/dosen/arsipstpdsn/', '\App\Http\Controllers\DosenController@arsipstpdsn')->name('arsipstpdsn');
Route::get('/dosen/arsipstkdsn/', '\App\Http\Controllers\DosenController@arsipstkdsn')->name('arsipstkdsn');
Route::get('/dosen/arsipskmdsn/', '\App\Http\Controllers\DosenController@arsipskmdsn')->name('arsipskmdsn');


//Mencari Surat Dosen
Route::get('/dosen/searchdsn','\App\Http\Controllers\DosenController@searchdsn')->name('searchdsn');

//Admin
Route::group(['middleware' => ['auth','ceklevel:admin']],function(){
    Route::get('/adminrpl', '\App\Http\Controllers\AdminController@index')->name('adminrpl');

});
//Dashboard Admin

//CRUD Surat Admin
Route::get('/adminrpl/pengajuansuratadm', '\App\Http\Controllers\AdminController@pengajuansuratadm')->name('pengajuansuratadm');
Route::get('/adminrpl/viewsuratadm/{id}', '\App\Http\Controllers\AdminController@viewsuratadm')->name('viewsuratadm');
Route::get('/adminrpl/tambahskdekan', '\App\Http\Controllers\AdminController@tambahsuratskdknadm')->name('tambahskdekan');
Route::get('/adminrpl/tambahpersonalia', '\App\Http\Controllers\AdminController@tambahsuratpsadm')->name('tambahps');
Route::get('/adminrpl/tambahketerangan', '\App\Http\Controllers\AdminController@tambahsuratkadm')->name('tambahsk');
Route::get('/adminrpl/tambahundangan', '\App\Http\Controllers\AdminController@tambahsuratundadm')->name('tambahund');
Route::get('/adminrpl/tambahdaftarhadir', '\App\Http\Controllers\AdminController@tambahsuratdhadm')->name('tambahdh');
Route::get('/adminrpl/tugaspribadi', '\App\Http\Controllers\AdminController@tambahsurattgspadm')->name('tambahtgsp');
Route::get('/adminrpl/tugaskel', '\App\Http\Controllers\AdminController@tambahsurattgskadm')->name('tambahtgsk');

Route::post('/adminrpl/simpanpersonalia', '\App\Http\Controllers\AdminController@simpanpersonalia')->name('simpanpersonalia');
Route::post('/adminrpl/simpanundangan', '\App\Http\Controllers\AdminController@simpanundangan')->name('simpanund');
Route::post('/adminrpl/simpandaftarhadir', '\App\Http\Controllers\AdminController@simpandaftarhadir')->name('simpandf');
Route::post('/adminrpl/simpanketerangan', '\App\Http\Controllers\AdminController@simpanketerangan')->name('simpanketerangan');
Route::post('/adminrpl/simpansuratpribadi', '\App\Http\Controllers\AdminController@simpantugaspribadi')->name('simpantugaspribadi');
Route::post('/adminrpl/simpansuratkelompok', '\App\Http\Controllers\AdminController@simpantugaskelompok')->name('simpantugaskelompok');
Route::post('/adminrpl/simpanberitaacara', '\App\Http\Controllers\AdminController@simpanberitaacara')->name('simpanberitaacara');
Route::post('/adminrpl/simpansuratdekan', '\App\Http\Controllers\AdminController@simpanskdekan')->name('simpanskdekan');

Route::get('/adminrpl/beritaacara', '\App\Http\Controllers\AdminController@tambahsuratbcadm')->name('tambahbc');
Route::get('/adminrpl/editsurata/{id}', '\App\Http\Controllers\AdminController@editsurata')->name('editsurata');
Route::get('/adminrpl/editsuratb/{id}', '\App\Http\Controllers\AdminController@editsuratb')->name('editsuratb');
Route::get('/adminrpl/editsuratc/{id}', '\App\Http\Controllers\AdminController@editsuratc')->name('editsuratc');
Route::get('/adminrpl/editsuratdp/{id}', '\App\Http\Controllers\AdminController@editsuratdp')->name('editsuratdp');
Route::get('/adminrpl/editsuratdk/{id}', '\App\Http\Controllers\AdminController@editsuratdk')->name('editsuratdk');
Route::get('/adminrpl/editsurate/{id}', '\App\Http\Controllers\AdminController@editsurate')->name('editsurate');
Route::post('/adminrpl/updatesuratadm/{id}', '\App\Http\Controllers\AdminController@updatesuratadm')->name('updatesuratadm');
Route::post('/adminrpl/updatevalidasisuratadm/{id}', '\App\Http\Controllers\AdminController@updatevalidasisuratadm')->name('updatevalidasisuratadm');
Route::get('/adminrpl/deletesuratadm/{id}', '\App\Http\Controllers\AdminController@deletesuratadm')->name('deletesuratadm');
Route::get('/adminrpl/suratkeluaradm', '\App\Http\Controllers\AdminController@suratkeluaradm')->name('suratkeluaradm');

Route::get('/adminrpl/validasisurata/{id}', '\App\Http\Controllers\AdminController@validasisurata')->name('validasisurata');
Route::get('/adminrpl/validasisuratap/{id}', '\App\Http\Controllers\AdminController@validasisuratap')->name('validasisuratap');

Route::get('/adminrpl/validasisuratb/{id}', '\App\Http\Controllers\AdminController@validasisuratb')->name('validasisuratb');

Route::get('/adminrpl/validasisuratc/{id}', '\App\Http\Controllers\AdminController@validasisuratc')->name('validasisuratc');
Route::get('/adminrpl/validasisuratcdf/{id}', '\App\Http\Controllers\AdminController@validasisuratcdf')->name('validasisuratcdf');

Route::get('/adminrpl/validasisuratdk/{id}', '\App\Http\Controllers\AdminController@validasisuratdk')->name('validasisuratdk');
Route::get('/adminrpl/validasisuratdp/{id}', '\App\Http\Controllers\AdminController@validasisuratdp')->name('validasisuratdp');
Route::get('/adminrpl/validasisurate/{id}', '\App\Http\Controllers\AdminController@validasisurate')->name('validasisurate');
Route::get('/autocomplete', '\App\Http\Controllers\AdminController@autocomplete')->name('autocomplete');
Route::get('/adminrpl/arsipsa', '\App\Http\Controllers\AdminController@arsipsa')->name('arsipsa');
Route::get('/adminrpl/arsipsb', '\App\Http\Controllers\AdminController@arsipsb')->name('arsipsb');
Route::get('/adminrpl/arsipsc', '\App\Http\Controllers\AdminController@arsipsc')->name('arsipsc');
Route::get('/adminrpl/arsipsd', '\App\Http\Controllers\AdminController@arsipsd')->name('arsipsd');
Route::get('/adminrpl/arsipse', '\App\Http\Controllers\AdminController@arsipse')->name('arsipse');

//Mencari Surat Admin
Route::get('/adminrpl/searchadm','\App\Http\Controllers\AdminController@searchadm')->name('searchadm');

//Cetak Surat
Route::get('/adminrpl/surattugas','\App\Http\Controllers\AdminController@surattugas')->name('surattugas');