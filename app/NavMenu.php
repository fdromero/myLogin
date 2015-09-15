<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavMenu extends Model
{
    protected $table = "nav_menus";

    //HasMany: relaciona contra la otra tabla de permisos, en vez de hacer join
    public function nav_menu_permisos()
    {
        return $this->hasMany('App\NavMenuPermiso');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ruta', 'titulo'];

    protected $hidden = ['created_at', 'updated_at'];

}
