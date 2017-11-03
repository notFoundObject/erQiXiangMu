@extends('common.admin')

@section('content')
	 <!-- 内容区域 -->
        
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">角色授权</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="widget-body am-fr">

                                <form action="{{url('/admin/doRoleAuth/'.$role->id)}}" method="post" class="am-form tpl-form-border-form tpl-form-border-br " enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="am-form-group">
                                        <label for="role_name" class="am-u-sm-3 am-form-label">角色名 <span class="tpl-form-line-small-title">role_name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name='role_name' class="tpl-form-input" id="role_name" value="{{$role->role_name}}" disabled>
                                            
                                        </div>
                                    </div>
                                   
                                    <div class="am-form-group checkbox" >
                                        <label for="role" class="am-u-sm-3 am-form-label">
                                            权限<span class="tpl-form-line-small-title"> auth_desc</span>
                                        </label>
                                        
                                        <div class="am-u-sm-9 checkbox">
                                         @foreach ($auths as $auth)
                                            
                                                
                                           
                                          <label class="checkbox-inline">
                                            <input type="checkbox" name="auth_desc[]" id="auth" value="{{$auth->auth_desc}}" class="tpl-form-input"  >
                                           {{$auth->auth_desc}}
                                          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            
                                         @endforeach
                                        </div> 
                                    </div>
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       


@endsection