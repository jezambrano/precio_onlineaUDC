@extends('template.layout')

@section('content')

	
	{!! Form::open(['url' => 'producto', 'id'=>'producto']) !!}

            @include('producto.partials.form')
            
    {!! Form::close() !!}




@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection