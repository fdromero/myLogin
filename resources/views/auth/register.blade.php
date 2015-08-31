@extends("layout")
@section("contenido")
<div class="col-sm-6 col-md-4 col-md-offset-4">
<form class="form-horizontal" method="POST" action="/auth/register">
    {!! csrf_field() !!}
    <div class="panel panel-success">
        <div class="panel-heading">Registrese</div>
        <div class="panel-body">
            <div class="control-group">
                <!-- Username -->
                <label class="control-label"  for="name">Name</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="username">E-mail</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </span>
                    <input type="email" class="form-control" value="{{ old('username') }}" name="username" placeholder="Email">
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Password</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="password" name="password" class="form-control"  placeholder="password">
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password_confirm">Confirme su password</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="password" name="password_confirmation" class="form-control"  placeholder="confirme su password">
                </div>
            </div><br>
            <div class="control-group">
                <!-- Button -->
                <div class="controls">
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@if(count($errors)>0)
        Hubo error
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
@endif
@endsection