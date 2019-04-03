<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CVS extends Model
{
    protected $fillable = [
    'name', 'slug', 'phone', 'email', 'date', 'facebook', 'skype', 'chartwork', 'address', 'sumary', 'images', 'avatar', 'developer', 'professional_skill_des', 'personal_skill_des', 'work_experience_des', 'education_des', 'user_id'
    ];

    protected $table = "cvs";

    public function references(){
    	return $this->hasMany('App\Models\References', 'cvs_id', 'id');
    }

    public function portfolio(){
    	return $this->hasMany('App\Models\Portfolio', 'cvs_id', 'id');
    }

    public function cv_skill(){
    	return $this->hasMany('App\Models\CvSkill', 'cvs_id', 'id');
    }

    public function cv_hitories(){
    	return $this->hasMany('App\Models\CvHitories', 'cvs_id', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
