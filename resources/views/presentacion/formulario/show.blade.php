
@extends('template.layout')
@section('title',"Ver Presenacion")
@section('content')

    <h2>{{ $presentacion->nombre }}</h2>

    @include('presentacion.partials.form')
    <br/><h3>Productos</h3></br>
    if(isset($productos))
    <div class="form-group">
        <table class="table table-bordered">
        	<thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Codigo</th>
                    <th colspan="1">acciones</th>
                </tr>
            </thead>
            <tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td>{{ $producto->precio }}</td>
					<td>{{ $producto->codigo_barra }}</td>
					<td><button class="btn btn-primary">Quitar</button></td>
				</tr>
			@endforeach
		 	</tbody>
		</div>
    @enfif

@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection