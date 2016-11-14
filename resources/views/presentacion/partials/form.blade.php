	<div class="form-group">
	    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
	    {!! Form::label('nombre','Nombre de la Presentacion (*) ',['class'=> "form-label-cms-3" ]) !!}


	    {!! Form::text('nombre',(isset($presentacion)? $presentacion->nombre: null),['class'=>'form-control',(isset($ver)? 'disabled': null ),'id' => 'nombre', 'required'=>'required']) !!}

	</div>
@if(!(isset($ver)))
	<div class="form-group">
	    {!! Form::label('tipo_producto_id','Tipo:' ,['class'=> "form-label-cms-3" ])!!}
	    {!! Form::select('tipo_producto_id',['' => 'Seleccione un tipo'] + $tipos->toArray(),(isset($tipo)? $tipo->id: null),['id' => 'tipo','class'=>'form-control',(isset($tipo)? 'disabled': null )]) !!}
	</div>
    {!! Form::button('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
@else
   <a href="{{route('presentacion.edit',$presentacion->id)}}" class="btn btn-warning "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
@endif

            <a href="{{ route('presentacion.index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</a>