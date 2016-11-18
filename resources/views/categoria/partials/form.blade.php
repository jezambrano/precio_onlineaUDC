<div class="form-group">
	{!! Form::label('nombre','nombre de categoria'. (isset($ver)? '': '(*)' ) ,['class'=> "form-label-cms-3" ]) !!}
	{!! Form::text('nombre',(isset($categorias)? $categorias->nombre: null),['class'=>'form-control','id' => 'nombre','required',(isset($ver)? 'readonly': '' ) ]) !!}
</div>

@if(!(isset($ver)))
    {!! Form::button('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Guardar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
    
   @else
   <a href="{{route('categoria.edit',$categorias->id)}}" class="btn btn-warning "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
@endif

      <a href="{{ route('categoria.index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</a>