<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\AdminUser;
use Illuminate\Support\Facades\Validator;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\admin\Upload;
use App\Org\ImageSF;



class Admin_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $ob = DB::table('admin_user');
        $where = [];
       
        if($request->has('nickname'))
        {
            $nickname = $request->get('nickname');
            // dd($nickname);
            $ob->where('nickname','like','%'.$nickname.'%');
            $where['nickname'] = $nickname;
        }
         if($request->has('auth'))
        {
            $auth = $request->get('auth');
            $ob->where('auth','like','%'.$auth.'%');
            $where['auth'] = $auth;
        }
        //  if($request->has('all'))
        // {
        //     $all = $request->get('all');
        //     $ob->where('auth','like','%%');
        //     $where['auth'] = $auth;
        // }

         $users = $ob->paginate(3);
        return view('admin.admin_user.users',['users'=>$users,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_user.add');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $path = '';
        if($request->hasFile('photo'))
             {
                $file = $request->file('photo');
                if($file->isValid())
                {
                    $filename = $file->getClientOriginalName();
                    //dd($filename);
                    $ext = $file -> getClientOriginalExtension(); 
                     $path = time().rand(100,999).'.'.$ext;                 
                     $file->move('./uploads/tmp/',$path); 
                      
                     if($file->getError())
                     {
                        return back()->with('errors','上传失败');
                     }
                     $img = new ImageSF();
                    $img->open("./uploads/tmp/".$path)->thumb(80,80)->save("./asset/admin/img/".$path);
                 }
             }

        $input = $request->except('_token','photo');
        if($path == '')  
        {
            $input['photo'] = 'default.jpg';
        }else{
            $input['photo'] = $path;
        }      
        $rules = [
            'nickname' => 'required | between:4,18',
            'pwd' => 'required | between:6,18',     
        ];
        $mess = [
            'nickname.required'=> '用户名必须输入',
            'nickname.between'=> '用户名在4-18位之间',
            'pwd.required'=> '密码必须输入',
            'repwd.required'=>'再次密码必须输入',
            'pwd.between'=>'密码在6-18位之间'
        ];
        $validator = Validator::make($input, $rules, $mess);
         if($validator->passes())
         {
              if($path == '')  
                {
                    $input['photo'] = 'default.jpg';
                }else{
                    $input['photo'] = $path;
                }
             $input = $request->except('repwd','_token','photo');
             
              $input['pwd'] = encrypt($input['pwd']);
                $res = AdminUser::create($input);
                if($res )
                {
                   return redirect('admin/admin_user');
               }else{
                   return back()->with('errors','用户添加失败');
               }
         }else{
            return back()->withErrors($validator);
         }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$info = DB::table('admin_user')->where('id',$id)->first();
        //$info = AdminUser::where('id',$id)->first();
        $info = AdminUser::find($id);
        return view('admin/admin_user/edit',['user'=>$info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $path = '';
        if($request->hasFile('photo'))
         {
            $file = $request->file('photo');
            if($file->isValid())
            {
                $filename = $file->getClientOriginalName();
                //dd($filename);
                $ext = $file -> getClientOriginalExtension(); 
                 $path = time().rand(100,999).'.'.$ext;                 
                 $aa = $file->move('./uploads/tmp/',$path); 
                  
                 if($file->getError())
                 {
                    return back()->with('errors','上传失败');
                 }
                  $img = new ImageSF();
                 $img->open("./uploads/tmp/".$path)->thumb(80,80)->save("./asset/admin/img/".$path);
             }
         }
        
         if($path != '')  
        {
            $info['photo'] = $path;
        }      
        //dd($info);
        $info = $request->except('_token','_method','repwd','photo');
        $info['pwd'] = encrypt($info['pwd']);
        //$res = DB::table('admin_user')->where('id',$id)->update($info);
        $res = AdminUser::where('id',$id)->update($info);
        if($res)
        {
            return redirect('/admin/admin_user')->with('error','更新成功');
        }else{
            return redirect('/admin/admin_user/'.$id.'/edit')->with('error','更新失败');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        //$res = DB::table('admin_user')->where('id',$id)->delete();
        $res = AdminUser::where('id',$id)->delete();
        if($res)
        {
            return redirect('/admin/admin_user')->with('error','删除成功');
        }else{
            return redirect('admin/admin_user')->with('error','删除失败');
        }
    }
    public function status($id,$status)
    {
        // $status = $request->get();
        if($status)
        {
            $st = AdminUser::find($id);
            $st->status = 0;
            $st->save();
            return back();
        }else{
            $st = AdminUser::find($id);
            $st->status = 1;
            $st->save();
            return back();
        }
        
    }
}
