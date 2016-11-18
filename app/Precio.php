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


    public function precios_verificados()
    {
        return $this->HashMany('App\Precio_Verificado','id','precio_id');
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
    public function DesviacionEstandar(array $a ,bool $sample = false )
    {
        //calculo la desviacion
        $desviacion = stats_standard_deviation($a);
        //arreglo para las variables de desviacion 
        $valoresd = [];
        //arreglo para las variavles con porcentaje
        $valoresp = [];
        //promedio del arreglo
        $promedio = array_sum($a)/count($a);
        
        //maximo con desviacion
        $max = $promedio+$desviacion*1.2;
        //agrego a arreglo de desviacion
        $valoresd["maximo"]= $max;
        //minimo con desviacion
        $min = $promedio-$desviacion*1.2;
        //agrego a arreglo de desviacion
        $valoresd["minimo"] = $min;

        //calculo el 10% del arreglo
        $porcentaje = array_sum($a)*10/100;

        //calculo maximo y minimo del promedio con porcentaje
        $pmax = $promedio+$porcentaje;
        $pmin = $promedio-$porcentaje;
        $valoresp["maximo"] = $pmax;
        $valoresp["minimo"] = $pmin;

        if ($pmax > $max && $pmin > $min) {


            # code...
        }


        return $valores;
    }
}
