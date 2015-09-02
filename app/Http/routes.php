<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Ver usuarios

Route::group(array('prefix'=> 'usuarios', 'middleware'=>'auth'), function(){

    Route::get('/', 'UserController@index');
    Route::get('/{id}/show', 'UserController@show');
    Route::get('/create', 'UserController@create');
    Route::post('/', 'UserController@store');
    Route::get('/{id}/edit', 'UserController@edit');
    Route::put('/{id}', 'UserController@update');
    Route::get('/{id}/destroy', 'UserController@destroy');
});



//el middleware evalua si esta logueado sigue
Route::get('home',array("middleware"=>'auth', function(){
    return view('home.home');
}));



Route::get('/', function () {
    return view('welcome');
});
