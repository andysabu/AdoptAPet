<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoleUser extends Model
{
    protected $table = 'role_user';

    public $timestamps = false;

    /**
     * Get the users
     */
    public function users() : HasMany
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get the roles 
     */
    public function roles() : HasMany
    {
        return $this->hasMany('App\model\Role');
    }
}
