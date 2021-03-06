<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

	const PAGINATE = 5;
	protected $fillable =[
	'university_id', 'cv_id', 'year_start', 'year_end', 'developer', 'description'
	];

    public function university(){
    	return $this->belongsTo('App\Models\University', 'university_id', 'id');
    }

    public function cv(){
    	return $this->belongsTo('App\Models\Cv', 'cv_id', 'id');
    }

}
