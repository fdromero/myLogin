<?php


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Ver usuarios

Route::group(/**
 *
 */
    array('prefix'=> 'usuarios', 'middleware'=>'auth'), function(){
    //edita y al clickear en modificar Forbbiden
    //Entrust::routeNeedsPermission('/{id}/edit', 'edit_usuario');

    Route::get('/', 'UserController@index');
    Route::get('/{id}/show', 'UserController@show');
    Route::get('/create', 'UserController@create');
    Route::post('/', 'UserController@store');
    Route::get('/{id}/edit', 'UserController@edit');
    Route::put('/{id}', 'UserController@update');
    Route::get('/{id}/destroy', 'UserController@destroy');
});

Route::group(
    array('prefix'=> 'roles', 'middleware' => 'rol'), function(){
    Route::get('/', 'RolController@index');
    Route::get('/{id}/edit', 'RolController@edit');
    });


Route::group(
    array('prefix'=> 'rutas', 'middleware' => 'rol'), function(){
    Route::get('/', 'RutaController@index');
    Route::get('/create', 'RutaController@create');
    Route::post('/', 'RutaController@store');
    Route::get('/{id}/destroy', 'RutaController@destroy');
});



//el middleware evalua si esta logueado sigue
Route::get('home',array("middleware"=>'auth', function(){
    return view('home.home');
}));



Route::get('/', function () {
    return view('welcome');
});
