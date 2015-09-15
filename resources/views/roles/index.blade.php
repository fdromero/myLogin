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
            <th>Nombre</th>
            <th>Username</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{$user->nombre}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->rol}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
                    {{--@if(Entrust::can('destroy_usuario'))--}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay datos</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection