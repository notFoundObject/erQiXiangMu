@extends('common.admin')
@section('content')

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title  am-cf">权限列表</div>
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
                                    <span class="am-icon-plus"></span><a href="{{url('/admin/auth/create')}}" style="color:#ffffff">新增权限 <a></button>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="widget-body am-fr" style="margin-left:-200px;left:-200px">
                        <form action="{{url('admin/auth')}}" method="get" id="myform" class="am-form tpl-form-border-form">
                            <div class="am-form-group">
                                <label for="auth_desc" class="am-u-sm-1 am-form-label am-text-left">权限描述 </label>
                                <div class="am-u-sm-11">
                                    <input type="text" name="auth_desc" class="tpl-form-input am-margin-top-xs" id="auth_desc" placeholder="请输入权限描述名">
                                   
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
                                    <th>权限id</th>
                                    <th>权限名称</th>
                                    <th>权限描述</th>
                                    <th>操作选项</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($auths as $auth)
                                <tr class="gradeX">
                                    	<td>
                                            {{$auth->id}}                               
                                        </td>
                                    <td class="am-text-middle">{{$auth->auth_name}}</td>
                                    <td class="am-text-middle">{{$auth->auth_desc}}</td>        
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">  
                                            <a href="{{url('/admin/auth/'.$auth->id.'/edit')}}">
                                                <i class="am-icon-pencil"></i> 编辑
                                            </a>
                                            <a href="javascript:dodel({{$auth->id}});" class="tpl-table-black-operation-del">
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
                            {!! $auths->links() !!} 
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
             $.post("{{ url('/admin/auth/')}}/"+$id,{'_method':'delete','_token':"{{csrf_token()}}"},function(data){
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