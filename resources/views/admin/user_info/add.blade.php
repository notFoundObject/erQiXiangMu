@extends('common.admin')
@section('content')
	 <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户添加</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="widget-body am-fr">

                                <form action="{{url('/admin/user_info/')}}" method="post" class="am-form tpl-form-border-form tpl-form-border-br" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">nickname</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name='nickname' class="tpl-form-input" id="user-name" placeholder="请输入用户名">
                                            <small id="nickname"> </small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-pwd" class="am-u-sm-3 am-form-label">密码 <span class="tpl-form-line-small-title"> repassword</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name='pwd' class="tpl-form-input" id="user-pwd" placeholder="请输入密码">
                                            <small id="pwd"> </small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-repwd" class="am-u-sm-3 am-form-label">再次输入密码 <span class="tpl-form-line-small-title"> repassword</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name='repwd' class="tpl-form-input" id="user-repwd" placeholder="请输入密码">
                                            <small id="repwd"> </small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-repwd" class="am-u-sm-3 am-form-label">权限 <span class="tpl-form-line-small-title"> auth</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name='repwd' class="tpl-form-input" id="user-repwd" placeholder="请输入数字1-10">
                                            <small id="repwd"> </small>
                                        </div>
                                    </div>
                                    
                                     <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">手机号码 <span class="tpl-form-line-small-title">photo</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name='tel' class="tpl-form-input" id="user-phone" placeholder="请输入手机号">
                                            <small id="phone"> </small>
                                        </div>
                                    </div>  
                                    
                                    
                                    <div class="am-form-group">
                                        <label for="user-photo" class="am-u-sm-3 am-form-label"> 个人头像<span class="tpl-form-line-small-title"> Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    												<i class="am-icon-cloud-upload"></i>添加图片</button>
                                                <div id="preview"></div>
                                                 <input type="file" name="photo" onchange="preview(this)" />
                                                      <script type="text/javascript">
                                                      function preview(file) {
                                                        var prevDiv = document.getElementById('preview');
                                                        if (file.files && file.files[0]) {
                                                          var reader = new FileReader();
                                                          reader.onload = function(evt) {
                                                            prevDiv.innerHTML = '<img src="' + evt.target.result + '" />';
                                                          }
                                                          reader.readAsDataURL(file.files[0]);
                                                        } else {
                                                          prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
                                                        }
                                                      }
                                                      </script>
                                                        <style type="text/css">
                                                          #preview, #preview img ,.photo img {
                                                            width: 200px;
                                                            height: 200px;
                                                          }
                                                           
                                                          #preview {
                                                            border: 1px solid #000;
                                                          }
                                                      </style>
                                            </div>

                                        </div>
                                    </div>
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
        </div>




@endsection