@extends('common.admin')

@section('content')


            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">
                                    <button type="button" onclick="redirect(1)" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-Car"></span>品牌列表</button> &nbsp
                                    <button type="button"  onclick="redirect(2)" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-Car"></span>车型列表</button> </div>
                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" onclick="typeAdd()" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增品牌</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">所有类别</option>
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
                                                <th>标识图</th>
                                                <th>品牌</th>
                                                <th>首字母</th>
                                                <th>查看</th>
                                                <th>编辑</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_tr">
                                        @foreach($type as $v)
                                            <tr class="gradeX">
                                                <td>
                                                    <img src="{{ asset('uploads/'.$v->photo) }}" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle">{{ $v->brand }}</td>
                                                <td class="am-text-middle">{{ $v->shou }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('admin/type/'.$v->id) }}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-eye"></i>查看车系
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:fun({{ $v->id }});" >
                                                            <i class="am-icon-pencil"></i> 修改
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <script type="text/javascript">
                                                function fun(id){

                                                   var str = Trim(prompt('请输入新的品牌'));
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


                                                function Trim(str){
                                                    return str.replace(/(^\s*)|(\s*$)/g, ""); 

                                                }
                                            </script>
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
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
                                        
                                            {!! $type->appends($where)->render() !!}
                                        

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
                    location.href = "{{ url('admin/type/create') }}";
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


                // var list = $('#paginate li a');
                // for (var i = 0; i < list.length; i++) {
                //     list[i].click()
                // }

                // var ul = $('#paginate1');
                
                // // alert(count);
                // // var add = '';
                // var i = 1;
                // for (i; i <= count; i++) {
                //     add = "<li><a href='javascript:page(this);'>"+i+"</a></li>";

                //     alert(add);
                //     ul.append(add);
                // }

                // function page(ob){
                //     // alert(ob.innerHTML);
                //     console.log(ob);
                //     // switch(ob.innerHTML)
                // }
            </script>

           

@endsection