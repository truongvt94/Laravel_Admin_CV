<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
    use SoftDeletes;

    const PAGINATE = 5;

    protected $fillable = [
    'name', 'slug', 'phone', 'email', 'date', 'facebook', 'skype', 'chartwork', 'address', 'sumary', 'images', 'avatar', 'developer', 'professional_skill_des', 'personal_skill_des', 'work_experience_des', 'education_des', 'user_id'
    ];

    protected $table = "cvs";

    public function references(){
    	return $this->hasMany('App\Models\Reference', 'cv_id', 'id');
    }

    public function portfolio(){
    	return $this->hasMany('App\Models\Portfolio', 'cv_id', 'id');
    }

    public function cv_skill(){
    	return $this->hasMany('App\Models\CvSkill', 'cv_id', 'id');
    }

    public function education(){
    	return $this->hasMany('App\Models\Education', 'cv_id', 'id');
    }

    public function workExperince(){
        return $this->hasMany('App\Models\WorkExperince', 'cv_id', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
