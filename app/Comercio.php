<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
	protected $table = "comercios";//referencia a la tabla de db

	protected $fillable = ['nombre', 
							'rubro_id', 
							'provincia_id', 
							'localidad_id', 
							'direccion_calle', 
							'direccion_esquina', 
							'direccion_numero', 
							'telefono', 
							'horario_atencion'];

    public function rubro()
    {
    	return $this->belongsTo('App\Rubro');
    } 

    public function provincia()
    {
    	return $this->belongsTo('App\Provincia');
    } 

    public function localidad()
    {
    	return $this->belongsTo('App\Localidad');
    } 
}

