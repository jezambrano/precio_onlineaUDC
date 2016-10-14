

{!! Form::label('nombre','nombre del comercio (*) ',['class'=> "form-label-cms-3" ]) !!}


{!! Form::text('nombre',(isset($comercio)? $comercio->nombre: null),['class'=>'form-control','id' => 'nombre']) !!}