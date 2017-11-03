@extends('common.admin')
@section('content')
	 
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">角色修改</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                 @if (session('error'))
                        <div class="alert alert-success" style="color:red;">
                            {{ session('error') }}
                        </div>
                    @endif  
                <div class="widget-body am-fr">

                    <form action="{{url('/admin/role/'.$role->id)}}" method="post" class="am-form tpl-form-border-form tpl-form-border-br" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <div class="am-form-group">
                            <label for="role_name" class="am-u-sm-3 am-form-label">角色名 <span class="tpl-form-line-small-title">role_name</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" name='role_name' class="tpl-form-input" id="role_name" placeholder="请输入角色名" value="{{$role->role_name}}">
                                <small id="role_name"> </small>
                            </div>
                        </div>
                         <div class="am-form-group">
                            <label for="role_desc" class="am-u-sm-3 am-form-label">角色描述<span class="tpl-form-line-small-title">role_desc</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" name='role_desc' class="tpl-form-input" id="user-name" placeholder="请输入角色描述" value="{{$role->role_desc}}">
                                
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