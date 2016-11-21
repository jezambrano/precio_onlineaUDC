@extends('template.layout')
@section('title',"Bienvenida")
@section('content')

<div>
    <div> 
        <h1> Bienvenido <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h1> 
    </div>

    <div  class="form-group row">

    <a class="btn btn-info" href="{{ route('producto.index') }}"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Productos</a>

    </div>


    
    <div  class="form-group row">

	<a class="btn btn-info" href="{{ route('precio.index') }}"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Precios</a>

    </div>

    <div  class="form-group row">

	<a class="btn btn-info" href="{{ route('comercio.index') }}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comercios</a>

    </div>
    
     
    

    
    
     <div  class="form-group row">

	<a class="btn btn-info" href="{{ route('categoria.index') }}"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Categorias</a>

    </div>

</div>



@endsection