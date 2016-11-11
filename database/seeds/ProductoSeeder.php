<?php

use Illuminate\Database\Seeder;

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

    
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Taladros')->get()->first()->id;
    	Producto::create(['nombre'=>'Taladro xv21','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Taladros')->get()->first()->id;
    	Producto::create(['nombre'=>'Taladro inalambrico','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Taladros')->get()->first()->id;
    	Producto::create(['nombre'=>'Taladro electroneumatico','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Taladros')->get()->first()->id;
    	Producto::create(['nombre'=>'Taladro con Broca','presentacion_producto_id'=>$presentacion]);



    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Notebooks')->get()->first()->id;
    	Producto::create(['nombre'=>'Notebook Compaq','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Notebooks')->get()->first()->id;
    	Producto::create(['nombre'=>'Notebook HP','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Notebooks')->get()->first()->id;
    	Producto::create(['nombre'=>'Notebook Thosiba','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Notebooks')->get()->first()->id;
    	Producto::create(['nombre'=>'Notebook LG','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Notebooks')->get()->first()->id;
    	Producto::create(['nombre'=>'Notebook Asus','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Notebooks')->get()->first()->id;
    	Producto::create(['nombre'=>'Notebook Samsung','presentacion_producto_id'=>$presentacion]);



    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Samsung Galaxy e215','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Blackberry','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Nokia Lumia','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Motorola A2050','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Samsung 790','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Sony Ericcson BRAVIA 204','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Nokia 107 Dual SIM','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Sony XPERIA C','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos')->get()->first()->id;
    	Producto::create(['nombre'=>'Sony XPERIA 2T Ultra','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','Telefonos_inalambricos')->get()->first()->id;
    	Producto::create(['nombre'=>'Alcatel 10.16G','presentacion_producto_id'=>$presentacion]);


    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','GPS')->get()->first()->id;
    	Producto::create(['nombre'=>'Garmin','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','GPS')->get()->first()->id;
    	Producto::create(['nombre'=>'NDREN','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','GPS')->get()->first()->id;
    	Producto::create(['nombre'=>'enfora','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','GPS')->get()->first()->id;
    	Producto::create(['nombre'=>'QPCOM','presentacion_producto_id'=>$presentacion]);
    	$presentacion=presentacion::where('presentacion_producto_id','LIKE','GPS')->get()->first()->id;
    	Producto::create(['nombre'=>'Pegasus Gateway','presentacion_producto_id'=>$presentacion]);


    }
}