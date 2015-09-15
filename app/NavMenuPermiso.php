<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavMenuPermiso extends Model
{
    protected $table = "nav_menu_permisos";

    protected $fillable = ['rol', 'acciones', 'nav_menu_id'];

    protected $hidden = ['created_at', 'updated_at'];
}
