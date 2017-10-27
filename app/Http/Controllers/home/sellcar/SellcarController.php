<?php

namespace App\Http\Controllers\home\sellcar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellcarController extends Controller
{
    public function index()
    {
    	return view('home.deal.sell');
    }
}
