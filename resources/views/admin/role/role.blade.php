@extends('common.admin')
@section('content')
	 
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title  am-cf">角色列表</div>
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
                                    <span class="am-icon-plus"></span><a href="{{url('/admin/role/create')}}" style="color:#ffffff">新增角色 <a></button>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="widget-body am-fr" style="margin-left:-200px;left:-200px">
                   <!--      <form action="{{url('admin/admin_user')}}" method="get" id="myform" class="am-form tpl-form-border-form">
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-1 am-form-label am-text-left">角色名 </label>
                                <div class="am-u-sm-11">
                                    <input type="text" name="nickname" class="tpl-form-input am-margin-top-xs" id="user-name" placeholder="请输入角色名">
                                   
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
                        </form> -->
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
                                    <th>角色id</th>
                                    <th>角色名称</th>
                                    <th>角色描述</th>
                                    <th>操作选项</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($roles as $role)
                                <tr class="gradeX">
                                    	<td>
                                            {{$role->id}}                               
                                        </td>
                                    <td class="am-text-middle">{{$role->role_name}}</td>
                                    <td class="am-text-middle">{{$role->role_desc}}</td>        
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">  
                                            <a href="{{url('/admin/role/'.$role->id.'/edit')}}">
                                                <i class="am-icon-pencil"></i> 编辑
                                            </a>
                                            <a href="{{url('/admin/showRoleAuth/'.$role->id)}}">
                                                <i class="am-icon-pencil"></i> 授权
                                            </a>
                                            <a href="javascript:dodel({{$role->id}});" class="tpl-table-black-operation-del">
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
                                {!! $roles->links() !!} 
                            </tbody>
                         </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
        
        <script>
            // function dodel($id)
            // {
            //     if(confirm('你确定要删除吗'))
            //     {
            //         var form = document.myform;
            //         form.action = '/admin/admin_user/'+$id;
            //         form.submit();
            //     }
            // }
            function dodel($id){

                layer.confirm('你确定要删除吗？', {
                  time:0,
                  btn: ['确认', '取消']}
                  ,function(){
                     $.post("{{ url('/admin/role/')}}/"+$id,{'_method':'delete','_token':"{{csrf_token()}}"},function(data){
                            if(data = 1)
                            {
                                location.href = location.href;
                                layer.msg('删除成功', {icon: 6});
                            }else{
                                location.href = location.href;
                                layer.msg('删除失败', {icon: 6});
                            }  
                     });  
                });
            }
        </script>
@endsection