<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnimalUser extends Model
{
    protected $table = 'animal_user';

    public $timestamps = false;

    // /**
    //  * Get the animal
    //  */
    // public function animals() : belongsToMany
    // {
    //     return $this->belongsToMany('App\model\Animal');
    // }

    // /**
    //  * Get the user
    //  */
    // public function users() : BelongsToMany
    // {
    //     return $this->belongsToMany('App\User');
    // }
    /**
     * Get the animal
     */
    public function animals() : HasMany
    {
        return $this->hasMany('App\model\Animal');
    }

    /**
     * Get the user
     */
    public function users() : HasMany
    {
        return $this->hasMany('App\User');
    }
}
