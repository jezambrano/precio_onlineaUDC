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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cargar_producto', function () {
    return view('producto/formulario/create');
});

Route::resource('producto','ProductoController');

Route::resource('comercio','ComercioController');

Route::resource('precio','CategoriaController');

Route::resource('precio','PrecioController');