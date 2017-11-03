@extends("common.admin")

@section("content") 
<div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 文章列表 </div>
                        <p class="page-header-description">  </p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                </div>

</div>

<div class="row-content am-cf">

    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">文章列表</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
               
                	<div class="widget-body  widget-body-lg am-fr">
					    <form action="" name="myform" method="post" style="display:none;">
			                {{csrf_field()}}
						</form>
	                    	<table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " name="myform" id="example-r">
								 
	                            <tr>
	                            	
	                                <th>文章标题</th>
	                                <th>缩略图</th>
	                                <th>文章描述</th>
	                                <th>作者</th>
	                                <th>时间</th>
	                                <th>查看次数</th>
	                                <th>操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	 @foreach ($article as $v)
		                            <tr class="gradeX">
		                            	<td>{{ $v->art_title }}</td>

		                            	<td>
		                            		<img src="{{ asset('upload/'.$v->art_thumb) }}" style="width:80px; height:80px;" class="tpl-table-line-img" alt="" >
		                            	</td>

		                                <td>{{ $v->art_description }}</td>
		                                <td>{{ $v->art_editor }}</td>
		                                <td>{{ $v->art_time }}</td>


		                                <td>{{ $v->art_view }}</td>
		                                <td>
		                                    <div class="tpl-table-black-operation">
		                                        <a href="javascript:;">
		                                            <i class="am-icon-pencil"></i> 编辑
		                                        </a>
		                                        
		                                        <a href="javascript:dodel({{ $v->id }});" class="tpl-table-black-operation-del" >

		                            	<i class="am-icon-trash" "></i> 删除
		                                        </a>
		                                    </div>

		                                </td>
		                            </tr>
								@endforeach
	                           
	                            <!-- more data -->
	                        </tbody>
	                         
	                    </table>
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
        form.action = '/admin/article/'+$id;
        form.submit();
    };
}
   

</script>
@endsection