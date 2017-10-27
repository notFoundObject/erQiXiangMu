@extends('common.admin')
@section('content')
	 <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">管理员列表</div>
                            </div>  
                               @if (session('error'))
                                    <div class="alert alert-success" style="color:red;">
                                        {{ session('error') }}
                                    </div>
                                @endif  
                            <div class="widget-body  am-fr" ">
								<div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success">
                                                <span class="am-icon-plus"></span><a href="{{url('/admin/admin_user/create')}}" style="color:#ffffff">新增用户 <a></button>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="widget-body am-fr" style="margin-left:-200px;left:-200px">
                                    <form action="{{url('admin/admin_user')}}" method="get" id="myform" class="am-form tpl-form-border-form">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-1 am-form-label am-text-left">用户名 </label>
                                            <div class="am-u-sm-11">
                                                <input type="text" name="nickname" class="tpl-form-input am-margin-top-xs" id="user-name" placeholder="请输入用户名">
                                               
                                            </div>
                                        </div>
                                      <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-1 am-form-label am-text-left">权限</label>
                                            <div class="am-u-sm-11">
                                                <input type="text" name="auth" class="tpl-form-input am-margin-top-xs" id="user-name" placeholder="请输入权限">
                                                <small>请输入数字1-10。</small>
                                            </div>
                                        </div>
                                        <div class="am-form-group">
                                            <div class="am-u-sm-12 am-u-sm-push-3" style="left:80px">
                                                <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">查询</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>  
                             </div>
                       
							     <form action="" name="myform" method="post" style="display:none;">
                                      {{csrf_field()}}
                                      {{method_field('delete')}}          

                                 </form>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">

                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>用户头像</th>
                                                <th>用户名</th>
                                                <th>权限</th>
                                                <th>状态</th>
                                                <th>最后登入</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach ($users as $user)
                                            <tr class="gradeX">
                                                	<td>
                                                        {{$user->id}}                                              
                                                	</td>                                             
                                                <td>
                                                    <img src="{{asset('assets/admin/img/'.$user->photo )}}" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle">{{$user->nickname}}</td>
                                                <td class="am-text-middle">{{$user->auth}}</td>
                                                <td class="am-text-middle">                                        
                                                      <?= $user->status ? '已启用':'已禁用'?>
                                                </td>
                                                <td class="am-text-middle">{{$user->last_login_at}}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">  
                                                        <a href="{{url('/admin/admin_user/status/'.$user->id.'&'.$user->status)}}">
                                                            <i class="am-icon-pencil"></i><?= $user->status ? '禁用' :'启用' ?> 
                                                        </a>  
                                                        <a href="{{url('/admin/admin_user/'.$user->id.'/edit')}}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:dodel({{$user->id}});" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <!-- more data -->

                                        </tbody>
                                          
                                    </table>


                                    
                                      <table>
                                    <tbody>
                                        {!! $users->appends($where)->links() !!} 
                                    </tbody>
                                    
                                     </table>

                                </div>
                               
                            </div>
                          
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <script>
            function dodel($id)
            {
                if(confirm('你确定要删除吗'))
                {
                    var form = document.myform;
                    form.action = '/admin/admin_user/'+$id;
                    form.submit();
                }
            }


        </script>
@endsection