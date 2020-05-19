<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AnimalType extends Model
{
    protected $table = 'animal_type';

    public $timestamps = false;

    /**
     * Get the animal
     */
    public function animal_type() : HasOne
    {
        return $this->hasOne('App\model\Animal');
    }
}
