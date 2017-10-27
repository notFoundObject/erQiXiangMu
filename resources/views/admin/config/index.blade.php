@extends('common.admin')

@section('content')
<div class="am-u-sm-12 am-u-md-12 am-u-lg-12" >
    <div class="widget am-cf">
        <div class="widget-body am-fr">

        <form action="{{ url('admin/config') }}" method="post" class="am-form tpl-form-line-form" enctype="multipart/form-data" >
        
            {{ csrf_field() }}
            <div class="am-form-group">
                <label for="user-name" class="am-u-sm-3 am-form-label">网站名字 </label>
                <div class="am-u-sm-9">
                    <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="{{ $config->name }}">
                    
                </div>
            </div>

            <div class="am-form-group">
                <label for="user-email" class="am-u-sm-3 am-form-label">网站关键字</label>
                <div class="am-u-sm-9">
                    <input type="text" name="keywork" class="am-form-field tpl-form-no-bg" placeholder="{{ $config->keywork }}" >
                    
                </div>
            </div>

            <div class="am-form-group">
                <label for="user-email" class="am-u-sm-3 am-form-label">网站描述 </label>
                <div class="am-u-sm-9">
                    <input type="text" name="describe" class="am-form-field tpl-form-no-bg" placeholder="{{ $config->describe }}" >
                    
                </div>
            </div>

            


            <div class="am-form-group">
                <label for="user-weibo" name="logo" class="am-u-sm-3 am-form-label">网站logo </label>
                <div class="am-u-sm-9">
                    <div class="am-form-group am-form-file">
                        

                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail form-control"></div>
                            
                            <div>
                                <span class="btn btn-file btn-alt btn-sm">
                                    <span class="fileupload-new">选择图片</span>
                                    <br>
                                    
                                    
                                    <!-- <input type="file" /> -->
                                    <input type="file" name="logo"/>
                                  
                                </span>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="am-form-group">
                <label for="user-weibo"  class="am-u-sm-3 am-form-label">logo预览 </label>
                <div class="am-u-sm-9">
                    <div class="am-form-group am-form-file">
                        <div class="tpl-form-file-img" >
                            <img src="{{ asset('upload/'.$config->logo)}}" alt="" style=" width:150px; height:150px; ">
                        </div>
                    </div>

                </div>
            </div>

            
         
            
            <div class="am-form-group">
                <label for="user-email"  class="am-u-sm-3 am-form-label">网站开关 </label>
                <div class="am-u-sm-9">

                
                    <label><input name="on_off" type="radio" value="1" />开 </label> 
                    <label><input name="on_off" type="radio" value="2" />关 </label> 
                  
                                               
                </div>
            </div>
            

            <div class="am-form-group">
                <label for="user-email" class="am-u-sm-3 am-form-label">网站版权 </label>
                <div class="am-u-sm-9">
                    <input type="text" name="copyright" class="am-form-field tpl-form-no-bg" placeholder="{{ $config->copyright }}" >
                    
                </div>
            </div>


            <div class="am-form-group">
                <label for="user-email"  class="am-u-sm-3 am-form-label">网站归属 </label>
                <div class="am-u-sm-9">
                    <input type="text" name="ascription" class="am-form-field tpl-form-no-bg" placeholder="{{ $config->ascription }}" >
                    
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



@endsection