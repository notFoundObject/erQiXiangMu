<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AdminUser;
use DB;
class Admin_UserController extends Controller
{
    //
    public function index()
    {
    	$ob = DB::table('admin_user');
    	$list = $ob->paginate();
    	//dd($list);
        return view('admin.admin_user.index', ['users'=>$list]);
    	//return view('admin.admin_user.index',compact('adminuser'));
    }
}
