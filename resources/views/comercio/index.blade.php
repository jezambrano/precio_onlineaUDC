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
                </tr>
                @foreach ($comercios as $comercio)
	    		<tr>
	    			<td>{{ $comercio->nombre }} |</td> 
		    		<td>{{ $comercio->rubro->nombre }} |</td> 
		    		<td>{{ $comercio->localidad->nombre }} |</td>
		    		<td>{{ $comercio->horario_atencion }}</td>
	    		</tr>
        		@endforeach
	        </table>
        </div>
    </div>
	@endif            
@endsection