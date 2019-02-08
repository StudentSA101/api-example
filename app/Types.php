<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'types';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the user that owns the profile
     */

    public function type()
    {
        return $this->belongsTo('App\Profiles');
    }
}