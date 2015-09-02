@extends("layout")
@section("contenido")
    <div class="panel panel-info">
    	  <div class="panel-heading">
    			<h3 class="panel-title">Usuario: {{Auth::user()->name}}</h3>
    	  </div>

    	  <div class="panel-body">
    			<table class="table table-hover">
    				<thead>
    					<tr>
    						<th>Nombre: {{$user->name}}</th>
    						<th>Username</th>
    						<th>Fecha de alta</th>
    						<th>Ultima modificacion</th>
    						<th>Acciones</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td>{{$user->name}}</td>
    						<td>{{$user->username}}</td>
    						<td>{{$user->created_at}}</td>
    						<td>{{$user->updated_at}}</td>
    						<td><a href="{{action("UserController@edit", $user->id)}}"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href="{{action("UserController@destroy", $user->id)}}"><span class="glyphicon glyphicon-remove"></span></a></td>
    					</tr>
    				</tbody>
    			</table>
    	  </div>
    </div>
@endsection