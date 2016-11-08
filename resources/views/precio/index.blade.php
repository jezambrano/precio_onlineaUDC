@extends('template.layout')
@section('title',"Precio Producto Index")
@section('content')
    <a href="{{ route('precio.create') }}" class="btn btn-success">Nuevo</a>
    <br><br>



<div class="form-group">

    {!! Form::label('producto_id','Productos:' ,['class'=>'col-sm-1 form-control-label'])!!}
    <div class="col-sm-6">
        {!! Form::select('producto_id',['0' => 'Seleccione un producto'] + $productos->toArray(),0,['id' => 'producto','class'=>'form-control']) !!}
    </div>
    
</div>
<br>
<br>
<div class="form-group">
 
    {!! Form::label('categoria','Categoria:' ,['class'=> "form-label col-sm-1" ])!!}
    <div class="col-sm-6">
         {!! Form::select('categoria',['0' => 'Seleccione un categoria'] + $categorias->toArray(),0,['id' => 'categoria','class'=>'form-control']) !!}
    </div>
   
</div>
<br>

    @if(isset($precios))
        <div class="form-group">
            <h1>Listado de Precio de Productos </h1>
            <br>

            <table class="table table-bordered-hover" id="tabla_producto">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Codigo</th>
            <th>Comercio</th>
        </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="2">
        Total de Precios
        </td>
        <td>
        {{ $precios-> total()}}
        </td>
        <td></td>
        <td></td>
        <td></td>
        
    </tr>
    </tfoot>

    <tbody>
  
        @foreach ($precios as $precio)

        <tr>
            <td>{{ $precio->id }}</td>
            <td>{{ $precio->producto->nombre }}</td>
            <td>{{ $precio->producto->descripcion }}</td>
            <td>${{ $precio->valor }}</td>
            <td>{{ $precio->producto->codigo_barra}}</td>
            <td>{{ $precio->comercio->nombre}}</td>
         
        </tr>
        @endforeach
    </tbody>
</table>

           {{ $precios->render() }}
           
        </div>
    @endif            
@endsection







@section('script')

<script>

     $(document).ready(function() {

    

        $('#producto').on('change', function(e){
     
            var producto_id = e.target.value;


             if(producto_id == ''){
               alert('no eligio ningun producto');
            }else{

            $.get('/filtrar_producto/'+producto_id, function(data) {

              $('#tabla_producto tbody').empty();
              
              if(data[0] == null ){


                  $('#tabla_producto tbody').append("<tr style='background:#f5f5f5;font-weight:bold;' ><td></td><td></td><td>No Hay precios registrado para ese producto</td><td></td><td></td><td>");

                  // $("#tabla_producto").attr('class', 'table table-bordered-hover');
                 

              } else{

                 //$("#tabla_producto").attr('class', ' table table-bordered');

               

                    $.each( data, function( key, value ) {


                        $('#tabla_producto tbody').append("<tr><td>"+value.id+"</td><td>"+value.producto.nombre+"</td><td>"+value.producto.descripcion+"</td><td>"+value.valor+"</td><td>"+value.producto.codigo_barra+"</td><td>"+value.comercio.nombre +"</td></tr>");   
                            

             
                    });

            }             
              

       });

        }


     });

    });



        $('#categoria').on('change', function(e){
     
            var categoria_id = e.target.value;


             if(categoria_id == ''){
               alert('no eligio ninguna categoria');
            }else{

            $.get('/filtrar_categoria/'+categoria_id, function(data) {

              $('#tabla_producto tbody').empty();
              
              if(data[0] == null ){


                  $('#tabla_producto tbody').append("<tr style='background:#f5f5f5;font-weight:bold;' ><td></td><td></td><td>No Hay precios registrado para esa categoria</td><td></td><td></td><td>");

                  // $("#tabla_producto").attr('class', 'table table-bordered-hover');
                 

              } else{

                 //$("#tabla_producto").attr('class', ' table table-bordered');

               

                    $.each( data, function( key, value ) {


                        $('#tabla_producto tbody').append("<tr><td>"+value.id+"</td><td>"+value.producto.nombre+"</td><td>"+value.producto.descripcion+"</td><td>"+value.valor+"</td><td>"+value.producto.codigo_barra+"</td><td>"+value.comercio.nombre +"</td></tr>");   
                            

             
                    });

            }             
              

       });

        }


    });



</script>
@endsection