@extends('template.layout')

@section('content')

	
	{!! Form::open(['url' => 'comercio', 'id'=>'comercio']) !!}

            @include('comercio.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection