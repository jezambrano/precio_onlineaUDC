@extends('template.layout')
@section('title',"Producto Index")
@section('content')
    <a href="{{ route('producto.create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo</a>
    <br><br>

    @if(isset($productos))
        <div class="form-group">
            <h1>Listado de Productos </h1>
            <br>

            <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Codigo</th>
            <th>Cargar precio</th>
            <th colspan="3">acciones</th>
            

        </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="2">
        Total de Productos
        </td>
        <td>
        {{ $productos-> total()}}
        </td>
        
    </tr>
    </tfoot>

    <tbody>
  
             @foreach ($productos as $producto)

        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->codigo_barra}}</td>
            <td>
                <a href='{{route('producto.precio',$producto->id)}}' class="btn btn-info"><span class="glyphicon glyphicon-usd"></span></a>
            </td>
            <td>
                <a href='{{route('producto.show',$producto->id)}}' class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
       

            </td>
            <td>
        <a href='{{route('producto.edit',$producto->id)}}' class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>




            </td>
            
            <td>
        
                {{ Form::model($producto, ["method" => "delete", "route" => ["producto.destroy", $producto->id], "class" =>"form-inline form-delete"]) }}
                {{ Form::button("<span class='glyphicon glyphicon-trash'></span>", array("type" => "submit", "class" => "btn btn-danger delete")) }}
                {{ Form::close()}}
        

            </td>
            

        </tr>
        @endforeach
    </tbody>
</table>

           {{ $productos->render() }}
           
        </div>
    @endif            
@endsection