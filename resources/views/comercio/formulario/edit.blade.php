@extends('template.layout')

@section('content')

	
	{!! Form::model($comercio,['route'=>['clientes.update',$comercio->id],'id'=>'comercio']) !!}

            @include('comercio.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection