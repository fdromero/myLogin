<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Sroutier\EloquentLDAP\Contracts\EloquentLDAPUserInterface;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract,EloquentLDAPUserInterface
{
    use Authenticatable, CanResetPassword, EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'username', 'password','isAdmin','auth_type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Implements the 'isMemberOf(...)' as required by Eloquent-LDAP by using
     * the hasRole method and ignoring the enable state of the role.
     *
     * @param $name
     * @return bool
     */
    public function isMemberOf($name) {
        return $this->hasRole($name, false, false);
    }
    /**
     * Implements the 'membershipList()' method as required by Eloquent-LDAP.
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function membershipList() {
        return $this->roles();
    }
}
