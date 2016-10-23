<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use App\Comercio;
use App\Presentacion_Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(5);
        return view('producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presentaciones = Presentacion_Producto::all()->lists('nombre','id');
        return view('producto.formulario.create',compact('presentaciones')); //add categorias
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('imagen')){    
            $file = $request->file('imagen');

            $nombre = 'precios_online_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/imagenes/productos/';
            $file->move($path, $nombre);

            $producto = new Producto;
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->precio = $request->precio;
            $producto->codigo_barra = $request->codigo_barra;
            $producto->imagen = $nombre;
            $producto->presentacion_producto_id = $request->presentacion_producto_id;
            $producto->save();
        }

        return redirect('producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Producto::find($id);
        $presentaciones = Presentacion_Producto::all()->lists('nombre','id');
        $ver=true;
        return view('producto.formulario.show',compact('producto','ver','presentaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id);
        $presentaciones = Presentacion_Producto::all()->lists('nombre','id');
        return view('producto.formulario.edit',compact('presentaciones','producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        if($request->file('imagen')){ //si viene un imagen
            //destruir imagen   
            $file = $request->file('imagen');
            $nombre = 'precios_online_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/imagenes/productos/';
            $file->move($path, $nombre);
            $producto->imagen = $nombre;
        }
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->codigo_barra = $request->codigo_barra;
        $producto->presentacion_producto_id = $request->presentacion_producto_id;
        $producto->save();
        
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('producto');
    }
}
