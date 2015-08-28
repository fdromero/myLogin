<!-- resources/views/auth/login.blade.php -->
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8"></meta>
    <link type="text/css" href="/vendor/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<div class="container" style="width: 40%; margin-top: 50px">
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
        <div class="form-group input-group input-group-lg">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-envelope"></span>
            </span>
            <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group input-group input-group-lg">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
            </span>
            <input class="form-control" type="password"  name="password" id="password" placeholder="Clave">
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember"> Recordarme
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
        </div>

</form>
</div>
</body>