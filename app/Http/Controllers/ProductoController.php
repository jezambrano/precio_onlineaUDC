<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use App\Comercio;
use App\Presentacion_Producto;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::activos()->paginate(5);
        return view('producto.index',compact('productos'));
    }


    public function create()
    {
        $presentaciones = Presentacion_Producto::all()->lists('nombre','id');
        return view('producto.formulario.create',compact('presentaciones')); //add categorias
    }


    public function store(Request $request)
    {


        $producto=Producto::create( $request->all() );


        if(  $request->file('imagen')   ){    
            $file = $request->file('imagen');

            $nombre = 'precios_online_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/imagenes/productos/';
            $file->move($path, $nombre);
            $producto->imagen = $nombre;
            $producto->save();
        }

        return redirect('producto');
    }


    public function show($id)
    {
        $producto=Producto::find($id);
        $presentaciones = Presentacion_Producto::all()->lists('nombre','id');
        $ver=true;
        return view('producto.formulario.show',compact('producto','ver','presentaciones'));
    }


    public function edit($id)
    {
        $producto=Producto::find($id);
        $presentaciones = Presentacion_Producto::all()->lists('nombre','id');
        return view('producto.formulario.edit',compact('presentaciones','producto'));
    }


    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);


        $producto->update($request->all());



        if( $request->file('imagen')  ){ //si viene un imagen
            //destruir imagen   
            $file = $request->file('imagen');
            $nombre = 'precios_online_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/imagenes/productos/';
            $file->move($path, $nombre);
            $producto->imagen = $nombre;
        }
        $producto->save();
        
        return redirect('producto');
    }


    public function destroy($id)
    {
        Producto::find($id)->baja();
        return redirect('producto');
    }
}
