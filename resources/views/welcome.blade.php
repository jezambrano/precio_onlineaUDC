@extends('template.layout')
@section('title',"Bienvenida")
@section('content')

<div>
    <div> <h1> Bienvenido <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h1> </div>

    <div class="form-group row">
	<a class="btn btn-info" href="cargar_producto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Cargar Producto</a>
    </div>
    
    
    <div  class="form-group row">

	<a class="btn btn-info" href="precio"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Precios</a>

    </div>

    <div  class="form-group row">

	<a class="btn btn-info" href="comercio"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Comercios</a>

    </div>
    
    <div  class="form-group row">

	<a class="btn btn-info" href="producto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Productos</a>

    </div>
    
    
     <div  class="form-group row">

	<a class="btn btn-info" href="categoria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Categorias</a>

    </div>

</div>



@endsection