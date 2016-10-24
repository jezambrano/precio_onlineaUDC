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


    public function index()
    {
    	$comercios = Comercio::activos()->paginate(5);
        return view('comercio.index',compact('comercios'));
    }


    public function create()
    {
        $rubros = Rubro::all()->lists('nombre','id');
        $localidad = Localidad::all()->lists('nombre','id');	
        return view('comercio.formulario.create',compact('rubros','localidad'));
    }


    public function store(ComercioResquest $request)
    {

        $this->validate($request, ['nombre'=>['required', 'max:45'], 'rubro_id'=>['required'], 'localidad_id'=>['required'], 'direccion_calle'=>['required', 'max:20'], 'direccion_numero'=>['required', 'min:0000', 'max:10000'], 'telefono'=>['required', 'max:11'], 'horario_atencion'=>['required','max:20']]);
         
	
	   Comercio::create($request->all());

       return redirect('comercio');
    }


    public function show($id)
    {
	
        $rubros = Rubro::all()->lists('nombre','id');
        $localidad = Localidad::all()->lists('nombre','id');
        $comercio=Comercio::find($id);
	    $ver=true;
        return view('comercio.formulario.show',compact('comercio','rubros','localidad','ver'));
    }

 
    public function edit($id)
    {
	    $rubros = Rubro::all()->lists('nombre','id');
        $localidad = Localidad::all()->lists('nombre','id');
        $comercio=Comercio::find($id);
        return view('comercio.formulario.edit',compact('comercio','rubros','localidad'));
    }


    public function update(ComercioResquest $request, $id)
    {
	   $this->validate($request, ['nombre'=>['required', 'max:45'], 'rubro_id'=>['required'], 'localidad_id'=>['required'], 'direccion_calle'=>['required', 'max:20'], 'direccion_numero'=>['required', 'min:0000', 'max:10000'], 'telefono'=>['required', 'max:11'], 'horario_atencion'=>['required','max:20']]);
        
        Comercio::find($id)->update($request->all());
        return redirect('comercio');
    }


    public function destroy($id)
    {
	//baja logica
        Comercio::find($id)->baja();
        return redirect('comercio');
    }
}

