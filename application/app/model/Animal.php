<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{
    protected $table = 'animal';

    public $timestamps = false;
    
    protected $guarded = []; 

    /**
     * Get the gender for that animal.
     */
    public function gender() : BelongsTo
    {
        return $this->belongsTo('App\model\Gender');
    }
    
    /**
     * Get the gender for that animal.
     */
    public function animal_type() : BelongsTo
    {
        return $this->belongsTo('App\model\AnimalType');
    }

    /**
     * Get the gender for that animal.
     */
    public function breed() : BelongsTo
    {
        return $this->belongsTo('App\model\Breed');
    }

    /**
     * Get the gender for that animal.
     */
    public function users() : BelongsToMany
    {
        return $this->belongsToMany('App\User');
    }
    /**
     * Get the gender for that animal.
     */
    public function animal_users() : HasMany
    {
        return $this->hasMany('App\model\AnimalUser');
    }
}
