<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\AdminUser;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Crypt;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function dologin(Request $request)
    {
        $name = $request->input('nickname');
       
        //获取session中的验证码
        $mycode = session('mycode');
        // 判断用户输入的验证码和session中的验证码是否一致
        if($mycode != $request->input('mycode')){
            return back()->with('msg', '登录失败：验证码错误！');
        }
        
       $pwd =  $request->input('pwd');
       $info = AdminUser::where('nickname',$name)->first();
       $infopwd = $info->pwd;
       //dd(strlen($infopwd));
       $infopwd =  strlen($infopwd) > 16 ? decrypt($infopwd):$infopwd;
        
       //var_dump($pwd.'-'.$infopwd);die;
        if($info)
        {
            if($infopwd == $pwd)
            {
                session(['adminuser' => $info]);
                 return redirect('admin');
            }else{
                return back()->with('msg', '登录失败:密码错误');
            } 

        }else{
            return back()->with('msg', '登录失败:用户名错误');
        }

    }

    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性 
        $builder = new CaptchaBuilder; 
        //可以设置图片宽高及字体 
        $builder->build($width = 200, $height = 50, $font = null); 
        //获取验证码的内容 
        $phrase = $builder->getPhrase(); 
        //把内容存入session 
        session()->flash('mycode', $phrase);
        //生成图片 
        return response($builder->output())->header('Content-type','image/jpeg');
    }

    public function exit(){
        //return 12314;
        session()->flush();
        return redirect('admin/login');
    }
}
