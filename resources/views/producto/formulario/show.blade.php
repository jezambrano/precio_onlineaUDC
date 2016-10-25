
@extends('template.layout')
@section('title',"Ver Producto")
@section('content')

    <h2>{{ $producto->nombre }}</h2>

    @include('producto.partials.form')
            

@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection
