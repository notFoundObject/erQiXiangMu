<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AdminUser;
use App\Model\Role;
use App\Model\Auth;
use App\Model\Auth_role;
use App\Model\Admin_user_role;
use DB;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roles = Role::paginate(5);
       

        return view('admin.role.role',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = $request->except('_token');
        $res = Role::create($role);
        if($res)
        {
            return redirect('admin/role')->with('error','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        $role = Role::find($id);
        return view('admin.role.edit',['role'=>$role]);
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
        $role = $request->except('_token','_method');
        $res = Role::where('id',$id)->update($role);
        if($res)
        {
            return redirect('/admin/role')->with('error','更新成功');
        }else{
            return back()->with('error','更新失败');
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
        $role = Role::find($id);
        $res = $role->delete();
        if($res)
        {
            return redirect('/admin/role')->with('error','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    public function showRoleAuth($id)
    {
        $role = Role::find($id);
        $auths = Auth::all();
        $old_auths = $role->auths;
        $old_auth_desc = [];
        foreach($old_auths as $v)
        {
            
            $old_auth_desc[] =  $v->auth_desc;
        }
        // dd($old_auth_desc);
        return view('admin.role.showRoleAuth',['role'=>$role,'auths'=>$auths,'auth_desc'=> $old_auth_desc]);
    }

    public function doRoleAuth(Request $request,$id)
    {
         //获取传过来的auth_desc
         $auth_descs = $request->except('_token');
         $ids = []; 
         $ids['role_id'] = $id;
         //遍历auth_desc
        Auth_role::where('role_id',$id)->delete();
        foreach ($auth_descs as $v) 
        {        
            //dd($v);
            for ($i=0; $i < count($v); $i++)
             {  //根据auth_desc查出对应的auth的id
                $auth = Auth::where('auth_desc',$v[$i])->first();
                //把每个auth_id存进数组
               $ids['auth_id'] =$auth->id;
               $res = Auth_role::create($ids); 
            }  
        }  

        if($res)
        {
            return redirect('/admin/role')->with('error','授权成功');
         }else{
            return back()->with('error','授权失败');
        }


    }
}