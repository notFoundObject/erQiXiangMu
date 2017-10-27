@extends('common.admin')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    .aa{
        margin-left:23px;
    }
</style>
<body>
        @if (session('msg'))
            <div style="color:#ddd;font-size:30px;">
                {{ session('msg') }}
            </div>
        @endif
        <form name="myform" action="" method="post" style="display:none">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        </form>
<div class="aa">
    <table width="1100" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>公司名</th>
                                            <th>广告名</th>
                                            <th>广告位置</th>
                                            <th>广告图片</th>
                                            <th>广告内容</th>
                                            <th>联系人</th>
                                            <th>联系人电话</th>
                                            <th>链接</th>
                                            <th>过期时间</th>
                                            <th>操作</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lists as $list)
                                        <tr>
                                            <td>{{$list->id}}</td>
                                            <td>{{$list->company_name}}</td>
                                            <td>{{$list->ad_name}}</td>
                                            <td>{{$list->ad_position}}</td>
                                            <td><img src="../upload/{{ $list->ad_picture }}" style="width:100px;height:30px;" alt=""></td>
                                            <td>{{$list->ad_content}}</td>
                                            <td>{{$list->contacts}}</td>
                                            <td>{{$list->contacts_phone}}</td>
                                            <td>{{$list->link}}</td>
                                            <td>{{$list->expire_time}}</td> 
                                            <td>
                                                <a href="{{ url('admin/Ad/'.$list->id.'/edit') }}" class="tpl-table-black-operation-del">
                                                    <i class="am-icon-trash"></i> 修改
                                                </a>&nbsp;&nbsp;&nbsp;
                                                <a href="javascript:doDel({{ $list->id }})" class="tpl-table-black-operation-del">
                                                    <i class="am-icon-trash"></i> 删除
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                        <!-- more data -->
                                    </tbody>
                                </table>
                                </div>
        <script>
            function doDel(id)
            {
                if(confirm('你确定要删除吗？')){
                    var form = document.myform;
                    form.action = 'Ad/'+id;
                    form.submit();
                }
            }
        </script>
</body>
</html>
                                
@endsection