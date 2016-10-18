<!DOCTYPE html>
</head>
<head>
	<title> @yield('title')</title>
	{!! Html::style('assets/css/bootstrap.css') !!}
        @yield('style')


</head>
<body>
	@include('template.errores')
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    @yield('content')
                    
         
         
                </div>

            </div>

        </div><!-- /.container -->
	
        
        @yield('scripts')
        
        {!! Html::script('assets/js/jquery.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	 


	 
</body>
</html>