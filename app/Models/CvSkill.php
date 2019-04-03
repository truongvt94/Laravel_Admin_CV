<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvSkill extends Model
{
    protected $fillable = [
    'cvs_id', 'skills_id', 'percent'
    ];

    protected $table = "cv_skills";

    public function cvs(){
    	return $this->belongsTo('App\Models\CV', 'cvs_id', 'id');
    }

    public function skill(){
    	return $this->belongsTo('App\Models\Skill', 'skills_id', 'id');
    }
}
