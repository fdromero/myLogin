@extends("layout")
@section("contenido")
    <div class="col-sm-8 col-md-4 col-md-offset-4">
        <form class="form-horizontal" method="POST" action="{{action("RutaController@store")}}">
            {!! csrf_field() !!}
            <div class="panel panel-success">
                <div class="panel-heading">Nueva Ruta</div>
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-addon" style="width: 100px; text-align: left;" id="basic-addon1">Ruta</span>
                        <input type="text" class="form-control" style="width: 350px;" name="ruta" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="width: 100px; text-align: left;" id="basic-addon1">Titulo</span>
                        <input type="text" class="form-control" name="titulo" style="width: 350px;" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="width: 100px; text-align: left;" id="basic-addon1">Rol</span>
                        <input type="text" class="form-control" name="rol" style="width: 350px;" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="width: 100px; text-align: left;" id="basic-addon1">Acciones</span>
                        <input type="text" class="form-control" name="acciones" style="width: 350px;" aria-describedby="basic-addon1">
                    </div>



                    {{--<div class="control-group">--}}
                        {{--<!-- Ruta -->--}}
                        {{--<label class="control-label"  for="ruta">Ruta</label>--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" name="ruta" value="{{ old('ruta') }}">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="control-group">--}}
                        {{--<!-- Titulo- -->--}}
                        {{--<label class="control-label" for="username">Titulo</label>--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" value="{{ old('titulo') }}" name="titulo">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="control-group">--}}
                        {{--<!-- Rol-->--}}
                        {{--<label class="control-label" for="rol">Rol</label>--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" name="rol" class="form-control">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="control-group">--}}
                        {{--<!-- Acciones-->--}}
                        {{--<label class="control-label" for="acciones">Acciones</label>--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" name="acciones" class="form-control">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <br>
                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Guardar</button>
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