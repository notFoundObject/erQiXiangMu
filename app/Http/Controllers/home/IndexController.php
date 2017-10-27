<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;

class IndexController extends Controller
{
    //
	public function index()
	{
		$config = Config::first();
		
		return view('home.index.index',compact('config'));

	}
}
