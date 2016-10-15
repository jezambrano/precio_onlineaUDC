<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
	protected $table = "localidades";//referencia a la tabla de db

	protected $fillable = ['nombre'];

    public function provincia()
    {
    	return $this->belongsTo('App\Provincia');
    } 

    public function comercios()
    {
    	return $this->hasMany('App\Comercio');
    } 

}
