<?php

namespace App\Http\Middleware;

use App\NavMenu;
use Closure;
use Illuminate\Support\Facades\Route;

class RolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $rutaActual = Route::current()->getAction()["controller"];
        $rutaActual = str_replace('App\\Http\\Controllers\\', '', $rutaActual);
        $ruta = NavMenu::where("ruta", $rutaActual)->first();


            //($ruta->nav_menu_permisos()->lists("rol"));
        //dd($ruta->nav_menu_permisos()->lists("rol"));

        if (!\Auth::user()){
            return redirect(action('Auth\AuthController@getLogin'));
        }

        if (!\Auth::user()->hasrole($ruta->nav_menu_permisos()->lists("rol")->toArray())) {
            abort(403, "No tienes permiso para ingresar a esta seccion.");

       }
        return $next($request);
    }
}
