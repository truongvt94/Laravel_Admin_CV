<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperince extends Model
{
	const PAGINATE = 5;
	protected $fillable = [
	'company_id', 'cv_id', 'year_start', 'year_end', 'developer', 'description'
	];

    public function cv(){
    	return $this->belongsTo('App\Models\Cv', 'cv_id', 'id');
    }

    public function company(){
    	return $this->belongsTo('App\Models\Company', 'company_id', 'id');
    }
}
