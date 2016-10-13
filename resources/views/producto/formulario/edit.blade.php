@extends('template.layout')

@section('content')

	
	{!! Form::model($producto,['route'=>['clientes.update',$producto->id],'id'=>'producto']) !!}

            @include('producto.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection