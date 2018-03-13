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
  Route::get('/admin', function () {
      return view('admin.beranda');
  });
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
