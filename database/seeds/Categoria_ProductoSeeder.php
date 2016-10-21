<?php

use Illuminate\Database\Seeder;

class Categoria_ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categorias_productos')->truncate();
    	factory('App\Categoria_Producto',5)->create();
    }
}
