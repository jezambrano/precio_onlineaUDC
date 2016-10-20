<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comercio;
use App\Rubro;
use App\Localidad;
use App\Http\Requests\ComercioResquest;

class ComercioController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$comercios = Comercio::activos()->paginate(5);
        return view('comercio.index',compact('comercios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubros = Rubro::all()->lists('nombre','id');
        $localidad = Localidad::all()->lists('nombre','id');	
        return view('comercio.formulario.create',compact('rubros','localidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	dd($request);
	Comercio::create($request->all());

        return redirect('comercio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	
        $rubros = Rubro::all()->lists('nombre','id');
        $localidad = Localidad::all()->lists('nombre','id');
        $comercio=Comercio::find($id);
	$ver=true;
        return view('comercio.formulario.show',compact('comercio','rubros','localidad','ver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	$rubros = Rubro::all()->lists('nombre','id');
        $localidad = Localidad::all()->lists('nombre','id');
        $comercio=Comercio::find($id);
        return view('comercio.formulario.edit',compact('comercio','rubros','localidad'));
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
	Comercio::find($id)->update($request->all());
        return redirect('comercio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	//baja logica
        $comercio = Comercio::find($id);
        $comercio->baja();
        return redirect('comercio');
    }
}
