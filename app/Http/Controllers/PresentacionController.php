<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Presentacion_Producto as Presentacion;
use App\Tipo_Producto as Tipo;
use App\Producto;
class PresentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentaciones = Presentacion::where('esta_activo',true)->paginate(10);//->load('tipo_producto', 'productos'));
        return view('presentacion.index',compact('presentaciones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all()->lists('nombre','id');
        return view('presentacion.formulario.create', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function quitar_producto($presentacion_id,$producto_id)
    {
        $producto=Producto::find($producto_id);
        $presentacion=Presentacion::find($presentacion_id);
        //  $producto->where('presentacion_producto_id',$presentacion->id)->get()->first()->presentacion_producto_id=null;

        $producto->presentacion_producto()->dissociate($presentacion);
        $producto->save();

     return redirect()->route('presentacion.index');

    }
    public function store(Request $request)
    {
          Presentacion::create($request->all());

            \Session::flash('flash_message','Se creo con exito!! De toque Perrooo');
            return redirect()->route('presentacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presentacion = Presentacion::first()->load('tipo_producto', 'productos');
        $ver=true;
        return view('presentacion.formulario.show', compact('presentacion', 'ver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $presentacion = Presentacion::find($id);
        $tipos = Tipo::all()->lists('nombre','id');
        return view('presentacion.formulario.edit', compact('presentacion', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Presentacion $presentacion)
    {
        $presentacion->update($request->all());


            \Session::flash('flash_message','Se Actualizo '.$presentacion->nombre.' con exito!! De toque Perrooo');
            return redirect()->route('presentacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentacion $presentacion)
    {
        $presentacion->esta_activo=false;
        $presentacion->save();

         \Session::flash('flash_message','Se dio de baja '.$presentacion->nombre.' con exito!!');
        return redirect()->route('presentacion.index');
    }
}
