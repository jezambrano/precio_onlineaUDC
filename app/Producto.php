<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";//referencia a la tabla de db

	protected $fillable = [
                            'nombre', 
							'descripcion', 
							'precio', 
							'codigo_barra', 
<<<<<<< HEAD
							'imagen'];

=======
							'imagen',
							'presentacion_producto_id'

							];

	public function presentacion_producto()
    {
    	return $this->belongsTo('App\Presentacion_Producto');
    }
>>>>>>> f4c993a94828a1d21ccf14e29e32104de0759186
}

