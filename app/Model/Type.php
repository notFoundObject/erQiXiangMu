<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
	protected $table = 'classify';
	protected $primarykey = 'id';

	public $timestamps = false;

	protected $guarded = [];

	// protected $fillable = [];

}
