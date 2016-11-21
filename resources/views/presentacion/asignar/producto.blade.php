@extends('template.layout')
@section('title',"Asignar Producto a Presentacion")
@section('content')

	<h3>Producto</h3>
	<h4>{{ $presentacion->nombre }}</h4>

    {{ Form::model($presentacion,[ 'method' => 'POST','route' => ['presentacion.asignar.producto.store',$presentacion->id]] ) }}

        

	<div class="form-group">
    {!! Form::label('producto_id','Producto (*) ',['class'=> "form-label-cms-3" ]) !!}

    {!! Form::select('producto_id',['' => 'Seleccione una producto asignar'] + $productos->toArray(),null,['id' => 'producto_id','class'=>'form-control']) !!}


    	


	</div>

    	{!! Form::button('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
   		
     	<a href="{{ route('presentacion.index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</a>

    	
    	


            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection