<?php

namespace App\Http\Controllers\admin\type;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Type;
use DB; 

class TypeAtController extends Controller
{
    //
    public function index(Request $request)
    {
		$where = [];
		$ob = DB::table('classify');
		// $number = 5;
		//判断是否有搜索
		if($request->has('query')){
			$query = $request->input('query');
			$where['query'] = $query;
			$ob->where('brand','like','%'.$query.'%');
		}
		// $list = DB::table('classify')->get();
		$type = $ob->where('er_id',1)->paginate(5);
		// dd($type);
		return view('admin.type.type_at',['type'=>$type,'where'=>$where]);
	}


	public function create()
	{
		// return 'this is love';
		return view('admin.type.type_create_a'); 
	}


	public function store(Request $request){
		//判断是否为空
		if(!$request->brand){
			return redirect('admin/type_at/create')->with('msg','车型不能为空');
		}
		// echo 1111;
		//判断是否重复

		$res = Type::where('brand','=',$request->brand)->first();

		// echo 12111111;

		if(count($res)){
			return redirect('admin/type_at/create')->with('msg','品牌已使用');
		}


		// echo 2222;
		$brand = $request->brand;
		//文件上传
		if($request->hasFile('photo')){
	        $file = $request->file('photo');

		        if ($file->isValid()) {


		        	if($file->getError()>0){
		               return redirect('admin/type_at/create')->with('msg','上传失败');
		            }

		            //获取后缀
		            $ext = $file->getClientOriginalExtension();
		            $picname = time().rand(1000,9999).'.'.$ext;
		            $file->move('./uploads/',$picname);


		           	$er_id = 1;
		            $arr = ['photo' => $picname, 'brand' => $brand,'er_id'=>$er_id];
		            $res = Type::insert($arr);
		            if($res){
	            		return redirect('admin/type_at')->with('msg','添加成功11');
	            	}else{ 
	            		return redirect('admin/type_at/create')->with('msg','上传失败');
	            	}
	         
		       
		        // });
		        }
	            
	    	}

		}
}
