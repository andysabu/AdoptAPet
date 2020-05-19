<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    protected $table = 'task';
    
    public $timestamps = false;

    public function users() : BelongsToMany
    {
        return $this->belongsToMany('App\model\User');
    }

    // public function taskUser() : BelongsToMany
    // {
    //     // return $this->belongsToMany('App\model\Task','task_user', 'task_id', 'user_id');
    //     return $this->belongsToMany('App\model\Task');
    // }
}
