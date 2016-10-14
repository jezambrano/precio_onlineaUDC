@extends('template.layout')

@section('content')

	@foreach ($comercios as $comercio)
	    <p>	{{ $comercio->nombre }} </p>
	@endforeach

@endsection