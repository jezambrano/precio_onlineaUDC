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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'HomeController@index')->name('inicio');


// Authentication routes...
Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@logout', 'as' => 'logout']);

// Registration routes...
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'register']);



// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');



Route::get('filtrar_producto/{producto}','PrecioController@filtraProducto');
Route::get('filtrar_categoria/{categoria}','PrecioController@filtraCategoria');

Route::resource('producto','ProductoController');

Route::resource('comercio','ComercioController');

Route::resource('categoria','CategoriaController');



Route::get('producto/{producto}/precio/create','PrecioController@productoPrecio')->name('producto.precio');



Route::get('producto/data/{producto}',function($producto=null)
{
    
	$producto=App\Producto::find($producto);

	return $producto;
});




Route::resource('precio','PrecioController');


Route::get('presentacion/{presentacion}/asignar/producto','PresentacionController@asignar_producto')->name('presentacion.asignar.producto');
Route::post('presentacion/{presentacion}/asignar/producto','PresentacionController@asignar_producto_store')->name('presentacion.asignar.producto.store');

Route::get('quitar/{presentacion}/{producto}','PresentacionController@quitar_producto')->name('presentacion.quitar.producto');
Route::resource('presentacion','PresentacionController');
