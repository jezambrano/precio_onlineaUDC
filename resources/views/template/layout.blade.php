<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>
	{!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/datepicker/datepicker3.css') !!}

        @yield('style')


        <style>
            body{
                margin-top: 60px;
                
            }
        </style>

    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>

                        <li class="dropdown">
                            <a href="producto" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Producto <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('producto.index') }}">Ver Todos</a></li>
                                <li><a href="{{ route('producto.create') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo</a></li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="comercio" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comercio <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('comercio.index') }}">Ver Comercios</a></li>
                                <li><a href="{{ route('comercio.create') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="comercio" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listado de Precios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('precio.index') }}">Ver Precios</a></li>
                                <li><a href="{{ route('precio.create') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
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