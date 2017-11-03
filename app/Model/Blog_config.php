<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog_config extends Model
{
    //
    protected $table = 'blog_config';
    
    //去除时间戳问题
    public $timestamps = false;
}
