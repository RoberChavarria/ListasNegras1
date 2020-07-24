<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'ListaNegraController@List')->name('home');

Route::get('getList', 'ListaNegraController@getList')->name('getList');
Route::get('/busquedaMasivaApp', 'ListaNegraController@busquedaMasivaApp')->name('busquedaMasivaApp');
Route::get('/reporteTareas','ListaNegraController@reporteTareas')->name('reporteTareas');
Route::get('api.reporteTareasGrid','ListaNegraController@reporteTareasGrid')->name('api.reporteTareasGrid');
Route::get('/ejecProceso/{id}','ListaNegraController@show')->name('show');


