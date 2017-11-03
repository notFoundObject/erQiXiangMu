<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;

class ConfigController extends Controller
{
    //
   public function index()
    {
    	$config = Config::first();
         //dd($config);
    	//return view('admin.config.index');
        return view('admin.config.index',compact('config'));
    }

    

    //配置修改判断
    public function store (Request $request)
    {
    	// dd($request->all());
    	$config = Config::first();
        $data = $request->except('_token', '_method','query_string');
         // dd($data);
        
         
		if (!empty($request['nickname'])) {
    		$data['nickname'] = $request['nickname'];
    	}

    	if(!empty($request['keywork'])) {
    		$data['keywork'] = $request['keywork'];
    	}

    	if(!empty($request['copyright'])) {
    		$data['copyright'] = $request['copyright'];
    	}

    	if(!empty($request['ascription'])) {
    		$data['ascription'] = $request['ascription'];
    	}

    	


    	     //图片上传
        
        // //判断请求对象中是否有需要上传的文件
        if ($request->hasFile('logo')) {
            //判断文件是否有效
            if ($request->file('logo')->isValid()){
               
                //生成上传文件对象
                $file = $request->file('logo');
              
                //获取后缀名
                $ext = $file->getClientOriginalExtension();
              
                // 随机生成新文件名
                $picname = time().rand(1000,9999).'.'.$ext;
              
                // 另存为
                $file->move('./upload', $picname);
                

                if($file->getError() > 0) {
                    return back()->with('msg', '上传失败');
                } else {
                    $data['logo'] = $picname;
                }
            }   
        
        }

   		$data['on_off'] = $request['on_off'];

    	$site = config::where('id', 1)->update($data);
        
    	if ($site) {
    		//没有返回失败信息
    		return back()->with('msg', '修改成功');
    	} else {
    		return back()->with('msg', '修改失败');
    	}	
	}
          
       
       

       
       
  
}
