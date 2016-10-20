@extends('template.layout')

@section('content')
	
    <a href="{{ route('comercio.create') }}" class="btn btn-success">Nuevo</a>
    <br><br>

	@if(isset($comercios))
        <div class="form-group">
            <h1>Listado de Comercios </h1>
            <br>

            <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Rubro</th>
            <th>Localidad</th>
            <th>Horario</th>
            <th colspan="3">acciones</th>

        </tr>
    </thead>

    <tbody>
  
             @foreach ($comercios as $comercio)

        <tr>
            <td>{{ $comercio->id }}</td>
            <td>{{ $comercio->nombre }}</td>
            <td>{{ $comercio->rubro->nombre }}</td>
	    <td>{{ $comercio->localidad->nombre }}</td>
            <td>{{ $comercio->horario}}</td>
            <td>
                <a href='{{route('comercio.show',$comercio->id)}}' class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
       

            </td>
            <td>
		<a href='{{route('comercio.edit',$comercio->id)}}' class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>




            </td>
            
            <td >
		
		{{ Form::model($comercio, ["method" => "delete", "route" => ["comercio.destroy", $comercio->id], "class" =>"form-inline form-delete"]) }}
		{{ Form::button("<span class='glyphicon glyphicon-trash'></span>", array("type" => "submit", "class" => "btn btn-danger delete")) }}
		{{ Form::close()}}
		

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


    	        </table>
            </div>
        </div>
	@endif            
@endsection
