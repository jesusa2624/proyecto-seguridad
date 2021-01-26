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


Route::get('/', 'EstadisticaController@index')->name('index.visitas');

//MODULO BANDEJA VISITAS
Route::get('/bandejavisitas', 'VisitasController@index')->name('bandeja.visitas');
Route::get('/obtener-visitas', 'VisitasController@obtenerVisitas')->name('obtener-visitas');

Route::get('/registrarvisitas', 'VisitasController@create')->name('registrar.visitas');

Route::get('/reportevisitas', 'VisitasController@edit')->name('reporte.visitas');
