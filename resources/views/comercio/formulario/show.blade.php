@extends('template.layout')
@section('title',"Ver Comercio")
@section('content')

    <h2>{{ $comercio->nombre }}</h2>
    @include('comercio.partials.form')
            

@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection