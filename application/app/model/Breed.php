<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Breed extends Model
{
    protected $table = 'breed';

    public $timestamps = false;

     /**
     * Get the gender 
     */
    public function breed() : HasOne
    {
        return $this->hasOne('App\model\Animal');
    }
}
