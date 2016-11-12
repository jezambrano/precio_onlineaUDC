@extends('template.layout')
@section('title',"Presentacion Index")
@section('content')
    <a href="{{ route('presentacion.create') }}" class="btn btn-success">
    	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    	 Nuevo
   	</a>
    <br/><br/>
    @if(isset($presentaciones))<!-- tabla presentaciones -->
    <div class="form-group">
        <h1>Listado de Presentaciones </h1>
        <br/>
        <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th colspan="3">acciones</th>
        </tr>
    </thead>
    <tbody>
  		@foreach ($presentaciones as $presentacion)
        <tr>
            <td>{{ $presentacion->id }}</td>
            <td>{{ $presentacion->nombre }}</td>
            <td>
                <a href='{{ route('presentacion.show',$presentacion->id) }}' class="btn btn-primary">
                	<span class="glyphicon glyphicon-eye-open"></span>
                </a>
            </td>
            <td>
		        <a href='{{route('presentacion.edit',$presentacion->id)}}' class="btn btn-warning">
		        	<span class="glyphicon glyphicon-pencil"></span>
		        </a>
            </td>
            <td>
        
                {{ Form::model($presentacion, ["method" => "delete", "route" => ["presentacion.destroy", $presentacion->id], "class" =>"form-inline form-delete"]) }}
                {{ Form::button("<span class='glyphicon glyphicon-trash'></span>", array("type" => "submit", "class" => "btn btn-danger delete")) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach<!-- fin de tabla de presntaciones-->
    	</tbody>
	</table>
    @endif            
@endsection