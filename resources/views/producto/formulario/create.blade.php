@extends('template.layout')

@section('content')

	
	<div><h1>Cargar Producto</h1></div>
	{!! Form::open(['url' => 'producto', 'id'=>'producto']) !!}
        

            @include('producto.partials.form')
            
            {!! Form::button('<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> Cargar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            <a class="btn btn-info" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a>
            
        {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection