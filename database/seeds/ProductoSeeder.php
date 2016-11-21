<?php

use Illuminate\Database\Seeder;
use App\Presentacion_Producto as Presentacion;
use App\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('productos')->truncate();
    	//factory('App\Producto',7)->create();

    
    	$presentacion=Presentacion::where('nombre','LIKE','Taladros')->get()->first()->id;

    	Producto::create(['nombre'=>'Taladro xv21','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Taladro inalambrico','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Taladro electroneumatico','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Taladro con Broca','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);



    	$presentacion=Presentacion::where('nombre','LIKE','Notebooks')->get()->first()->id;
    	Producto::create(['nombre'=>'Notebook Compaq','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Notebook HP','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Notebook Thosiba','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Notebook LG','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Notebook Asus','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Notebook Samsung','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);



    	$presentacion=Presentacion::where('nombre','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Samsung Galaxy e215','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Blackberry','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
    
    	Producto::create(['nombre'=>'Nokia Lumia','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
  
    	Producto::create(['nombre'=>'Motorola A2050','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
 
    	Producto::create(['nombre'=>'Samsung 790','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
    
    	
    	Producto::create(['nombre'=>'Nokia 107 Dual SIM','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
    
        Producto::create(['nombre'=>'Alcatel 10.16G','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Sony XPERIA C','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	Producto::create(['nombre'=>'Sony XPERIA 2T Ultra','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);

    	


    	$presentacion=Presentacion::where('nombre','LIKE','GPS')->get()->first()->id;
    	Producto::create(['nombre'=>'Garmin','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
    	
    	Producto::create(['nombre'=>'NDREN','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
    
    	Producto::create(['nombre'=>'enfora','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
    	
    	Producto::create(['nombre'=>'QPCOM','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);
    	
    	Producto::create(['nombre'=>'Pegasus Gateway','codigo_barra' =>  random_int ( 1000000001,1100000001),'presentacion_producto_id'=>$presentacion]);


    }
}
