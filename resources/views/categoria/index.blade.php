@extends('template.layout')
@section('title',"Categoria Index")
@section('content')
	
    <a href="{{ route('categoria.create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo</a>
     
    <br><br>

	@if(isset($categorias))
        <div class="form-group">
            <h1>Listado de Categorias </h1>
            <br>

            <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th colspan="3">acciones</th>

        </tr>
    </thead>
    <tfoot>
	<tr>
	    <td colspan="2">
		
		
	</tr>
    </tfoot>

    <tbody>
  
             @foreach ($categorias as $categoria)

        <tr>
            
            <td>{{ $categoria->id }}</td>
           	    
            <td>{{ $categoria->nombre }}</td>
            
        
            <td>
            <a href='{{route('categoria.edit',$categoria->id)}}' class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

            </td>
            
            <td >
        
        {{ Form::model($categoria, ["method" => "delete", "route" => ["categoria.destroy", $categoria->id], "class" =>"form-inline form-delete"]) }}
        {{ Form::button("<span class='glyphicon glyphicon-trash'></span>", array("type" => "submit", "class" => "btn btn-danger delete")) }}
        {{ Form::close()}}
        

            </td>

        </tr>
        @endforeach
    </tbody>
</table>

           
        </div>
	@endif  

@endsection
