@extends('layout')
@section('contenido')
    <table class="table">
        <tr>
            <td>Nombre</td>
            <td>Username</td>
            <td>Ultima modificaci&oacute;n</td>
            <td>Fecha de alta</td>
        </tr>
        @forelse($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->updated_at}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay datos</td>
            </tr>
        @endforelse
        <tr>
            <td colspan="4"><a class="button" href="{{action("UserController@create")}}">Crear</a> </td>
        </tr>
    </table>
@endsection