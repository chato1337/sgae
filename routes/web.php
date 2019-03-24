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


//rutas para registro de datos basicos
Route::get('main', 'mainController@main')->name('dashboard');

Route::get('crear_registro', 'registrosController@crear_registro');

Route::post('creacion_registro', 'registrosController@proc_creacion');

Route::get('editar_registro/{request}', 'registrosController@editar_registro');

Route::patch('edicion_registro/{request}', 'registrosController@proc_edicion');

Route::get('listar_registros', 'registrosController@listar_registros');

//rutas para registro de docentes
Route::get('asignar_docente/{request}', 'docentesController@asignar');

Route::post('asignacion_docente', 'docentesController@proc_asignacion');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
