@extends('template.layout')
@section('title',"Nueva Presentacion")
@section('content')

	
    {!! Form::open(['url' => 'presentacion', 'id'=>'presentacion']) !!}

            @include('presentacion.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">


</script>
@endsection