<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/vendor/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="panel panel-warning">
    <div class="panel-heading">
        <ul class="nav nav-pills">
        @if(Auth::check())
            <li role="presentation" class="active"><a href="/auth/logout">logout</a></li>
            <li role="presentation"><a href="{{action('UserController@index')}}">Ver usuarios</a></li>
        @else
            <li role="presentation" class="active"><a href="/auth/login">login</a></li>
        @endif
        </ul>
    </div>
    <div class="panel-body">
    @yield("contenido")
    </div>
    <div class="panel-footer">
        Este va a ser mi pie de p&aacute;gina - Derechos de Estefi Cuicci
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/vendor/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>