<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    
    protected $guarded = ['id'];
	protected $table = 'precios';//referencia a la tabla de db

	protected $fillable = [
                            'id',
                            'valor',
                            'comercio_id',
                            //'usuario_id',
                            'producto_id'
                            'fecha'


							];

	public function comercio()
    {
    	return $this->belongsTo('App\Comercio');
    } 

    public function producto()
    {
    	return $this->belongsTo('App\Producto');
    } 
/*
    public function usuario()
    {
    	return $this->belongsTo('App\Usuario');
    } 
*/

}
