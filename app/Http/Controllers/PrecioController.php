<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Producto;
use App\Comercio;
use App\Precio;
use App\Categoria_Producto as Categoria;
use App\Presentacion_Producto as Presentacion;
use Auth;


class PrecioController extends Controller
{
 	
    public function index()
    {

       

        $precios_verificados=[];
        if(Auth::check()){
            $user=Auth::user();
            $precios_verificados=$user->precios_verificados->lists('precio_id')->toArray();

        }
        
    
       

        $categorias=Categoria::all()->lists('nombre','id');
        
        $productos=Producto::activos()->get();

    

        $precios= Precio::whereIn('producto_id',$productos->lists('id')->toArray() )->orderBy('valor','desc')->get();
        $productos_de_precios= $precios->lists('producto_id');

        $productos_de_precios=array_unique($productos_de_precios->toArray());
        $comercios=array_unique($precios->lists('comercio_id')->toArray());


        $p=array();
        $i=0;

        foreach ($productos_de_precios as $producto) {
        
            foreach ($comercios as $comercio) {
            
                $producto_buscar=$precios->where('comercio_id',$comercio)->where('producto_id',$producto)->last();

                if(!empty($producto_buscar)){

                    $p[$i]=$producto_buscar;
                   
                    if(in_array($producto_buscar->id, $precios_verificados)){
                        $p[$i]['boton_verificado']='';
                    }else{
                        if(Auth::check()){
                             $p[$i]['boton_verificado']='<a href='."{{route('producto.precio',$producto_buscar->id)}}".' class="btn btn-info"><span class="glyphicon glyphicon-ok"></span></a>';
                        }else{
                            $p[$i]['boton_verificado']='';
                        }
                       
                    }
                     $i++;

                  
                }
            }

        }

        $precios=$p;
      

        $productos=$productos->lists('nombre','id');

        return view('precio.index',compact('precios','productos','categorias'));
    }

    
    public function create()
    {
    	$comercios = Comercio::activos()->get()->lists('nombre','id');
    	$productos=Producto::activos()->get()->lists('nombre','id');
        $codigos_barras=Producto::activos()->get()->lists('codigo_barra','id');

        return view('precio.formulario.create',compact('productos','codigos_barras','comercios'));
    }


    public function productoPrecio($producto)
    {
    	$comercios = Comercio::activos()->get()->lists('nombre','id');
    	$productos=Producto::activos()->get()->lists('nombre','id');
        $codigos_barras=Producto::activos()->get()->lists('codigo_barra','id');

    	$producto=Producto::find($producto);

        return view('precio.formulario.create',compact('producto','productos','codigos_barras','comercios'));
    }


   
    public function store(Request $request)
    {

           $v= \Validator::make($request->toArray(),[

            'valor' => 'required|Between:1,100000|min:1|max:10000',
            'comercio_id' => 'required|exists:comercios,id',
            'producto_id' => 'required|exists:productos,id'

            ],[
            'valor.required' => 'el producto es necesario',
            'valor.exists' => 'el producto ingresado no esta registrado ',
             'producto_id.required' => 'el producto es necesario',
            'producto_id.exists' => 'el producto ingresado no esta registrado ',
             'comercio_id.required' => 'el Comercio es necesario',
            'comercio_id.exists' => 'el comercio ingresado no esta registrado '

            ]);



        if ($v->fails()) {
           
            return redirect()->back()->withErrors($v);

        }

        if($request->valor< 0 || $request->valor > 100000000 ){
               return redirect()->back()->withErrors(['errors' => 'el valor de precio debe se positivo y no puede superar 100000000']);
        }


        Precio::create(   $request->all()  );

        return redirect('precio');
    }

 
    public function show($id)
    {
      
    }

   
    public function edit($id)
    {
       
    }

   
    public function update(Request $request, $id)
    {
       
    }

   
    public function destroy($id)
    {
       
    }


    public function filtraProducto($producto){


        $precios_verificados=[];
        if(Auth::check()){
            $user=Auth::user();
            $precios_verificados=$user->precios_verificados->lists('precio_id')->toArray();

        }


        $productos=Producto::activos()->get(); 

        $precios=Precio::whereIn('producto_id',$productos->lists('id')->toArray() )->orderBy('valor','desc')->get();

        $comercios=array_unique($precios->lists('comercio_id')->toArray());




        $p=array();
        $i=0;

        if($producto == 0){

            $productos_de_precios= $precios->lists('producto_id');
            $productos_de_precios=array_unique($productos_de_precios->toArray());

       

      

        foreach ($productos_de_precios as $producto) {
        
            foreach ($comercios as $comercio) {
            
                $producto_buscar=$precios->where('comercio_id',$comercio)->where('producto_id',$producto)->last();

                    if(!empty($producto_buscar)){

                        $p[$i]=Precio::with('comercio','producto')->where('id',$producto_buscar->id)->get()->first();
                   
                    if(in_array($producto_buscar->id, $precios_verificados)){
                        $p[$i]['boton_verificado']='';
                    }else{
                        if(Auth::check()){
                             $p[$i]['boton_verificado']='<a href='."{{route('producto.precio',$producto_buscar->id)}}".' class="btn btn-info"><span class="glyphicon glyphicon-ok"></span></a>';
                        }else{
                            $p[$i]['boton_verificado']='';
                        }
                       
                    }
                     $i++;
                 }
            }

        }

  


        }else{


            foreach ($comercios as $comercio) {
            
                $producto_buscar=$precios->where('comercio_id',$comercio)->where('producto_id',$producto)->last();

                if(!empty($producto_buscar)){

                      $p[$i]=Precio::with('comercio','producto')->where('id',$producto_buscar->id)->get()->first();
                   
                    if(in_array($producto_buscar->id, $precios_verificados)){
                        $p[$i]['boton_verificado']='';
                    }else{
                        if(Auth::check()){
                             $p[$i]['boton_verificado']='<a href='."{{route('producto.precio',$producto_buscar->id)}}".' class="btn btn-info"><span class="glyphicon glyphicon-ok"></span></a>';
                        }else{
                            $p[$i]['boton_verificado']='';
                        }
                       
                    }
                     $i++;
                 }
            }



        }

        $precios=$p;
   

        return $precios;

    }


    public function filtraCategoria($categoria){


        $precios_verificados=[];
        if(Auth::check()){
            $user=Auth::user();
            $precios_verificados=$user->precios_verificados->lists('precio_id')->toArray();

        }


        if($categoria==0){
            $categorias=Categoria::all();

            $tipo_producto=Tipo_Categoria::whereIn('categoria_producto_id',$categorias->lists('id')->toArray())->get()->lists('id');
        }else{
            $categorias=Categoria::where('id',$categoria)->get()->first();
            $tipo_producto=$categorias->tipo_producto->lists('id');
        }
        
      
        $tipo_producto=array_unique($tipo_producto->toArray());

        $presentacion_producto=Presentacion::whereIn('tipo_producto_id',$tipo_producto)->get();


        $productos=Producto::activos()->whereIn('presentacion_producto_id',$presentacion_producto->lists('id')->toArray())->get(); 

        $precios=Precio::whereIn('producto_id',$productos->lists('id')->toArray() )->get();


        $productos_de_precios= $precios->lists('producto_id');
        $productos_de_precios=array_unique($productos_de_precios->toArray());
        $comercios=array_unique($precios->lists('comercio_id')->toArray());




        $p=array();
        $i=0;
      

        foreach ($productos_de_precios as $producto) {
        
            foreach ($comercios as $comercio) {
            
                $producto_buscar=$precios->where('comercio_id',$comercio)->where('producto_id',$producto)->last();

                 if(!empty($producto_buscar)){

                      $p[$i]=Precio::with('comercio','producto')->where('id',$producto_buscar->id)->get()->first();
                   
                    if(in_array($producto_buscar->id, $precios_verificados)){
                        $p[$i]['boton_verificado']='';
                    }else{

                        if(Auth::check()){
                             $p[$i]['boton_verificado']='<a href='."{{route('producto.precio',$producto_buscar->id)}}".' class="btn btn-info"><span class="glyphicon glyphicon-ok"></span></a>';
                        }else{
                            $p[$i]['boton_verificado']='';
                        }
                       
                    }
                     $i++;
                 }
            }

        }

      //$precios= Precio::with('comercio','producto')->whereIn('id',$p)->orderBy('valor','desc')->get();
   
        $precios=$p;

        return $precios;

    }


}






      