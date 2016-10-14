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
							'imagen'];
}
