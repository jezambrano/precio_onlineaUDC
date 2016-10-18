<?php

use Illuminate\Database\Seeder;

class LocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('localidades')->truncate();
    	factory('App\Localidad',20)->create();
    }
}
