@extends('template.layout')

@section('content')

    {{ Form::model($comercio,[ 'method' => 'PUT','route' => ['comercio.update',$comercio->id] ] ) }}

            @include('comercio.partials.form')
            
    {{Form::close()}}



@endsection

@section('script')

<script type="text/javascript">
	


</script>
@endsection