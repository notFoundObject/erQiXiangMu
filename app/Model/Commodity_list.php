<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Commodity_list extends Model
{
    //
    protected $table = 'commodity_list';
    
    //去除时间戳问题
    public $timestamps = false;
}
