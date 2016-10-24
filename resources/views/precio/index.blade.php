@extends('template.layout')
@section('title',"Precio Producto Index")
@section('content')
    <a href="{{ route('precio.create') }}" class="btn btn-success">Nuevo</a>
    <br><br>

    @if(isset($precios))
        <div class="form-group">
            <h1>Listado de Precio de Productos </h1>
            <br>

            <table class="table table-bordered">
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