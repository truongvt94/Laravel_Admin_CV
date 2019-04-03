<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvHitories extends Model
{
    protected $fillable = [
    'cvs_id', 'hitories_id', 'year_start', 'year_end', 'developer', 'description'
    ];

    protected $table = "cv_hitories";

    public function cvs(){
    	$this->belongsTo('App\Models\CV', 'cvs_id', 'id');
    }

    public function hitories(){
    	return $this->belongsTo('App\Models\Hitories', 'hitories_id', 'id');
    }
}
