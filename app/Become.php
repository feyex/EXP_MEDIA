<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Become extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_type', 'project_pitch',
    ];

    public function users()
    {
      # code...
      return $this
          -> belongsToMany('App\User');
    }

}
