<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api']], function () {
  Route::GET('/searchnik/{nik}', 'JsonController@SearchNik');
  Route::GET('/datadaerah', 'JsonController@DataDaerah');
  Route::GET('/datadaerah-banjarbaru', 'JsonController@DataDaerahBanjarbaru');
  Route::GET('/datakelurahan/{idkecamatan}', 'JsonController@DataKelurahan');
  Route::GET('/datainstansi', 'JsonController@DataInstansi');
});
