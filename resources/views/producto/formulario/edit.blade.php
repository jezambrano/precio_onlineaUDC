@extends('template.layout')
@section('title',"Modificacion de Producto")
@section('content')

    {{ Form::model($producto,[ 'method' => 'PUT','route' => ['producto.update',$producto->id],'files' => true ] ) }}

         @include('producto.partials.form')   
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection