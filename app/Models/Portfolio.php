<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	const PAGINATE = 5;
    protected $fillable = [
    'name', 'slug', 'date_start', 'date_end', 'is_feature', 'cv_id'
    ];

    public function cv(){
    	return $this->belongsTo('App\Models\Cv', 'cv_id', 'id');
    }
}
