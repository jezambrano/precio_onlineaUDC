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



$factory->define(App\Comercio::class, function (Faker\Generator $faker) {
	 $rubro_id = App\Rubro::all()->lists('id'); 

	 $rubro_id = $faker
                      ->randomElement($rubro_id->toArray());

    return [
        'nombre' => $faker->unique()->company,
        'rubro_id' => $rubro_id,
        'direccion_calle'=>$faker->streetAddress,
        'direccion_esquina'=>$faker->streetAddress,
        'direccion_numero'=>$faker->streetAddress,
    ];
});
