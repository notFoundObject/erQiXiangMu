<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
     protected $table = 'blog_article';
    
    //去除时间戳问题
    public $timestamps = false;
}
