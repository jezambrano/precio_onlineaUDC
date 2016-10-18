@extends('template.layout')

@section('content')

	
	{!! Form::open(['url' => 'comercio', 'id'=>'comercio']) !!}

            @include('comercio.partials.form')
            
    {!! Form::close() !!}



@endsection

@section('script')

<script type="text/javascript">
	public function rubros()
	{
    $rubros = ['rubros' => DB::table('rubros')->lists('nombre', 'id')];
 
    return View::make('comercio.create', $rubros);
	}
	public function provincias()
	{
    $provincias = ['provincias' => DB::table('provincias')->lists('nombre', 'id')];
 
    return View::make('comercio.create', $provincias);
	}
	public function localidades()
	{
    $localidades = ['localidades' => DB::table('localidades')->lists('nombre', 'id')];
 
    return View::make('comercio.create', $localidades);
	}


</script>
@endsection