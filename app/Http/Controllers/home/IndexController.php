<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\Commodity_list;
use App\Model\Article;

class IndexController extends Controller
{
    //
	public function index()
	{

		$config = Config::first();
		//dd($config);
		$commodity = Commodity_list::all();
		$article = Article::all();
		//dd($article);
		return view('home.index.index',compact('config','commodity','article'));
		

	}
	// public function indexxx()
	// {

	// 	$commodity = Commodity_list::all();
	// 	return view('home.index.index',compact('commodity'));
		

	// }
}
