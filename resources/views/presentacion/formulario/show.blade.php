
@extends('template.layout')
@section('title',"Ver Presenacion")
@section('content')

    <h2>{{ $presentacion->nombre }}</h2>

    @include('presentacion.partials.form')
    <br/><h3>Productos</h3></br>
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
			@foreach($presentacion->productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td>{{ $producto->precio }}</td>
					<td>{{ $producto->codigo_barra }}</td>
					<td><a class="btn btn-danger" href="{{route('presentacion.quitar.producto',[$presentacion->id,$producto->id])}}" data-toggle="tooltip" data-placement="right" title="Quitar el producto de esta presentacion"><span class="glyphicon glyphicon-remove" aria-hidden="true" ></span></a></td>
				</tr>
			@endforeach
		 	</tbody>
		</div>
@endsection

@section('script')

<script type="text/javascript">
	
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>
@endsection
