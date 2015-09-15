<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \DB;

class InsertInNavmenues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        DB::table('users')->insert(
//            ['email' => 'john@example.com', 'votes' => 0]
//        );

        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [1,'UserController@index','Ver Usuarios']);
        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [2,'UserController@show','Ver Usuario seleccionado']);
        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [3,'UserController@create','Crear nuevo usuario']);
        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [4,'UserController@store','Guardar datos de usuario nuevo']);
        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [5,'UserController@edit','Editar Usuarios']);
        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [6,'UserController@update','Guardar datos modificados']);
        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [7,'UserController@destroy','Eliminar Usuarios']);
        DB::insert("insert into nav_menus (id, ruta, titulo) VALUES (?,?,?)", [8,'RolController@index','Ver usuarios y roles']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [1,'propietario','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [1,'admin','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [2,'propietario','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [2,'admin','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [5,'propietario','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [6,'propietario','put']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [7,'admin','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [7,'propietario','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [8,'admin','get']);
        DB::insert("insert into nav_menu_permisos (nav_menu_id, rol, acciones) VALUES (?,?,?)", [8,'propietario','get']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete("delete from nav_menu_permisos");
        DB::delete("delete from nav_menus");
    }
}
