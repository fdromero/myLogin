<?php

namespace App\Http\Controllers;

use App\NavMenu;
use App\NavMenuPermiso;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //with (nombre de la relacion, casi siempre mismo nombre de la tabla)
        $rutas = NavMenu::with('nav_menu_permisos')->get();
        if ($request->ajax()) {
            return $rutas->count();
        }
        return view("rutas.index")->with(array("rutas" => $rutas));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("rutas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $resultado= DB::transaction(function() use ($request){

            $data= $request->only(array('ruta', 'titulo'));

            $newRuta=NavMenu::create($data);
            if ($newRuta InstanceOf NavMenu) {

                $data= $request->only(array('rol', 'acciones'));
                $newRuta->nav_menu_permisos()->create($data); // crea la relacion entre las 2 tablas
//                $data += ["nav_menu_id"=>$newRuta->id];
//                $newPermiso=NavMenuPermiso::create($data);

                return redirect(action('RutaController@index'));
            }
            return ("error");
        });

        return $resultado;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
