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

Route::get('/', function () {
    return view('master');
});
Route::post('formulario', 'buscar@gestionMatriz');
Route::post('formulario1', 'buscar@gestionMatriz');
Route::post('formulario2', 'buscar@gestionMatriz');
Route::post('formulario3', 'buscar@gestionMatriz');