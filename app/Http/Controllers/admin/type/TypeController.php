<?php


namespace App\Http\Controllers\admin\type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Type;
use DB;
// use 表单验证
use Validator;

Class TypeController extends Controller
{



	public function index(Request $request)
	{
		$where = [];
		$ob = DB::table('classify');
		// $number = 5;
		//判断是否有搜索
		if($request->has('query')){
			// return 'this is love';
			$query = $request->input('query');
			$where['query'] = $query;
			$ob->where('brand','like','%'.$query.'%');
			// dd($ob);
		}
		// $list = DB::table('classify')->get();
		$type = $ob->where('yi_id',0)->paginate(5);
		// dd($type);
		return view('admin.type.type',['type'=>$type,'where'=>$where]);

		
		
	}

	public function create()
	{
		// return 'this is love';
		return view('admin.type.type_create');
	}

	
	public function store(Request $request){
		//判断是否为空
		// if(!$request->brand){
		// 	return redirect('admin/type/create')->with('msg','品牌不能为空');
		// }
		// 表单验证
		// return 'this is lvoe';
		$rules = [
			'brand'=>'required|between:1,13',
			'photo'=>'file|image',
			'show'=>'required|between:1,1'
		];

		$message = [
			'brand.required'=>'品牌不能为空',
			'brand.between'=>'必须在2~20位之间',
			'photo.file'=>'文件上传时出错',
			'photo.image'=>'文件必须是图片类型'
			];

		$validator = Validator::make($request->all(), $rules,$message);


		//表单出错时
        if ($validator->fails()) {
            return redirect('admin/type/create')
                        ->withErrors($validator)
                        ->withInput();
        }

		// echo 1111;
		//判断是否重复

		$res = Type::where('brand','=',$request->brand)->first();

		// echo 12111111;

		if(count($res)){
			return redirect('admin/type/create')->with('msg','品牌已使用');
		}


		// echo 2222;
		$brand = $request->brand;
		//文件上传
		if($request->hasFile('photo')){ 
	        $file = $request->file('photo');

		        if ($file->isValid()) {


		        	if($file->getError()>0){
		               return redirect('admin/type/create')->with('msg','上传失败');
		            }

		            //获取后缀
		            $ext = $file->getClientOriginalExtension();
		            $picname = time().rand(1000,9999).'.'.$ext;
		            $file->move('./uploads/',$picname);
		            
		           
		            $arr = ['photo' => $picname, 'brand' => $brand];
		          
		            $res = Type::insert($arr);
		            if($res){
	            		return redirect('admin/type')->with('msg','添加成功');
	            	}else{
	            		// 如果失败删除图片文件
	            		$file = unlink("./uploads/{$picname}");
	            		return redirect('admin/type/create')->with('msg','上传失败');
	            	}
	         
	       
	        // });
	        }
            
    	}

	}


	public function show($id)
	{
		// $parent = Type::where('id',$id)->first();//返回出来的东西特么看不懂  等于 
		$parent = Type::find($id);
		// dd($parent);


		$type = Type::where('yi_id',$id)->paginate(5);
		return view('admin.type.type_show',['type'=>$type,'parent'=>$parent,'id'=>$id]);
	}



	public function add(Request $request)
	{
		// dd($request->all());
		if($request->has('res')){
			$arr = ['yi_id'=>$request->yi_id,'brand'=>$request->res];
			$res = Type::insert($arr);
			if($res){
				return 1;
			}	
		}else{
			return 2;
		}
		// return 1;
	}



	public function update(Request $request)
	{


		$type = new Type();
		$result = $type->where('id',$request->id)->update(['brand'=>$request->str]);


		if($result){
			return 1;
		}else{
			return 2;
		}
		
	}


	public function destroy(Request $request)
	{
		$type = new Type();
		$result = $type->destroy($request->id);

		if($result){
			return 1;
		}else{
			return 2;
		}
		// return 1;
	}
}