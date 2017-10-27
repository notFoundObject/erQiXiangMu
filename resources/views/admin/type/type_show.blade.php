@extends('common.admin')

@section('content')


            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                             
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">
                                    <button type="button" onclick="redirect(1)" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-Car"></span>品牌列表</button> &nbsp > {{ $parent->brand }}
                                    
                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" onclick="typeAdd()" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增车系</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">所有品牌</option>
              <option value="option2">IT业界</option>
              <option value="option3">数码产品</option>
              <option value="option3">笔记本电脑</option>
              <option value="option3">平板电脑</option>
              <option value="option3">只能手机</option>
              <option value="option3">超极本</option>
            </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                <form action="{{ url('admin/type') }}" method="get">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <!-- {{ csrf_field() }} -->
                                        <input type="text" name="query" class="am-form-field" placeholder="品牌">
                                        <span class="am-input-group-btn"><button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                         </span>
                                    
                                    </div>
                                </form>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                
                                                <th>车系名</th>
                                                <th>查看</th>
                                                <th>编辑</th>
                                                <th>删除</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_tr">
                                         @foreach($type as $v)
                                            <tr class="gradeX"><td class="am-text-middle" onclick="alert('我爱她');">{{ $v->brand }}</td>
                                                <td class="am-text-middle" style="width: 300px">
                                                <div class="tpl-table-list-select" style="float:left;">
                                                     <select data-am-selected="{btnSize: 'sm'}">
                                                      <option value="option1">年款</option>
                                                      <option value="option2">IT业界</option>
                                                      <option value="option3">数码产品</option>
                                                      <option value="option3">笔记本电脑</option>
                                                      <option value="option3">平板电脑</option>
                                                      <option value="option3">只能手机</option>
                                                      <option value="option3">超极本</option>
                                                    </select>
                                                    </div>
                                                </td>
                                                <td class="am-text-middle" style="width: 300px">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:fun({{ $v->id }});" >                                                              
                                                            <i class="am-icon-pencil"></i> 修改
                                                        </a>
                                                        <a href="javascript:;" >
                                                            <i class="am-icon-plus"></i> 添加年款
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:doDel({{ $v->id }});" class="tpl-table-black-operation-del">
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

                                <script type="text/javascript">
                                    function fun(id){

                                       var str = Trim(prompt('请输入新的系别'));
                                       // alert(str);
                                        if(str != ''){
                                            if(confirm("是否确定为'"+str+"'")){
                                          
                                                $.ajax({
                                                    url:"{{ url('admin/type/1') }}",
                                                    type:'post',
                                                    async:false,
                                                    data:{id:id,_token:"{{ csrf_token() }}",_method:"put",str:str},
                                                    error:function(){
                                                        alert('失败了');
                                                    },
                                                    success:function(data){
                                                        if(data == 1){
                                                            alert('恭喜你修改成功');
                                                            location.href = location.href;
                                                        }else{
                                                            alert('失败是成功他妈');
                                                        }
                                                    }
                                                });
                                            }
                                        }else{
                                            alert('不能为空');
                                        }
                                    }


                                    function doDel(id){
                                        if(confirm("是否确定删除")){
                                      
                                            $.ajax({
                                                url:"{{ url('admin/type/2') }}",
                                                type:'post',
                                                async:false,
                                                data:{id:id,_token:"{{ csrf_token() }}",_method:"delete"},
                                                error:function(){
                                                    alert('失败了');
                                                },
                                                success:function(data){
                                                    if(data == 1){
                                                        alert('恭喜你删除成功');
                                                        location.href = location.href;
                                                    }else{
                                                        alert('失败是成功他妈');
                                                    }
                                                }
                                            });
                                        }
                                       
                                    }

                                </script>

                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <style type="text/css">
                                            .pagination{

                                            }
                                             .pagination, .pagination li {
                                                list-style:none; /* 将默认的列表符号去掉 */
                                                padding:0; /* 将默认的内边距去掉 */
                                                margin:0; /* 将默认的外边距去掉 */
                                                float:left;
                                                margin-left:15px;
                                            }

                                        </style>
                                        
                                            
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @if(session('msg'))
            <script type="text/javascript">
                alert('{{ session()->get("msg") }}');
            </script>
            @endif
            <script type="text/javascript">
                function typeAdd(){
                    var res = Trim(prompt('请输入系别'));
                    //判断是否输入
                    if(res != ''){
                        // 进一步确定
                        if(confirm('是否确定为"'+res+'"')){
                            //
                            $.ajax({
                                url:"{{ url('admin/type/add') }}",
                                type:'post',
                                data:{res:res,yi_id:{{ $id }},_token:"{{ csrf_token() }}"},
                                dataType:'json',
                                async:false,
                                error:function(){
                                    alert('请求时报错');
                                },
                                success:function(data){
                                    if(data == 1){
                                        alert('添加成功');
                                        location.href = location.href;
                                    }else{
                                        alert('添加出错请重试!');
                                    }
                                }
                            });
                        }
                    }else{
                        alert("不能为空");
                    }
                }

                


                function redirect(url){
                    switch(url){
                        case 1:
                            location.href = "{{ url('admin/type') }}";
                        break;
                        case 2:
                            location.href = "{{ url('admin/type_at') }}";
                        break;
                    }
                }

                function Trim(str){
                    return str.replace(/(^\s*)|(\s*$)/g, ""); 

                }
                

            </script>

           

@endsection