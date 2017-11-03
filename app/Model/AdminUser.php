<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
   
	protected $table = 'admin_user';
	protected $guarded = [];
	public $timestamps = false;

	public function roles()
	{
		return $this->belongsToMany('App\Model\Role','admin_user_role', 'admin_user_id', 'role_id');
		
	}


}
