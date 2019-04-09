<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const PAGINATE = 5;

    
    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const HR = 3;
    const MEMBER = 4;

    protected $fillable = [
    'name', 'email', 'password', 'slug', 'phone', 'email_verified_at', 'password_verified_at', 'avatar', 'type', 'date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    'email_verified_at' => 'string',
    'password_verified_at' => 'string',
    ];

    public $timestamps = true;

    protected $softDelete = true;

    protected $table = "users";

    public function cvs(){
        return $this->hasMany('App\Models\CV', 'user_id', 'id');
    }
}
