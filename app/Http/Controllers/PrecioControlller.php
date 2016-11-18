<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Producto;
use App\Comercio;
use App\Precio;


class PrecioControlller extends Controller
{
 	
    public function index()
    {
        
        $productos=Producto::activos()->get()->lists('id');

     


        $precios= Precio::whereIn('producto_id',$productos->toArray() )->groupBy('comercio_id')->get();

        dd($precios);

        //->paginate(5);

        return view('precio.index',compact('precios'));
    }

    
    public function create()
    {




    	$comercios = Comercio::activos()->get()->lists('nombre','id');
    	$productos=Producto::activos()->get()->lists('nombre','id');
        $codigos_barras=Producto::activos()->get()->lists('codigo_barra','id');

        return view('precio.formulario.create',compact('productos','codigos_barras','comercios'));
    }


    public function productoPrecio($producto)
    {
    	$comercios = Comercio::activos()->get()->lists('nombre','id');
    	$productos=Producto::activos()->get()->lists('nombre','id');
        $codigos_barras=Producto::activos()->get()->lists('codigo_barra','id');

    	$producto=Producto::find($producto);

        return view('precio.formulario.create',compact('producto','productos','codigos_barras','comercios'));
    }


   
    public function store(Request $request)
    {
        //traigo todos los producto
        $productos= Producto::activos()->get()->lists('id');
        //traer todos los precios de un producto
        $precios= Precio::whereIn(('verificado' , '= ' , 1 ) $productos->toArray() )->get();
        //llamar a la funcion 
        $verificar = Precio::DesviacionEstandar($precios);


        //hacer la comprobacion para ver si es correcto de los contrario devolver con error
        if ((verificar["minimo"] < $request->input("precio"))&&(verificar["maximo"] > $request->input("precio")) {
            Precio::create(   $request->all()  );
            return redirect('precio');
        }  else {
            \Session::flash("flash_message", "Precio del producto no es valido");
            return Redirect::to()->route("precio.create");
        
        }
    }

 
    public function show($id)
    {
      
    }

   
    public function edit($id)
    {
       
    }

   
    public function update(Request $request, $id)
    {
        $precio=Precio::find($id);
        $productos= Producto::activos()->get()->lists('id');
        //traer todos los precios de un producto
        $precios= Precio::whereIn(('verificado' , '= ' , 1 ) $productos->toArray() )->get();
        //llamar a la funcion 
        $verificar = Precio::DesviacionEstandar($precios);


        //hacer la comprobacion para ver si es correcto de los contrario devolver con error
        if ((verificar["minimo"] < $request->input("precio"))&&(verificar["maximo"] > $request->input("precio")) {
            Precio::update(   $request->all()  );
            return redirect('precio');
        }  else {
            \Session::flash("flash_message", "Precio del producto no es valido");
            return Redirect::to()->route("precio.create");
        
        }
    }       
    }

   
    public function destroy($id)
    {
       
    }




}
