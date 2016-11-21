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

    static function DesviacionEstandar($a)

    {
        if( $a->count() >= 3 ){
            $a=$a->lists('valor')->toArray();
            //arreglo para las variables de desviacion 
             $valoresd = [];
             //arreglo para las variavles con porcentaje
            $valoresp = [];
            //calculo la desviacion
            $desviacion = Precio::stats_standard_deviation($a);
            //promedio del arreglo
            $promedio = array_sum($a)/count($a);
        
            //maximo con desviacion
            $dmax = $promedio+$desviacion*1.2;
            //agrego a arreglo de desviacion
            $valoresd["maximo"]= $dmax;
            //minimo con desviacion
            $dmin = $promedio-$desviacion*1.2;
            //agrego a arreglo de desviacion
            $valoresd["minimo"] = $dmin;

            //calculo el 10% del arreglo
            $porcentaje = array_sum($a)*10/100;

            //calculo maximo y minimo del promedio con porcentaje
            $pmax = $promedio+$porcentaje;
            $pmin = $promedio-$porcentaje;
            //agrego al arreglo de promedio
            $valoresp["maximo"] = $pmax;
            $valoresp["minimo"] = $pmin;

            if ($pmax > $dmax && $pmin < $dmin) {
                return $valoresp;
            }
            else {
                return $valoresd;
            }

        }
        else {
            $valores=array();
            $valores["minimo"] = 0 ;
            $valores["maximo"] = 1000000 ;
            return $valores;
        }


    }





       static function stats_standard_deviation(array $a, $sample = false) {
        $n = count($a);
        if ($n === 0) {
            trigger_error("The array has zero elements", E_USER_WARNING);
            return false;
        }
        if ($sample && $n === 1) {
            trigger_error("The array has only 1 element", E_USER_WARNING);
            return false;
        }
        $mean = array_sum($a) / $n;
        $carry = 0.0;
        foreach ($a as $val) {
            $d = ((double) $val) - $mean;
            $carry += $d * $d;
        };
        if ($sample) {
           --$n;
        }
        return sqrt($carry / $n);
    }














    
}
