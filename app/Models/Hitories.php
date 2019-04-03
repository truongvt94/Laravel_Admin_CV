<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hitories extends Model
{
    protected $fillable = [
    'name', 'type'
    ];

    protected $table = "hitories";

    public function cv_hitories(){
    	return $this->belongsTo('App\Models\CvHitories', 'hitories_id', 'id');
    }
}
