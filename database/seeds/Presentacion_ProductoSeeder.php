<?php

use Illuminate\Database\Seeder;

use App\Tipo_Producto as Tipo;
use App\Presentacion_Producto as Presentacion;
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
    	//factory('App\Presentacion_Producto',20)->create();



        $tipo=Tipo::where('nombre','LIKE','Fitness')->get()->first()->id;
        Presentacion::create(['nombre' => 'Bicicletas',
        'tipo_producto_id' => $tipo]);
         Presentacion::create(['nombre' => 'Multigimnasios',
        'tipo_producto_id' => $tipo]);
          Presentacion::create(['nombre' => 'Caminadores',
        'tipo_producto_id' => $tipo]);
         Presentacion::create(['nombre' => 'Cintas',
        'tipo_producto_id' => $tipo]);
          Presentacion::create(['nombre' => 'Escaladores',
        'tipo_producto_id' => $tipo]);



        $tipo=Tipo::where('nombre','LIKE','Camping')->get()->first()->id;
         Presentacion::create(['nombre' => 'Carpas',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Conservadoras',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Colchones_Inflables',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Bolsas_de_Dormir',
        'tipo_producto_id' => $tipo]);

      

        $tipo=Tipo::where('nombre','LIKE','Deportes_acuaticos')->get()->first()->id;
        Presentacion::create(['nombre' => 'Botes',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Paddle_boards',
        'tipo_producto_id' => $tipo]);







        $tipo=Tipo::where('nombre','LIKE','Herramientas')->get()->first()->id;
        Presentacion::create(['nombre' => 'Taladros',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Amoladoras',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Soldadoras',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Compresores',
        'tipo_producto_id' => $tipo]);


        $tipo=Tipo::where('nombre','LIKE','Desayuno')->get()->first()->id;
         Presentacion::create(['nombre' => 'Pavas_electricas',
        'tipo_producto_id' => $tipo]);
         Presentacion::create(['nombre' => 'Cafeteras',
        'tipo_producto_id' => $tipo]);
         Presentacion::create(['nombre' => 'Tostadoras',
        'tipo_producto_id' => $tipo]);
         Presentacion::create(['nombre' => 'Exprimidores',
        'tipo_producto_id' => $tipo]);
         Presentacion::create(['nombre' => 'Sandwicheras',
        'tipo_producto_id' => $tipo]);   

        $tipo=Tipo::where('nombre','LIKE','Cocina')->get()->first()->id;
             Presentacion::create(['nombre' => 'Licuadoras',
        'tipo_producto_id' => $tipo]);
              Presentacion::create(['nombre' => 'Procesadoras',
        'tipo_producto_id' => $tipo]);
               Presentacion::create(['nombre' => 'Batidoras',
        'tipo_producto_id' => $tipo]);
                Presentacion::create(['nombre' => 'Mixers',
        'tipo_producto_id' => $tipo]);
       

        $tipo=Tipo::where('nombre','LIKE','Informatica')->get()->first()->id;
         Presentacion::create(['nombre' => 'Notebooks',
        'tipo_producto_id' => $tipo]);
          Presentacion::create(['nombre' => 'Ultrabooks',
        'tipo_producto_id' => $tipo]);
           Presentacion::create(['nombre' => 'Impresoras',
        'tipo_producto_id' => $tipo]);
            Presentacion::create(['nombre' => 'PC',
        'tipo_producto_id' => $tipo]);
         Presentacion::create(['nombre' => 'Almacenamiento',
        'tipo_producto_id' => $tipo]);



        $tipo=Tipo::where('nombre','LIKE','Camaras')->get()->first()->id;
         Presentacion::create(['nombre' => 'Camaras_de_Fotos',
        'tipo_producto_id' => $tipo]);
          Presentacion::create(['nombre' => 'Video_Camaras',
        'tipo_producto_id' => $tipo]);

 
        $tipo=Tipo::where('nombre','LIKE','Telefonos')->get()->first()->id;
         Presentacion::create(['nombre' => 'Telefonos_inalambricos',
        'tipo_producto_id' => $tipo]);
          Presentacion::create(['nombre' => 'Smartwatch',
        'tipo_producto_id' => $tipo]);
       


        $tipo=Tipo::where('nombre','LIKE','Accesorios_Autos')->get()->first()->id;
         Presentacion::create(['nombre' => 'GPS',
        'tipo_producto_id' => $tipo]);
          Presentacion::create(['nombre' => 'Parlantes',
        'tipo_producto_id' => $tipo]);


        $tipo=Tipo::where('nombre','LIKE','Gaming')->get()->first()->id;
         Presentacion::create(['nombre' => 'Consolas',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Joysticks',
        'tipo_producto_id' => $tipo]);
        Presentacion::create(['nombre' => 'Juegos',
        'tipo_producto_id' => $tipo]);









    }
}




