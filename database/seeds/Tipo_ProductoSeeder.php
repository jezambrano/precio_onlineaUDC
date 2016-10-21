<?php

use Illuminate\Database\Seeder;

class Tipo_ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipos_productos')->truncate();
    	factory('App\Tipo_Producto',10)->create();
    }
}
