<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class creative extends Model
{
	//
	protected $table='creative';
	protected $fillable = [
		'name', 'email', 'phone','location','know_us','education_level',
		'interest','skills','intern_section','file_upload'
	];
}
