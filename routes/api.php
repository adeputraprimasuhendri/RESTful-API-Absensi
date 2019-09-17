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
Route::get('/karyawan','KaryawanController@index');
Route::post('/karyawan','KaryawanController@create');
Route::put('/karyawan/{id}','KaryawanController@update');
Route::delete('/karyawan/{id}','KaryawanController@delete');

Route::get('/absensi','AbsensiController@index');
Route::post('/absensi','AbsensiController@create');
Route::delete('/absensi/{id}','AbsensiController@delete');