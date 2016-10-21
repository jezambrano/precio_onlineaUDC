<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
	protected $table = "comercios";//referencia a la tabla de db

	protected $fillable = [
                            'nombre', 
							'rubro_id', 
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

    public function localidad()
    {
    	return $this->belongsTo('App\Localidad');
    } 
    
    public function  scopeActivos($query){
	return $query->where('activo',true);
    }
    
    public function  scopeBaja(){
		$this->activo=false;
		$this->save();
	
    }
    
}

