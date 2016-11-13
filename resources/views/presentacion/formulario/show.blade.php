
@extends('template.layout')
@section('title',"Ver Presenacion")
@section('content')

    <h2>{{ $presentacion->nombre }}</h2>

    @include('presentacion.partials.form')
            

@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection