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
        $producto->presentacion_producto_id=null;

     //   $producto->presentacion_producto()->dissociate($presentacion);
        $producto->save();
      

        return redirect()->route('presentacion.index');

    }


    public function asignar_producto(Presentacion $presentacion)
    {
       
        $productos=Producto::where('presentacion_producto_id',null)->get()->lists('nombre','id');
       return view('presentacion.asignar.producto',compact('presentacion','productos'));
    }


    public function asignar_producto_store($presentacion,Request $request)
    {

         $v= \Validator::make($request->toArray(),[

            'producto_id' => 'required|exists:productos,id'

            ],[
            'producto_id.required' => 'el producto es necesario',
            'producto_id.exists' => 'el producto ingresado no esta registrado '

            ]);

        if ($v->fails()) {
           
            return redirect()->back()->withErrors($v);

        }


        $p=Producto::find($request->producto_id);
        $p->presentacion_producto_id=$presentacion;
        $p->save();

        return redirect()->route('presentacion.index');
    }

    public function store(Request $request)
    {

        $reglas=[   'nombre' => 'unique:presentaciones_productos,nombre|required|regex: /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/ |between:3,50',
                    'tipo_producto_id' => 'exists:tipos_productos,id|required'
                ];

        $mensajes=[
                    'nombre.unique' => 'el nombre ya esta ocupado',
                    'nombre.max' => 'el nombre no puede exeder a los 50 caracteres',
                    'tipo_producto_id.exists' => 'el tipo de producto seleccionado no esta registrado',
                    'tipo_producto_id.required' => 'el tipo de producto es necesario'
        ];

        $v= \Validator::make($request->toArray(),$reglas,$mensajes);

        if ($v->fails()) {
           
            return redirect()->back()->withErrors($v);

        }




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
        $presentacion = Presentacion::find($id);
        //->load('tipo_producto', 'productos');
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



         $reglas=[   'nombre' => 'unique:presentaciones_productos,nombre,'.$presentacion->id.'|required|regex: /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/ |between:3,50',
                    'tipo_producto_id' => 'exists:tipos_productos,id|required'
                ];
        $mensajes=[

                    'nombre.unique' => 'el nombre ya esta ocupado',
                    'nombre.max' => 'el nombre no puede exeder a los 50 caracteres',
                    'tipo_producto_id.exists' => 'el tipo de producto seleccionado no esta registrado',
                    'tipo_producto_id.required' => 'el tipo de producto es necesario'
        ];

        $v=\Validator::make($request->toArray(),$reglas,$mensajes);

        if ($v->fails()) {
           
            return redirect()->back()->withErrors($v);

        }


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
