<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
    'name', 'slug', 'type'
    ];

    public function cvSkills(){
    	$this->hasMany('App\Models\Cv', 'skill_id', 'id');
    }
}
