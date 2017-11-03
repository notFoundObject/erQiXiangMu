<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use APP\Mode\AdminUser;
use APP\Mode\Role;
use APP\Mode\Auth;
class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         $route = \Route::current()->getActionName();
         // dd($route);
        // "App\Http\Controllers\admin\AdminController@index";

         $info = session()->get('adminuser');
         $roles = $info->roles;
         $role = $roles[0];
         $auths = $role->auths;
         $auth = [];
        foreach($auths as $v)
        {
            $auth[] = $v->auth_name;
        }  
        // echo '<pre>';
        //  var_dump($route);
        //  echo '<br>';
        //     var_dump($auth);die;
         if(in_array($route,$auth))
         {
            return $next($request);
         }else{
           // return back()->with('error','你没有权限');
            return redirect('admin/noauth');
            
         }
    }
}

