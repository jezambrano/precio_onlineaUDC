<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Rubro::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->unique()->jobTitle
    ];
});
$factory->define(App\Localidad::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->unique()->country
    ];
});



$factory->define(App\Comercio::class, function (Faker\Generator $faker) {
	 $rubro_id = App\Rubro::all()->lists('id'); 
     $localidad_id = App\Localidad::all()->lists('id'); 
	 $rubro_id = $faker
                      ->randomElement($rubro_id->toArray());
     $localidad_id = $faker
                      ->randomElement($localidad_id->toArray());

    return [
        'nombre' => $faker->unique()->company,
        'rubro_id' => $rubro_id,
        'direccion_calle'=>$faker->streetAddress,
        'direccion_esquina'=>$faker->streetAddress,
        'direccion_numero'=>$faker->streetAddress,
        'localidad_id'=>$localidad_id,
        'horario'=>$faker->time($format = 'H:i:s A', $max = 'now').' a '.$faker->time($format = 'H:i:s A', $max = 'now')
    ];
});



$factory->define(App\Categoria_Producto::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->unique()->jobTitle
    ];
});



$factory->define(App\Tipo_Producto::class, function (Faker\Generator $faker) {
     $categoria = App\Categoria_Producto::all()->lists('id'); 
     $categoria = $faker
                      ->randomElement($categoria->toArray());

    return [
        'nombre' => $faker->unique()->jobTitle,
        'categoria_producto_id' => $categoria
    ];
});



$factory->define(App\Presentacion_Producto::class, function (Faker\Generator $faker) {
     $tipo = App\Tipo_Producto::all()->lists('id'); 
     $tipo = $faker
                      ->randomElement($tipo->toArray());

    return [
        'nombre' => $faker->unique()->jobTitle,
        'tipo_producto_id' => $tipo
    ];
});