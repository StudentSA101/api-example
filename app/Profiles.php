<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'profiles';   

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get all the user details;
     */

    public function userDetail() 
    {

        return $this->hasMany('App\Users');

    }

    /**
     * Get all the user details;
     */

    public function userType() 
    {

        return $this->hasMany('App\Types');

    }
}