<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;



class TaskUser extends Model
{
    protected $table = 'task_user';

    public $timestamps = false;
    
    /**
     * Get the users
     */
    public function users() : HasMany
    {
        return $this->hasMany('App\model\User');
    }

    /**
     * Get the tasks
     */
    public function tasks() : HasMany
    {
        return $this->hasMany('App\model\Task');
    }
}
   

