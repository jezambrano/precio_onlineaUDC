@extends('template.layout')

@section('content')
	
	@if(isset($comercios))
        <div class="form-group">
            <legend>Comercios</legend>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>Nombre</td>
                        <td>Rubro</td>
                        <td>Localidad</td>
                        <td>Horario</td>
                        <td colspan="3">Acciones</td>
                    </tr>
                    @foreach ($comercios as $comercio)
    	    		<tr>
    	    			<td>{{ $comercio->nombre }} </td> 
    		    		<td>{{ $comercio->rubro->nombre }} </td> 
                        <td>{{ $comercio->localidad->nombre }} </td>
    		    		<td>{{ $comercio->horario}}</td>
                        <td><a href="{{route('comercio.edit',$comercio->id)}}">Editar</a></td>
                        <td><a href="{{route('comercio.destroy',$comercio->id)}}">Borrar</a></td>
                        <td><a href="{{route('comercio.show',$comercio->id)}}">Ver</a></td>
    	    		</tr>
            		@endforeach
    	        </table>
            </div>
        </div>
	@endif            
@endsection