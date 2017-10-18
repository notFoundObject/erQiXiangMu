<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use DB;


class UserController extends Controller
{
    //
	public function index()
	{
		$ob = User::all();
		return view('data',['users'=>$ob]);
	}
}
