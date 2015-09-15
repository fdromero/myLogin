<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users= User::all();
        return view ("users.index")->with(array("users"=>$users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\UserStoreRequest $request)
    {
        $data= $request->only(array('name', 'username', 'password'));
        $data["password"] = bcrypt($data["password"]);
        $user=User::create($data);
        if ($user InstanceOf User) {
            return redirect(action('UserController@index'));
        }
        return ("error");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $usuario= User::findOrFail($id);

        return view ("users.show")->with(array("user"=>$usuario));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $usuario= User::findOrFail($id);
        return view ("users.edit")->with(array("user"=>$usuario));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\UserUpdateRequest $request, $id)
    {

        //pasar el id por parametro fuera del array, sin input hidden?

        $user= User::findOrFail($id);
        $data= $request->only(array('name', 'username', 'password', 'isAdmin'));
        if ($request->has("password"))
            $data["password"] = bcrypt($data["password"]);
        else
            unset($data["password"]);
        $userEdit= User::where('id', $id)->update($data);

        return redirect(action('UserController@index'));

    }

    /**
     * Remove the specified resource from storage.
     * Solo elimina si el usuario es Admin
     * @param  int  $id
     * @return Response
     */
    public function destroy(Requests\UserDeleteRequest $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash("Mensaje","Se ha eliminado el usuario");
        return redirect(action('UserController@index'));
    }
}
