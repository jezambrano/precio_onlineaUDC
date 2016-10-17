
<div class="form-group">
	{!! Form::label('nombre','nombre del comercio (*) ',['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('nombre',(isset($comercio)? $comercio->nombre: null),['class'=>'form-control','id' => 'nombre','required']) !!}
</div>
<div class="form-group">
	{!! Form::label('telefeno','telefono del comercio (*) ',['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('telefono',(isset($comercio)? $comercio->telefono: null),['class'=>'form-control','id' => 'telefono','required']) !!}
</div>
<div class="form-group">
{!! Form::label('horario','horario del comercio (*) ',['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('horario',(isset($comercio)? $comercio->horario: null),['class'=>'form-control','id' => 'horario','required']) !!}
</div>
<div class="form-group">
	{!! Form::label('direccion_calle','direccion (*) ',['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('direccion_calle',(isset($comercio)? $comercio->direccion_calle: null),['class'=>'form-control','id' => 'direccion_calle','required']) !!}
</div>
	{!! Form::submit('Enviar',['class'=> "btn btn-default" ]) !!}