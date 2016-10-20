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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:30',
            'direccion_calle' => 'required|max:225|unique:comercios,domicilio_calle,'.$this->comercio,
            'direccion_numero' => 'required|max:30|unique:comercios,direccion_numero,'.$this->comercio, 
            'telefono' => 'required|max:30|unique:comercios,telefono,'.$this->comercio,
            'horario_atencion' => 'required|max:30',

        ];
    }


   
}
