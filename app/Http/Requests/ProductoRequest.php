<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoRequest extends Request
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
            'descripcion' => 'required|max:225',
            'precio' => 'required', 
            'codigo_barra' => 'required|max:30|unique:producto,codigo_barra',
            'presentacion_producto_id' => 'required',
            'imagen' => 'image|size:2400|required',
        ];
    }
}
