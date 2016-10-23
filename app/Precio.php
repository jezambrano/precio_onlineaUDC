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
                            'producto_id',
                            'fecha',
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

    public function setFechaAttribute($value)
    {

      $this->attributes['fecha'] = date("Y-m-d",strtotime($value));
      
    }

    public function setValorAttribute($value)
    {

      $value=str_replace(',','.',$value); 

      $value= number_format ( $value ,2 );
      $value=doubleval($value);
      $this->attributes['valor'] = $value;
      
    }


    public function getFechaAttribute($value)
    {

      return date("d-m-Y",strtotime($value));
      
    }

}
