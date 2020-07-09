<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//---------Usuarios---------------

Route::auth();
Route::get('/', 'HomeController@index');
Route::resource('registrar_usuario','UsuariosController');
Route::post('create','UsuariosController@create');
Route::get('listar','UsuariosController@listar');
Route::post('eliminar/{id}','UsuariosController@delete');

//---------Productos---------------

Route::resource('registrarP','ProductosController');
Route::post('createP','ProductosController@create');
Route::get('listarP','ProductosController@listar');
Route::post('eliminarP/{id}','ProductosController@delete');



Route::get('/administracion/add', 'HomeController@add');
Route::get('/administracion/detail/{id}', 'HomeController@detail');
Route::get('/administracion/pdf/{id}', 'HomeController@pdf');
Route::get('/administracion/findClient', 'HomeController@findClient');
Route::get('/administracion/findProduct', 'HomeController@findProduct');
Route::post('/administracion/save', 'HomeController@save');