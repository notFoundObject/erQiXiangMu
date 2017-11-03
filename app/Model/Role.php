<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
	protected $guarded = [];
	public $timestamps = false; 

	public function admin_users()
	{
		return $this->belongsToMany('App\Model\AdminUser','admin_user_role', 'role_id', 'admin_user_id');
		
	}

	 public function auths()
    {
		//return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
        return $this->belongsToMany('App\Model\Auth','auth_role','role_id','auth_id');

    }
}
