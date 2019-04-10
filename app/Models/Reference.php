<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
	const PAGINATE = 5;
    protected $fillable = [
    	'avatar', 'content', 'cv_id'
    ];
    
    public function cv(){
    	return $this->belongsTo('App\Models\Cv', 'cv_id', 'id');
    }
}
