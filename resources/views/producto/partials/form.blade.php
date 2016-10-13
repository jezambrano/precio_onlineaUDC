


{!! Form::label('nombre','nombre del producto (*) ',['class'=> "form-label-cms-3" ]) !!}


{!! Form::text('nombre',(isset($producto)? $producto->nombre: null),['class'=>'form-control','id' => 'nombre']) !!}

	