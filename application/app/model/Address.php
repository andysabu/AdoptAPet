<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    protected $table = 'address';
    public $timestamps = false;

    public function person() : HasMany
    {
        return $this->hasMany('App\model\Person');
    }
}
