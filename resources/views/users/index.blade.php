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
    			<th>Ultima modificaci&oacute;n</th>
    			<th>Fecha de alta</th>
    		</tr>
    	</thead>
    	<tbody>
            @forelse($users as $user)
                <tr>
                    <td><a href="{{action("UserController@show", $user->id)}}">{{$user->name}}</a></td>
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
                <td colspan="4"><a class="button" href="{{action("UserController@create")}}">Crear nuevo usuario</a> </td>
            </tr>
    	</tbody>
    </table>
@endsection