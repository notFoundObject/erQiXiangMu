@extends('common.admin')

@section('content')
	 <!-- 内容区域 -->
        
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">角色添加</div>
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

                    <form action="{{url('/admin/role/')}}" method="post" class="am-form tpl-form-border-form tpl-form-border-br " enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">角色名 <span class="tpl-form-line-small-title">role_name</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" name='role_name' class="tpl-form-input" id="user-name" placeholder="请输入角色名">
                                <small id="nickname"> </small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="desc" class="am-u-sm-3 am-form-label">角色描述<span class="tpl-form-line-small-title">role_desc</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" name='role_desc' class="tpl-form-input" id="desc" placeholder="请输入角色描述">
                               
                            </div>
                        </div>
                        

                     <!--     <div class="am-form-group checkbox" >
                            <label for="cjgly" class="am-u-sm-3 am-form-label">
                                查看权限<span class="tpl-form-line-small-title">&nbsp;look_auth</span>
                            </label>
                            <div class="am-u-sm-9 checkbox">
                              <label>
                                <input type="checkbox" name="auth[]" value="查看账号管理" class="tpl-form-input">查看账号管理
                               
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label>
                                <input type="checkbox" name="auth[]" id="optionsRadios1" value="查看权限管理" class="tpl-form-input">查看权限管理
                              
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label>
                                <input type="checkbox" name="auth[]" id="optionsRadios1" value="查看角色管理" class="tpl-form-input">查看角色管理
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                <input type="checkbox" name="auth[]" id="optionsRadios1" value="查看广告管理" class="tpl-form-input">查看广告管理
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                <input type="checkbox" name="auth[]" id="optionsRadios1" value="查看商品管理" class="tpl-form-input">查看商品管理
                              </label>
                            </div>
                        </div> -->
           <!--                <div class="am-form-group checkbox" >
                            <label for="cjgly" class="am-u-sm-3 am-form-label">
                                操作权限<span class="tpl-form-line-small-title">&nbsp;look_auth</span>
                            </label>
                            <div class="am-u-sm-9 checkbox">
                              <label>
                                <input type="checkbox" name="auth[]" value="编辑" class="tpl-form-input">编辑
                               
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label>
                                <input type="checkbox" name="auth[]" id="optionsRadios1" value="添加" class="tpl-form-input">添加
                              
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label>
                                <input type="checkbox" name="auth[]" id="optionsRadios1" value="删除" class="tpl-form-input">删除
                              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div> -->

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