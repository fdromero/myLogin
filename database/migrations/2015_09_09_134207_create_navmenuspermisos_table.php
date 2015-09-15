<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavmenuspermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_menu_permisos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nav_menu_id')->unsigned();
            $table->string('rol');
            $table->string('acciones');
            $table->timestamps();

            $table->foreign('nav_menu_id')
                ->references('id')->on('nav_menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nav_menu_permisos');
    }
}
