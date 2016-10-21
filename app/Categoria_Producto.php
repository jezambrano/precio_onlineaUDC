<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_Producto extends Model
{
    
    protected $guarded = ['id'];
	protected $table = "categorias_productos";//referencia a la tabla de db

	protected $fillable = [
                            'nombre'
							];



    public function comercios()
    {
    	return $this->hasMany('App\Tipo_Producto');
    } 

}
