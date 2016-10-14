@extends('template.layout')

@section('content')
hola
	@foreach ($comercios as $comercio)
	    <p>	{{ $comercio->nombre }} </p>
	@endforeach

@endsection