<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group wincache_refresh_if_changed()
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ControladorHome@index');
Route::get('tratamientos','ControladorHome@tratamientos');
Route::get('personal','ControladorHome@personal');
Route::get('pacientes','ControladorHome@pacientes');

Route::resource('usuario','usuarioController');

Route::resource('tratamiento','TratamientoController');

Route::get('g',function(){return view('welcome');});
