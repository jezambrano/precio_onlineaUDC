<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
	protected $table = "localidades";//referencia a la tabla de db

	protected $fillable = ['nombre'];
}
