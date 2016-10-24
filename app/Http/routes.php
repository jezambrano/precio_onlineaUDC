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


Route::resource('producto','ProductoController');

Route::resource('comercio','ComercioController');

Route::resource('categoria','CategoriaController');


Route::get('producto/{producto}/precio/create','PrecioControlller@productoPrecio')->name('producto.precio');


Route::get('producto/data/{producto}',function($producto=null)
{
    
	$producto=App\Producto::find($producto);

	return $producto;
});



Route::resource('precio','PrecioControlller');