<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comercio;

class ComercioController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$comercios = Comercio::all();
        return view('comercio.index',compact('comercios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //listado de comercio

        //catergorias
        return view('comercio.formulario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		$this->validate($request, [
		    'nomber' => 'required|unique:comercios|max:30',
		    'direccion_calle' => 'required|unique:comercios|max:225',
			'direccion_numero' => 'required|unique:comercios|max:30', 
			'telefono' => 'required|unique:comercios|max:30',
			'horario_atencion' => 'required|unique:comercios|max:30',

		]);
		if ($validator->fails()) {
            return redirect('comercio/formulario/create')
                        ->withErrors($validator)
                        ->withInput();
        }

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comercio=Comercio::find($id);
        return view('producto.formulario.edit',compact('comercio'));
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
        //
    }
}
