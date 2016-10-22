@extends('template.layout')
@section('title',"Nuevo Producto")
@section('content')

	
    {!! Form::open(['url' => 'producto', 'id'=>'producto', 'files' => true]) !!}

            @include('producto.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">


</script>
@endsection