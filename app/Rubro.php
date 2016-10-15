<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
	protected $table = "rubros";//referencia a la tabla de db

	protected $fillable = ['nombre'];

    public function comercios()
    {
    	return $this->hasMany('App\Comercio');
    } 
}
