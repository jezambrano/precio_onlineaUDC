<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion_Producto extends Model
{

    protected $guarded = ['id'];
	protected $table = "presentaciones_productos";//referencia a la tabla de db

	protected $fillable = [
                            'nombre',
                            'tipo_producto_id' 
						   ];

	public function tipo_producto()
    {
    	return $this->belongsTo('App\Tipo_Producto');
    }

    public function productos()
    {
    	return $this->hasMany('App\Producto','id','tipo_producto_id');
    } 

}
