<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Ad;

class IndexController extends Controller
{
	public function index()
	{
		$Ad = Ad::get();
		$list = Ad::select()->get();
		// dd($list);
    	return view('home.deal.index',compact('Ad'),['lists'=>$list]);
    }
}

