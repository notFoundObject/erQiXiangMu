<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $table = 'auth';
	protected $guarded = [];
	public $timestamps = false;

    public function roles()
    {
		
       //return $this->belongsToMany('App\Model\Role','auth_role','auth_id','role_id');

    } 
}
