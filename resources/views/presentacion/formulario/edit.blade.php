@extends('template.layout')
@section('title',"Modificacion de Presentacion")
@section('content')

    {{ Form::model($presentacion,[ 'method' => 'PUT','route' => ['presentacion.update',$presentacion->id]] ) }}

         @include('presentacion.partials.form')   
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection