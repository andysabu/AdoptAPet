<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function person() : HasOne
    {
        return $this->hasOne('App\model\Person');
    }
    
    public function tasks() : BelongsToMany
    {
        return $this->belongsToMany('App\model\Task');
    }
    
    public function roles() : BelongsToMany
    {
        return $this->belongsToMany('App\model\Role');
    }

    /** 
     * Get the animals for that user.
     */
    public function animals() : BelongsToMany
    {
        return $this->belongsToMany('App\model\Animal');
    }
    // /** 
    //  * Get the animals for that user.
    //  */
    // public function user_animals() : HasMany
    // {
    //     return $this->hasMany('App\model\AnimalUser');
    // }
}
