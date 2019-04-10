<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
	protected $fillable = [
	'name', 'slug', 'is_feature'
	];

    public function educations(){
    	return $this->hasMany('App\Models\Education', 'university_id', 'id');
    }
}
