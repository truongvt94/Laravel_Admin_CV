<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
    'name', 'type'
    ];

    protected $table = "skills";

    public function cv_skill(){
    	$this->hasMany('App\Models\CV', 'skills_id', 'id');
    }
}
