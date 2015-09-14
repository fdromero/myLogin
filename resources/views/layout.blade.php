<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Usuarios y login</title>

    <!-- Bootstrap -->
    <link href="/vendor/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<div class="panel panel-warning">
    <div class="panel-heading">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Auth::check())
                    <li class="active"><a href="{{action('UserController@index')}}">Ver Usuarios <span class="sr-only">(current)</span></a></li>
                @endif
                @if(Entrust::can('ver_usuarios'))
                    <li class="active"><a href="{{action('RolController@index')}}">Roles y Permisos<span class="sr-only">(current)</span></a></li>
                @endif
                @if(Entrust::hasRole('propietario'))
                    <li class="active"><a href="{{action('RutaController@index')}}">Rutas y Permisos<span class="sr-only">(current)</span></a></li>
                @endif
        	</ul>
        </div>

            {{--<li role="presentation" class="active"><a href="{{action('Auth\AuthController@getLogout')}}">logout</a></li>--}}
            {{--@if(Entrust::can('ver_usuarios'))--}}
                {{--<li role="presentation"><a href="{{action('UserController@index')}}">Ver Usuarios</a></li>--}}
            {{--@endif--}}
        {{--@else--}}
            {{--<li role="presentation" class="active"><a href="{{action('Auth\AuthController@getLogin')}}">login</a></li>--}}
        {{--@endif--}}
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{action('Auth\AuthController@getLogout')}}">Salir</a></li>
                    <li><a href="#">Another action</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
        @else
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('Auth\AuthController@getLogin')}}">Ingresar</a></li>
                <li><a href="{{action('Auth\AuthController@getRegister')}}">Registrate</a></li>
            </ul>
        @endif
    </div>




        {{--@if(Auth::check())--}}
                {{--<p class="navbar-text navbar-right">Bienvenido {{Auth::user()->name}}</p>--}}
                {{--<div class="navbar-text navbar-right"><a href="{{action('Auth\AuthController@getLogout')}}">logout</a></div>--}}
        {{--@else--}}
            {{--<div class="navbar-text navbar-right"><a href="{{action('Auth\AuthController@getLogin')}}">Login</a></div>--}}
        {{--@endif--}}

        {{--</ul>--}}

    <div class="panel-body">
        @yield("contenido")
    </div>
    <div class="panel-footer">
        Este va a ser mi pie de p&aacute;gina - Derechos de Estefi Cuicci
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/vendor/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</html>