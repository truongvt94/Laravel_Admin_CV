<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvSkill extends Model
{
    protected $fillable = [
    'cv_id', 'skill_id', 'percent'
    ];

    protected $table = "cv_skill";

    public function cv(){
    	return $this->belongsTo('App\Models\Cv', 'cv_id', 'id');
    }

    public function skill(){
    	return $this->belongsTo('App\Models\Skill', 'skill_id', 'id');
    }
}
