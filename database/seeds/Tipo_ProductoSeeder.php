<?php

use Illuminate\Database\Seeder;
use App\Tipo_Producto as Tipo;
use App\Categoria_Producto as Categoria;

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
    	//factory('App\Tipo_Producto',10)->create();

        $categoria=Categoria::where('nombre','LIKE','Tiempo_Libre')->get()->first()->id;
        Tipo::create([ 'nombre' => 'Fitness',
        'categoria_producto_id' => $categoria]);
         Tipo::create([ 'nombre' => 'Camping',
        'categoria_producto_id' => $categoria]);
          Tipo::create([ 'nombre' => 'Deportes_acuaticos',
        'categoria_producto_id' => $categoria]);

        $categoria=Categoria::where('nombre','LIKE','Hogar')->get()->first()->id;
         Tipo::create([ 'nombre' => 'Herramientas',
        'categoria_producto_id' => $categoria]);
           Tipo::create([ 'nombre' => 'Desayuno',
        'categoria_producto_id' => $categoria]);        
        Tipo::create([ 'nombre' => 'Cocina',
        'categoria_producto_id' => $categoria]);
       
        $categoria=Categoria::where('nombre','LIKE','Tecnologia')->get()->first()->id;
         Tipo::create([ 'nombre' => 'Informatica',
        'categoria_producto_id' => $categoria]);
           Tipo::create([ 'nombre' => 'Camaras',
        'categoria_producto_id' => $categoria]);
         Tipo::create([ 'nombre' => 'Telefonos',
        'categoria_producto_id' => $categoria]);
       
        $categoria=Categoria::where('nombre','LIKE','Otros')->get()->first()->id;
         Tipo::create([ 'nombre' => 'Accesorios_Autos',
        'categoria_producto_id' => $categoria]);
          Tipo::create([ 'nombre' => 'Gaming',
        'categoria_producto_id' => $categoria]);


    }
}

