<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{
    protected $table = 'person';
    
    public $timestamps = false;

    public function address() : BelongsTo
    {
        return $this->belongsTo('App\model\Address');
    }

    /*
        Relationship with User table -> One-to-One
    */
    public function user() : BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    // public function user() : HasOne
    // {
    //     return $this->hasOne('App\User');
    // }
}
