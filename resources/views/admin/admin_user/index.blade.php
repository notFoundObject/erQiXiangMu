@extends("common.admin")

@section("content")   
 <div class="am-u-sm-12 am-u-md-12 am-u-lg-10">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl">用户</div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body  widget-body-lg am-fr">

            <table width="100%" class="am-table am-table-compact tpl-table-black " id="example-r">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nickname</th>
                       
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $v)
                    <tr class="gradeX">
                        
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->nickname }}</td>
                        
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="javascript:;">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a href="javascript:;" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 删除
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
   
@endsection  
