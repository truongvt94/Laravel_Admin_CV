<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = [
	'name', 'slug', 'is_featured'
	];

    public function workExperince(){
    	return $this->hasMany('App\Models\WorkExperince', 'company_id', 'id');
    }
}
