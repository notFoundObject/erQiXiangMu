@extends('common.admin')

@section('content')


						<form class="am-form tpl-form-line-form" enctype="multipart/form-data" action="{{ url('admin/type_at') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">车型：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="奥迪" name="brand">
                                            <small>输入车型</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <div id="fileImg" style="width: 140px;height: 140px;background: none;" class="am-u-sm-9 am-u-sm-push-3">
                                            <img src="{{ asset('assets/admin/img/a5.png') }}" id="preview" width="140" height="140">
                                        </div>
                                        <input id="imgPicker" type="file" name="photo" style="display: none">
                                    </div>
                                    @if(session('msg'))
                                    <script type="text/javascript">
                                        alert({{ session('msg') }});
                                    </script>
                                    @endif
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    
                                    $('#fileImg').click(function(){
                                        $("input[type='file']").click();
                                   });
                                    document.querySelector('#imgPicker').addEventListener('change', function(){
                                        //当没选中图片时，清除预览
                                        // if(this.files.length === 0){
                                        //     document.querySelector('#preview').src = 'assets/img/a5.png';
                                        //     return;
                                        // }
                                        
                                        //实例化一个FileReader
                                        var reader = new FileReader();

                                        reader.onload = function (e) {
                                            //当reader加载时，把图片的内容赋值给
                                            document.querySelector('#preview').src = e.target.result;
                                        };

                                    //读取选中的图片，并转换成dataURL格式
                                    reader.readAsDataURL(this.files[0]);
                                    }, false);



                                    // document.querySelector('#pingPai').addEventListener('click',function(){
                                    //     alert('this is love');
                                    // });
                                    $("button[type='submit']").click(function(){
                                        // alert('123');
                                        // return false;
                                        var brand = $("input[name='brand']");
                                        var photo = $("input[name='photo']");
                                        if(brand.val() == '' || photo.val() == ''){

                                            alert('车型名或图片不能为空');
                                            return false;
                                        }

                                        // var res = brand.val();
                                        
                                        //  if((res = "/^\w+$/") == null){
                                        //     alert('不能含有特殊字符');
                                        //     return false;
                                        // }
                                    });

                                </script>

@endsection