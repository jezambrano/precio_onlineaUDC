<?php

use Illuminate\Database\Seeder;
use App\Categoria_Producto as Categoria;
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
    	//factory('App\Categoria_Producto',4)->create();

        Categoria::create(['nombre' => 'Tiempo_Libre']);
        Categoria::create(['nombre' => 'Hogar']);
        Categoria::create(['nombre' => 'Tecnologia']);
        Categoria::create(['nombre' => 'Otros']);
      
    }

}
