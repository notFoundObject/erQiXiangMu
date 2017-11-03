@extends("common.home")

@section("content") 
<div class="aboutcon">
<div class="mainbox">
<div class="aside fl" id="J_m_nav">
    <!--side-nav-->
    <ul class="side-nav">
      <li ><a href="{{url('artic')}}">加盟故事</a></li>
      <li><a href="#">公司资质</a></li>
      <li><a href="{{url('notice')}}">网站公告</a></li>
      <li class="active"><a href="{{url('show')}}">媒体报道</a></li>
      <li><a href="#">合作伙伴</a></li>
      <li><a href="contact.html">联系我们</a></li>
    </ul>    
  </div>
  <div class="section_about bdr fr">
    <div class="main_con">
      <div class="crumbs"><span>信息列表</span></div>
      <div class="reportslist">
      
      @foreach($article as $k=>$v)
        @if( $k < 4);
        <div class="item clearfix">
          <a href="newsinfor.html" class="img"><img src="{{asset('upload/'.$v->art_thumb)}}" style="width:100px;height: 100px;"></a>
          <div class="txt">
            <div class="hd clearfix">
              <span class="fr"><i class="time">{{$v->art_time}}</i></span>
              <a href="newsinfor.html">{{$v->art_title}}</a>
            </div>
            {{$v->art_description}}
          </div>
        </div>
        @endif
      @endforeach


      </div>
      <div class="Pagination">
        <a href="#" class="prev"><em></em>上一页</a><span>1</span><a href="#">2</a><a href="#">3</a><a href="#">4</a>...<a href="#">23</a><a href="#" class="next">下一页<em></em></a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="clear_fix"></div>
@endsection