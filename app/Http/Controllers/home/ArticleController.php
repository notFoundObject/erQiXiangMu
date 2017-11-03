<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\Article;
class ArticleController extends Controller
{
    //
      //显示列表
    public function index()
    {
    	
        $config = Config::first();
        $article = Article::all();

		return view('home.article.list',compact('config','article'));
        
    }
    //显示新闻媒体
    public function journalism()
    {
    	$config = Config::first();
        $article = Article::all();
       return view('home.article.show',compact('config','article'));
        
    
    }
    //显示公告
    public function notice()
    {
    	$config = Config::first();
        $article = Article::all();
       return view('home.article.notice',compact('config','article'));
        
    
    }
   
    public function create()
    {

       //return view('admin.article.add');
        return 1;
    
    }

   //添加文章处理操作
    public function store(Request $request)
    {
    	 return 2;
    }
    
    // 文章添加显示页面
    public function show($id)
    {
        
        
        return 3;
    }

   
    public function edit($id)
    {
        //
        return 4;
    }

   
    public function update(Request $request, $id)
    {
        //
        return 5;
    }
 

    
    public function destroy($id)
    {
        
    	return 6;
    }
}


