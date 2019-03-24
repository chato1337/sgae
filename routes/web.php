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

Route::get('wacho', function () {
    return view('welcome');
});

// rutas de frontend

Route::get('/', 'frontendController@index')->name('indice');

Route::get('acerca_de', 'frontendController@about')->name('acerca');

//rutas del backend

Route::get('main', 'mainController@main')->name('dashboard');

Route::get('crear_registro', 'registrosController@crear_registro');

Route::post('creacion_registro', 'registrosController@proc_creacion');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
