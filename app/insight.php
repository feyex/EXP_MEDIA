<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insight extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'project','advisor'

    ];

    protected $table='insight';

}
