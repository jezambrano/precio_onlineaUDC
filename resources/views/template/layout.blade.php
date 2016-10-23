<!DOCTYPE html>
</head>
<head>
	<title> @yield('title')</title>
	{!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/datepicker/datepicker3.css') !!}

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
	
        
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/datepicker/bootstrap-datepicker.js') !!}
        {!! Html::script('assets/datepicker/locales/bootstrap-datepicker.es.js') !!}
     
        @yield('script')
        
     


	 
</body>
</html>