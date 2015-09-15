@extends('layout')
@section('contenido')
    <div>
        @if(Session::has("Mensaje"))
            {{Session::get("Mensaje")}}
        @endif
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Ruta</th>
            <th>Titulo</th>
            <th>Rol</th>
        </tr>
        </thead>
        <tbody>
        @forelse($rutas as $ruta)
            <tr>
                <td>{{$ruta->ruta}}</td>
                <td>{{$ruta->titulo}}</td>
                <td>
                    @foreach($ruta->nav_menu_permisos as $permiso)
                    <li>{{$permiso->rol}}..
                    {{$permiso->acciones}}</li>
                    @endforeach
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay datos</td>
            </tr>
        @endforelse
        <tr>
            <td colspan="4"><a class="button" href="{{action("RutaController@create")}}">Crear nueva ruta</a> </td>
        </tr>
        </tbody>
    </table>
    <input type="button" value="Calcular" id="calculador">
    <script>
        $("#calculador").click(function() {
            $.get('/rutas', null, function(response) {
                $("#contador-de-rutas").val(response);
            }, 'json');
        });
    </script>
    <input type="text" id="contador-de-rutas">
@endsection