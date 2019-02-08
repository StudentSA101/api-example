<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'users';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the user that owns the profile
     */

    public function user()
    {
        return $this->belongsTo('App\Profiles');
    }
    
}