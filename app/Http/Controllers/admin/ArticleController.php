<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;
class ArticleController extends Controller
{
    

    //文章列表页
    public function index()
    {
        $article = Article::get();
        //dd($article);
        return view('admin.article.list',compact('article'));
    }

   
    public function create()
    {

       //return view('admin.article.add');
        return 1;
    
    }

   //添加文章处理操作
    public function store(Request $request)
    {
        //dd($request);
        
       // $input = $request->except('_token', '_method','query_string');
       //dd($input);
       //
        // //判断请求对象中是否有需要上传的文件
        if ($request->hasFile('art_thumb')) {
            //判断文件是否有效
            if ($request->file('art_thumb')->isValid()){
               
                //生成上传文件对象
                $file = $request->file('art_thumb');
              
                //获取后缀名
                $ext = $file->getClientOriginalExtension();
              
                // 随机生成新文件名
                $picname = time().rand(1000,9999).'.'.$ext;
              
                // 另存为
                $file->move('./upload', $picname);
                

                if($file->getError() > 0) {
                    return back()->with('msg', '上传失败');
                } else {
                    $data['art_thumb'] = $picname;

                }
            }   
        }
        
        
      

        $input = $request->except('_token', '_method','query_string');
        
        $input['art_thumb']= $picname;
        
        //dd($input);
        
        $article = Article::insert($input);
        //dd($article);
        
        if($article){

            return redirect('admin/article')->with('msg', '添加成功');
        }else{
            return back()->with('msg', '添加失败');
        }
    }
    
    // 文章添加显示页面
    public function show($id)
    {
        
        return view('admin.article.add');
        //return 3;
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
        $article = \DB::table('blog_article')->delete($id);
    	return redirect('admin/article');
    }
}
