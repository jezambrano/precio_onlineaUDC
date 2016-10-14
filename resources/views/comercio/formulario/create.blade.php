@extends('template.layout')

@section('content')

	
	{!! Form::open(['url' => 'comercio', 'id'=>'comercio']) !!}

            @include('comercio.partials.form')
            
    {!! Form::close() !!}

	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif


@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection