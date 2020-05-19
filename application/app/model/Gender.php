<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gender extends Model
{
    protected $table = 'gender';

    public $timestamps = false;

     /**
     * Get the gender 
     */
    public function gender() : HasOne
    {
        return $this->hasOne('App\model\Animal');
    }
}
