@extends("layout")
@section("contenido")
<div class="container">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
            <form class="form-signin" method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="panel panel-success">
                    <div class="panel-heading">Iniciar sesion</div>
                    <div class="panel-body">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus></br>
                        <input type="password" class="form-control" name="password" placeholder="Password" required></br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Iniciar</button>
                         <br>
                        <p style="text-align: center"> <a href="register">Registrate </a></p>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection