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
        $precios= Precio::whereIn('producto_id',$productos->toArray() )->paginate(5);

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

        Precio::create(   $request->all()  );

        return redirect('precio');
    }

 
    public function show($id)
    {
      
    }

   
    public function edit($id)
    {
       
    }

   
    public function update(Request $request, $id)
    {
       
    }

   
    public function destroy($id)
    {
       
    }
}
