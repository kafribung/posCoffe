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

Route::put('/minuman/{id}', 'API\MakananController@index');
Route::put('/makanan/{id}', 'API\MakananController@update');
Route::put('/print/{id}', 'CheckoutController@update');
Route::get('/tanggal/{tanggal}', 'API\TanggalController@index');
Route::get('/tanggalAnalisa/{tanggal}', 'API\TglanalisaController@index');
/*Belum Dipaki*/
Route::get('/tatanggalTerjual/{tanggal}', 'API\TgllaporanController@index'); 