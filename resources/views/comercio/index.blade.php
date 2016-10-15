@extends('template.layout')

@section('content')

	@if(isset($comercios))
		@foreach ($comercios as $comercio)
	    	<p>	{{ $comercio->nombre }} | 
	    		{{ $comercio->rubro->nombre }} | 
	    		{{ $comercio->localidad->nombre }} |
	    		{{ $comercio->horario_atencion }}
	    	</p>
		@endforeach
	@endif
@endsection