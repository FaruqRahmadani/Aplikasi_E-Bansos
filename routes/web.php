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

Route::GET('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::get('/', function () {
    return view('public.beranda');
});

Route::group(['middleware' => ['UserMiddleware']], function () {
  Route::GET('/admin', 'AdminController@Beranda')->name('Beranda');
  Route::GET('/admin/input', 'AdminController@InputData')->name('Input-Data');
  Route::POST('/admin/input', 'AdminController@SubmitInputData')->name('Submit-Input-Data');
  Route::GET('/admin/datapemohon', 'AdminController@DataPemohon')->name('Data-Pemohon');
  Route::GET('/admin/datapemohon/{id}/hapus', 'AdminController@DeleteDataPemohon')->name('Delete-Data-Pemohon');
  Route::GET('/admin/datapemohon/{id}/edit', 'AdminController@EditDataPemohon')->name('Edit-Data-Pemohon');
  Route::POST('/admin/datapemohon/{id}/edit', 'AdminController@submitEditDataPemohon')->name('Submit-Edit-Data-Pemohon');
  Route::GET('/admin/datapemohon/{id}/info', 'AdminController@InfoDataPemohon')->name('Info-Data-Pemohon');
  Route::GET('/admin/dataprovinsi', 'AdminController@DataProvinsi')->name('Data-Provinsi');
  Route::GET('/admin/dataprovinsi/{id}/hapus', 'AdminController@DeleteDataProvinsi')->name('Delete-Data-Provinsi');
  Route::GET('/admin/dataprovinsi/{id}/edit', 'AdminController@EditDataProvinsi')->name('Edit-Data-Provinsi');
  Route::POST('/admin/dataprovinsi/{id}/edit', 'AdminController@SubmitEditDataProvinsi')->name('Submit-Edit-Data-Provinsi');
  Route::GET('/admin/dataprovinsi/tambah', 'AdminController@TambahDataProvinsi')->name('Tambah-Data-Provinsi');
  Route::POST('/admin/dataprovinsi/tambah', 'AdminController@SubmitTambahDataProvinsi')->name('Submit-Tambah-Data-Provinsi');
  Route::GET('/admin/datakota', 'AdminController@DataKota')->name('Data-Kota');
  Route::GET('/admin/datakota/{id}/delete', 'AdminController@DeleteDataKota')->name('Delete-Data-Kota');
  Route::GET('/admin/datakota/{id}/edit', 'AdminController@EditDataKota')->name('Edit-Data-Kota');
  Route::POST('/admin/datakota/{id}/edit', 'AdminController@submitEditDataKota')->name('Submit-Edit-Data-Kota');
  Route::GET('/admin/datakota/tambah', 'AdminController@TambahDataKota')->name('Tambah-Data-Kota');
  Route::POST('/admin/datakota/tambah', 'AdminController@submitTambahDataKota')->name('Submit-Tambah-Data-Kota');
  Route::GET('/admin/datakecamatan', 'AdminController@DataKecamatan')->name('Data-Kecamatan');
  Route::GET('/admin/datakecamatan/{id}/hapus', 'AdminController@DeleteDataKecamatan')->name('Delete-Data-Kecamatan');
  Route::GET('/admin/datakecamatan/{id}/edit', 'AdminController@EditDataKecamatan')->name('Edit-Data-Kecamatan');
  Route::POST('/admin/datakecamatan/{id}/edit', 'AdminController@submitEditDataKecamatan')->name('Submit-Edit-Data-Kecamatan');
});

Route::get('/loading', function () {
    return view('admin.loading');
});

// tabel admin
Route::get('/admin/daftar_pemohon', function () {
    return view('admin.daftar_pemohon');
});
Route::get('/admin/daftar_proposal', function () {
    return view('admin.daftar_proposal');
});
Route::get('/admin/daftar_instansi', function () {
    return view('admin.daftar_instansi');
});
Route::get('/admin/daftar_provinsi', function () {
    return view('admin.daftar_provinsi');
});
Route::get('/admin/daftar_kota', function () {
    return view('admin.daftar_kota');
});
Route::get('/admin/daftar_kecamatan', function () {
    return view('admin.daftar_kecamatan');
});
Route::get('/admin/daftar_kelurahan', function () {
    return view('admin.daftar_kelurahan');
});

// form input
Route::get('/admin/form_page1', function () {
    return view('admin.form_page1');
});
Route::get('/admin/form_page2', function () {
    return view('admin.form_page2');
});
Route::get('/admin/form_page3', function () {
    return view('admin.form_page3');
});
Route::get('/admin/form_update', function () {
    return view('admin.form_update');
});

// info detail
Route::get('/admin/daftar_pemohon/detail_pemohon', function () {
    return view('admin.detail_pemohon');
});
Route::get('/admin/daftar_instansi/detail_instansi', function () {
    return view('admin.detail_instansi');
});
Route::get('/admin/daftar_proposal/detail_proposal', function () {
    return view('admin.detail_proposal');
});

//route public
Route::get('/persyaratan', function () {
    return view('public.persyaratan');
});
Route::get('/daftar_proposal', function () {
    return view('public.daftar_proposal');
});
Route::get('/daftar_proposal/detail_proposal', function () {
    return view('public.detail_proposal');
});
Route::get('/kontak', function () {
    return view('public.kontak');
});

Route::get('/home', 'HomeController@index')->name('home');
