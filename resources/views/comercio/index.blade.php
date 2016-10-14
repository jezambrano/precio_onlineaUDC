@extends('template.layout')

@section('content')
hola

	@if(isset($comercios))
		@foreach ($comercios as $comercio)
	    	<p>	{{ $comercio->nombre }} </p>
		@endforeach
	@endif
@endsection