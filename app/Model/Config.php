<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //查询configuration配置表
    
    protected $table = 'configuration';
    
    //去除时间戳问题
    public $timestamps = false;
}
