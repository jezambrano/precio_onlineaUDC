
@if(!(isset($producto)))
  
  <div class="form-group">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
	   {!! Form::label('producto','Producto:' ,['class'=> "form-label-cms-3" ])!!}
	   {!! Form::select('producto',['' => 'Seleccione un producto'] + $productos->toArray(),(isset($producto)? $producto->id: null),['id' => 'producto','class'=>'form-control',(isset($producto)? 'disabled': null )]) !!}
  </div>

<div class="form-group">
  <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> 
	{!! Form::label('codigo_barra','Codigo de barras:' ,['class'=> "form-label-cms-3" ])!!}
	{!! Form::select('codigo_barra',['' => 'Seleccione un codigo barra'] + $codigos_barras->toArray(),(isset($producto)? $producto->id: null),['id' => 'codigo_barra','class'=>'form-control',(isset($producto)? 'disabled': null )]) !!}
</div>

@endif
<br>

<div class="form-group">
	<p>
		<h4><b>Datos del producto</b></h4>
	</p>
	<div>
		{!! Form::label('producto_nombre','Nombre:' ,['class'=> "form-label-cms-3" ])!!}
		{!! Form::text('producto_nombre',(isset($producto)? $producto->nombre: null),['class'=>'form-control','id' => 'producto_nombre','readonly']) !!}

	</div>
	
	<div>
		{!! Form::label('producto_descripcion','Descripcion:',['class'=> "form-label-cms-3" ])!!}
		{!! Form::text('producto_descripcion',(isset($producto)? $producto->descripcion: null),['class'=>'form-control','id' => 'producto_descripcion','readonly']) !!}

	</div>


	{!! Form::hidden('producto_id',(isset($producto)? $producto->id: null),['class'=>'form-control','id' => 'producto_id','readonly']) !!}
</div>
<br>
<br>
<div class="form-group">
	{!! Form::label('comercio_id','Comercios: (*)' ,['class'=> "form-label-cms-3" ])!!}
	{!! Form::select('comercio_id',['' => 'Seleccione un comercio'] + $comercios->toArray(),null,['id' => 'comercio_id','class'=>'form-control']) !!}
</div>


<div class="form-group">
    <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
    {!! Form::label('valor','Precio (*) ',['class'=> "form-label-cms-3" ]) !!}
    {!! Form::text('valor',0,['class'=>'form-control','id' => 'valor', 'required'=>'required']) !!}
</div>

<div class="form-group">
    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
    {!! Form::label('fecha','Fecha (*) ',['class'=> "form-label-cms-3" ]) !!}
    
      {!! Form::text('fecha',null,['class'=>'col-sm-3 form-control','id' => 'fecha', 'required'=>'required']) !!}
    
    
</div>

<br><br>
<div>
   {!! Form::submit('Enviar',['class'=> "btn btn-default" ]) !!}
</div>
 


@section('script')

<script>

	 $(document).ready(function() {

         $('#fecha').datepicker({
            rtl: true,
            autoclose: true,
            todayHighlight: true,
            format: 'dd-mm-yyyy',
            language: 'es'
         
        });

	 	$('#codigo_barra').on('change', function(e){
     
            var producto_id = e.target.value;
          //  var material_id=$("#material_id :selected").val();
      

          if(producto_id == ''){

          		$('#producto_nombre').empty();
            	$('#producto_descripcion').empty();

            	$('#producto_nombre').val('');
            	$('#producto_descripcion').val('');
            	$('#producto_id').val(''); 
          }else{

          	$.get('/producto/data/'+producto_id, function(data) {

            	$('#producto_id').empty(); 
            	$('#producto_nombre').empty();
            	$('#producto_descripcion').empty();

            	$('#producto_id').val(data.id); 
           	 	$('#producto_nombre').val(data.nombre);
            	$('#producto_descripcion').val(data.descripcion);
            	//$('#producto').val(data.id).change();
                     
             
            });

          }

         
       });


	 	$('#producto').on('change', function(e){
     
            var producto_id = e.target.value;


             if(producto_id == ''){
          		$('#producto_nombre').empty();
            	$('#producto_descripcion').empty();

            	$('#producto_nombre').val('');
            	$('#producto_descripcion').val('');
            	$('#producto_id').val(''); 


          }else{

          	$.get('/producto/data/'+producto_id, function(data) {

           		$('#producto_id').empty(); 
            	$('#producto_nombre').empty();
            	$('#producto_descripcion').empty();

            	$('#producto_id').val(data.id); 
            	$('#producto_nombre').val(data.nombre);
            	$('#producto_descripcion').val(data.descripcion);
            	//$('#codigo_barra').val(data.id).change();
             
            });

          }

       });


	 });


</script>
@endsection