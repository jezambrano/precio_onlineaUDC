<div class="form-group">
	{!! Form::label('nombre','nombre del comercio'. (isset($ver)? '': '(*)' ) ,['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('nombre',(isset($comercio)? $comercio->nombre: null),['class'=>'form-control','id' => 'nombre','required',(isset($ver)? 'readonly': '' ) ]) !!}
</div>

<div class="form-group">
	{!! Form::label('direccion_calle','Direccion del Comercio '. (isset($ver)? '': '(*)' ),['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('direccion_calle',(isset($comercio)? $comercio->direccion_calle: null),['class'=>'form-control','id' => 'direccion_calle','required',(isset($ver)? 'readonly': '' )]) !!}
</div>
<div class="form-group">
	{!! Form::label('direccion_esquina','Esquina'. (isset($ver)? '': '(*)' ),['class'=>"form-label-cms-3"])!!}
	{!! Form::checkbox('direccion_esquina', (isset($comercio)? $comercio->direccion_esquina: null),true,['class'=>'form-control','id' => 'direccion_esquina',(isset($ver)? 'readonly': '' )]) !!}
</div>
<div class="form-group">
	{!! Form::label('telefono','telefono del comercio '. (isset($ver)? '': '(*)' ),['class'=> 'form-label-cms-3' ]) !!}
	{!! Form::number('telefono',(isset($comercio)? $comercio->telefono: null),['class'=>'form-control','id' => 'telefono', 'min'=>'1000000', 'max'=>'999999999999','required',(isset($ver)? 'readonly': '' )]) !!}
</div>
<div class="form-group">
	{!! Form::label('horario','horario del comercio'. (isset($ver)? '': '(*)' ),['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('horario',(isset($comercio)? $comercio->horario: null),['class'=>'form-control','id' => 'horario','required',(isset($ver)? 'readonly': '' )]) !!}
</div>
<div class="form-group">
	{!! Form::label('rubro_id','Rubro al que pertenece el comercio'. (isset($ver)? '': '(*)' ),['class'=> "form-label-cms-3" ])!!}
	{!! Form::select('rubro_id',['' => 'Seleccione un rubro'] + $rubros->toArray(),(isset($comercio)? $comercio->rubro_id: null),['id' => 'rubro_id','class'=>'form-control',(isset($ver)? 'disabled': null )]) !!}
</div>
<div class="form-group">
	{!! Form::label('localidad_id','Localidad al que pertenece el'. (isset($ver)? '': '(*)' ),['class'=> "form-label-cms-3" ])!!}
	{!! Form::select('localidad_id',['' => 'Seleccione un Localidad'] +$localidad->toArray(),(isset($comercio)? $comercio->localidad_id: null),['id' => 'localidad_id','class' =>'form-control',(isset($ver)? 'disabled': null )]) !!}
	
</div>

@if(!(isset($ver)))
    {!! Form::button('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
    
   @else
   <a href="{{route('comercio.edit',$comercio->id)}}" class="btn btn-warning "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
@endif

      <a href="{{ route('comercio.index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</a>
	