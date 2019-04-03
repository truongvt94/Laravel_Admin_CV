<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
    'name', 'slug', 'date_start', 'date_end', 'is_featured', 'cvs_id'
    ];

    protected $table = "portfolio";

    public function cvs(){
    	return $this->belongsTo('App\Models\CV', 'cvs_id', 'id');
    }
}
