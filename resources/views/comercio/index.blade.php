@extends('template.master')

@section('content')
	
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

        <tr class="info">
            <td>{{ $comercio->id }}</td>
            <td>{{ $comercio->nombre }}</td>
            <td>{{ $comercio->rubro->nombre }}</td>
            <td>{{ $comercio->horario}}</td>
            <td>
                
        {{ Form::open(array('url' => 'comercio/'.$comercio->id)) }}
        {{ Form::hidden("_method", "show") }}
        {{ Form::submit("ver") }}
        {{ Form::close() }}


            </td>
            <td class="warning">
                
        {{ Form::open(array('url' => 'comercio/'.$comercio->id)) }}
        {{ Form::hidden("_method", "show") }}
        {{ Form::submit("Modificar") }}
        {{ Form::close() }}




            </td>
            
            <td class="danger">
                
        {{ Form::open(array('url' => 'comercio/'.$comercio->id)) }}
        {{ Form::hidden("_method", "DELETE") }}
        {{ Form::submit("Eliminar") }}
        {{ Form::close() }}



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
