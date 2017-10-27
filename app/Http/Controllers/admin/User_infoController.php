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


class user_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // $user = AdminUser::find(1);
        // foreach ($user->roles as $role) {
        //     dd($user);
        // }
      
        $ob = DB::table('user_info');
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
         if($request->has('all'))
        {
            $all = $request->get('all');
            $ob->where('auth','like','%%');
            $where['auth'] = $auth;
        }
         $users = $ob->paginate(3);
        return view('admin.user_info.users',['users'=>$users,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_info.add');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '';
        if($request->hasFile('photo'))
             {
                $file = $request->file('photo');
                if($file->isValid())
                {
                    $filename = $file->getClientOriginalName();
                    //dd($filename);
                    $ext = $file -> getClientOriginalExtension(); 
                     $path = time().rand(100,999).'.'.$ext;                 
                     $file->move("./uploads/tmp/".$path); 
                      
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
            'nickname' => 'required | between:6,18',
            'pwd' => 'required | between:6,18',     
        ];
        $mess = [
            'nickname.required'=> '用户名必须输入',
            'nickname.between'=> '用户名在6-18位之间',
            'pwd.required'=> '密码必须输入',
            'repwd.required'=>'再次密码必须输入',
            'pwd.between'=>'密码在6-18位之间'
        ];
        $validator = Validator::make($input, $rules, $mess);
         if($validator->passes())
         {
            
            $input = $request->except('repwd','_token','photo');
                if($path == '')  
                {
                    $input['photo'] = 'default.jpg';
                }else{
                    $input['photo'] = $path;
                } 
                $input['pwd'] = encrypt($input['pwd']); 
             $res = DB::table('user_info')->insertGetId($input);
                if($res )
                {
                   return redirect('admin/user_info');
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
        $info = DB::table('user_info')->where('id',$id)->first();
        return view('admin/user_info/edit',['user'=>$info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $path = '';
        if($request->hasFile('photo'))
         {
            $file = $request->file('photo');
            if($file->isValid())
            {
                $filename = $file->getClientOriginalName();
                //dd($filename);
                $ext = $file -> getClientOriginalExtension(); 
                 $path = time().rand(100,999).'.'.$ext;                 
                $file->move("./uploads/tmp/",$path); 
                  
                 if($file->getError())
                 {
                    return back()->with('errors','上传失败');
                 }
                   $img = new ImageSF();
                    $img->open("./uploads/tmp/".$path)->thumb(80,80)->save("./asset/admin/img/".$path);
             }
         }
        $info = $request->except('_token','_method','repwd','photo');
        if($path == '')  
        {
            $info['photo'] = 'default.jpg';
        }else{
            $info['photo'] = $path;
        }  
        //dd($info);
        $info['pwd'] = encrypt($info['pwd']);
        $res = DB::table('user_info')->where('id',$id)->update($info);
        if($res)
        {
            return redirect('/admin/user_info')->with('error','更新成功');
        }else{
            return redirect('/admin/user_info/'.$id.'/edit')->with('error','更新失败');
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
        $res = DB::table('user_info')->where('id',$id)->delete();
        if($res)
        {
            return redirect('/admin/user_info')->with('error','删除成功');
        }else{
            return redirect('admin/user_info')->with('error','删除失败');
        }
    }
}
