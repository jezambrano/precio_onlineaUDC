<?php

use Illuminate\Database\Seeder;

class Presentacion_ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	\DB::table('presentaciones_productos')->truncate();
    	factory('App\Presentacion_Producto',20)->create();
    }
}
