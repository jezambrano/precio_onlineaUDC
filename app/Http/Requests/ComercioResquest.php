<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ComercioResquest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         
            'nombre' => 'required|max:45',
            'rubro_id' => 'required|exists:rubros,id',
            'localidad_id' => 'required|exists:localidades,id',
            'direccion_calle' => 'required|max:100|unique:comercios,direccion_calle,'.$this->comercio,
            'direccion_numero' => 'max:30|min:1|unique:comercios,direccion_numero,'.$this->comercio, 
            'telefono' => 'required|max:11',
            'horario' => 'required|max:40',

        ];
    }


   
}
