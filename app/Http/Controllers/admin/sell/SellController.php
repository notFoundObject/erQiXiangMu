<?php

namespace App\Http\Controllers\admin\sell;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
class SellController extends Controller
{
    // public function index()
    // {
    // 	return view('admin.deal.user.sell');
    // }

    public function doShow()
	{
		$user = User::all();
		return view('admin.deal.user.sell',['users'=>$user]);
	}
}
