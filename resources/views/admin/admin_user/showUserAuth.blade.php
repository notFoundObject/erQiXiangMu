@extends('common.admin')

@section('content')
	 <!-- 内容区域 -->
        
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户授权</div>
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

                                <form action="{{url('/admin/doUserAuth/'.$info->id)}}" method="post" class="am-form tpl-form-border-form tpl-form-border-br " enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">nickname</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name='nickname' class="tpl-form-input" id="user-name" value="{{$info->nickname}}" disabled>
                                            
                                        </div>
                                    </div>
                                   
                                    <div class="am-form-group radio" >
                                        <label for="role" class="am-u-sm-3 am-form-label">
                                            权限<span class="tpl-form-line-small-title">role</span>
                                        </label>
                                        <div class="am-u-sm-9 radio">
                                         @foreach($roles as $role)
                                          <label class="radio-inline">
                                            <input type="radio" name="role" id="role" value="{{$role->role_name}}" class="tpl-form-input" <?= $role->role_name == $info->role? 'checked':''?>>
                                           {{$role->role_name}}
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