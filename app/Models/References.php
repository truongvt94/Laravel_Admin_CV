<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class References extends Model
{
	const PAGINATE = 5;
    protected $fillable = [
    	'avatar', 'content', 'cvs_id'
    ];

    protected $table = "references";

    public function cvs(){
    	return $this->belongsTo('App\Models\CV', 'cvs_id', 'id');
    }
}
