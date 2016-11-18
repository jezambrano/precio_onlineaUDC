@extends('template.layout')
@section('title',"Editar Categoria")
@section('content')
<h1>Editar Categoria</h1><br><br><br>

    {{ Form::model($categorias,[ 'method' => 'PUT','route' => ['categoria.update',$categorias->id] ] ) }}

            @include('categoria.partials.form')
            
    {{Form::close()}}


@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection