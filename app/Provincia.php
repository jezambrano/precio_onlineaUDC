<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
	protected $table = "provincias";//referencia a la tabla de db

	protected $fillable = ['nombre'];


	public function localidades()
    {
    	return $this->hasMany('App\Localidad');
    } 

    public function comercios()
    {
    	return $this->hasMany('App\Comercio');
    } 

}
