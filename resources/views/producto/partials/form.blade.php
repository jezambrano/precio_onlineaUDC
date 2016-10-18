<div class="form-group">
    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
    {!! Form::label('nombre','Nombre del producto (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('nombre',(isset($producto)? $producto->nombre: null),['class'=>'form-control','id' => 'nombre', 'required'=>'required']) !!}

</div>

<div class="form-group">
    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    {!! Form::label('descripcion','Descripcion (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('descripcion',(isset($producto)? $producto->descripcion: null),['class'=>'form-control','id' => 'descripcion', 'required'=>'required' ]) !!}


</div>


<div class="form-group">
    {!! Form::label('precio','Precio (*) ',['class'=> "form-label-cms-3" ]) !!}


    {!! Form::text('precio',(isset($producto)? $producto->precio: null),['class'=>'form-control','id' => 'precio', 'required'=>'required']) !!}
</div>

<div class="form-group">

    <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> 
    {!! Form::label('codigo_barra',' Codigo de Barras (*) ',['class'=> "form-label-cms-3"]) !!}


    {!! Form::number('codigo_barra',(isset($producto)? $producto->codigo_barra: null),['class'=>'form-control','id' => 'codigo_barra', 'required'=>'required', 'min'=>'1000000000000', 'max'=>'9999999999999']) !!}

</div>

<div class="form-group">

    <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
    {!! Form::label('imagen','imagen del producto (*) ',['class'=> "form-label-cms-3" ]) !!}

    {!! Form::file('imagen',(isset($producto)? $producto->imagen: null),['class'=>'form-control','id' => 'imagen', 'required'=>'required']) !!}

</div>