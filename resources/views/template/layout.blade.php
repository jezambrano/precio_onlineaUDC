<!DOCTYPE html>
<html>
<head>
	 <title> @yield('title')</title>
	 {!! Html::style('./assets/css/bootstrap.css') !!}

</head>
<body>
	@include('template.errores')
	 @yield('content')
	 @yield('scripts')
	 {!! Html::script('./assets/js/jquery.min.js') !!}
	 {!! Html::script('./assets/js/bootstrap.min.js') !!}
	 


	 
</body>
</html>