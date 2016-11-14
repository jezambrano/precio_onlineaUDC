<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio_Verificado extends Model
{
    

	protected $guarded = ['id'];
	protected $table = "precios_verificados";//referencia a la tabla de db

	protected $fillable = [
                            'id',
                            'usuario_id',
                            'fecha_registro',
                            'precio_id'
							];

	public function usuarios()
    {
    	return $this->belongsTo('App\User','usuario_id','id');
    }

    public function precios()
    {
    	return $this->belongsTo('App\Precio');
    } 


}





