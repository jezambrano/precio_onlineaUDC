<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Producto extends Model
{
    protected $guarded = ['id'];
	protected $table = "tipos_productos";//referencia a la tabla de db

	protected $fillable = [
                            'nombre',
                            'categoria_producto_id' 
							];


	public function categoria_producto()
    {
    	return $this->belongsTo('App\Categoria_Producto','id','categoria_producto_id');
    }

    public function presentaciones_producto()
    {
    	return $this->hasMany('App\Presentacion_Producto');
    } 

}
