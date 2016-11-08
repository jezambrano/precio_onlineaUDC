<?php

use Illuminate\Database\Seeder;

class ComercioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comercios')->truncate();
    	factory('App\Comercio',7)->create();
    }
}
