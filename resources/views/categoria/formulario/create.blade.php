@extends('template.layout')
@section('title',"Agregar Categoria")
@section('content')
<h1>Crear Categoria</h1><br><br><br>

    {!! Form::open(['url' => 'categoria', 'id'=>'categoria']) !!}

            @include('categoria.partials.form')
            
    {!! Form::close() !!}


@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection