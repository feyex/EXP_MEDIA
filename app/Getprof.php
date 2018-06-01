<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getprof extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category', 'past_project', 'project', 'talent',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
