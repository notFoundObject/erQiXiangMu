@extends("common.admin")

@section("content") 
<div class="row">

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">文章添加</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">

                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('admin/article') }}" method="post"  enctype="multipart/form-data">
                	{{ csrf_field() }}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="art_title" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                            <small>填写标题文字1-15字左右。</small>
                        </div>
                    </div>
						
					<div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">SEO关键词 <span class="tpl-form-line-small-title">SEO</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="art_tag" placeholder="输入SEO关键字">
                        </div>
                    </div>

					<div class="am-form-group">
                        <label for="user-name" name="art_tag" class="am-u-sm-3 am-form-label">描述 <span class="tpl-form-line-small-title">description</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="art_description" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                            <small>填写描述文字10-20字左右。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="art_time" class="tpl-form-input" id="user-name" placeholder="请输入时间">
                            <small>填写格式2017-1-1</small>
                        </div>
                    </div>





					<div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">作者 <span class="tpl-form-line-small-title">author</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="art_editor" class="tpl-form-input" id="user-name" placeholder="请输入作者">
                            
                        </div>
                    </div>
                   

                    

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                        <div class="am-u-sm-9">
                            

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail form-control" hidden>
                                    
                                </div>

                                <div>
                                    <span class="btn btn-file btn-alt btn-sm">
                              
                                        <input type="file" name="art_thumb" />
                                    </span>
                        
                                </div>
                            </div>


                        </div>
                    </div>

                    

                    

                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">文章内容</label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="art_content" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea>
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
@endsection