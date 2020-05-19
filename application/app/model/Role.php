<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $table = 'role';
    
    public $timestamps = false;

    public function users() : BelongsToMany
    {
        return $this->belongsToMany('App\model\User')->as('user_role');
    }
}
