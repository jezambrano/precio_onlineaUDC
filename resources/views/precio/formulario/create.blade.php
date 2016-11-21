@extends('template.layout')
@section('title',"Agregar Precio")

@section('content')

	@if(isset($producto))
		<h3>Producto:<small> {{ $producto->nombre }}</small></h3>

		{{ Form::model($producto,['url' => 'precio', 'id'=>'precio'] ) }}
	@else
		{!! Form::open(['url' => 'precio', 'id'=>'precio']) !!}

    @endif


            @include('precio.partials.form')
            
    	{!! Form::close() !!}

	
    



@endsection


