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
							'imagen',
							'presentacion_producto_id'
							];

	public function presentacion_producto()
    {
    	return $this->belongsTo('App\Presentacion_Producto');
    }

    public function precios()
    {
    	return $this->hasMany('App\Precio');
    }

    public function  scopeActivos($query){
		return $query->where('activo',true);
    }
    
    public function  scopeBaja(){
		$this->activo=false;
		$this->save();
	
    }
    
}

