@extends('common.home')

@section('content')
  <!--banner广告-->
<div class="banner"> 
  <!--左侧买卖车-->
  <div class="mainmenu">
    <div class="sel-area">
      <div class="buy-tit">我要卖车</div>
      <div class="all-sort-list">
        <div class="item">
          <h3>
            <div class="border"><a href="">品牌</a></div>
            <ul>
              <li><a href="#">大众</a></li>
              <li><a href="#">宝马</a></li>
              <li><a href="#">奥迪</a></li>
              <li><a href="#">丰田</a></li>
              <li><a href="#">日产</a></li>
              <li><a href="#">奔驰</a></li>
              <li><a href="#">本田</a></li>
              <li><a href="#">别克</a></li>
              <li><a href="#">福特</a></li>
            </ul>
          </h3>
          <div class="item-list clearfix" style="top: 0px; display: none;">
            <div class="close">x</div>
            <div class="subitem">
              <dl class="fore1">
                <dt><a href="#">A</a></dt>
                <dd><em><a href="#">Alpina</a></em><em><a href="#">阿斯顿马丁</a></em><em><a href="#">奥迪</a></em></dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">B</a></dt>
                <dd><em><a href="#">巴博斯</a></em><em><a href="#">宝骏</a></em><em><a href="#">宝马</a></em><em><a href="#">保时捷</a></em><em><a href="#">北京</a></em><em><a href="#">北汽</a></em><em><a href="#">奔驰</a></em><em><a href="#">奔腾</a></em><em><a href="#">本田</a></em><em><a href="#">比亚迪</a></em><em><a href="#">标致</a></em><em><a href="#">别克</a></em><em><a href="#">宾利</a></em><em><a href="#">宝沃</a></em></dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">C</a></dt>
                <dd><em><a href="#">昌河</a></em><em><a href="#">传祺</a></em><em><a href="#">长安</a></em><em><a href="#">长安商用</a></em><em><a href="#">长城</a></em><em><a href="#">长丰</a></em></dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">D</a></dt>
                <dd><em><a href="#">DS</a></em><em><a href="#">大发</a></em><em><a href="#">大通</a></em><em><a href="#">大众</a></em><em><a href="#">道奇</a></em><em><a href="#">帝豪</a></em><em><a href="#">东风</a></em><em><a href="#">东风风度</a></em><em><a href="#">东风小康</a></em><em><a href="#">东南</a></em></dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="items">
          <h3>
            <div class="border"><a href="">价格</a></div>
            <ul>
              <li><a href="#">5万以下</a></li>
              <li><a href="#">5-10万</a></li>
              <li><a href="#">10-15万</a></li>
              <li><a href="#">15-20万</a></li>
              <li><a href="#">20-25万</a></li>
              <li><a href="#">25-40万</a></li>
              <li><a href="#">40万以上</a></li>
            </ul>
          </h3>
        </div>
        <div class="items">
          <h3 style="border-bottom:0px;">
            <div class="border"><a href="">车型</a></div>
            <ul>
              <li><a href="#">SUV</a></li>
              <li><a href="#">商务车</a></li>
              <li><a href="#">跑车</a></li>
              <li><a href="#">急售</a></li>
              <li><a href="#">准新车</a></li>
              <li><a href="#">超值</a></li>
              <li><a href="#">直销车</a></li>
            </ul>
          </h3>
        </div>
      </div>
      <div class="clear_fix"></div>
      <script type="text/javascript">
    $('.all-sort-list > .item').hover(function(){
      var eq = $('.all-sort-list >.item').index(this),        //获取当前滑过是第几个元素
        h = $('.all-sort-list').offset().top,           //获取当前下拉菜单距离窗口多少像素
        s = $(window).scrollTop(),                  //获取游览器滚动了多少高度
        i = $(this).offset().top,                 //当前元素滑过距离窗口多少像素
        item = $(this).children('.item-list').height(),       //下拉菜单子类内容容器的高度
        sort = $('.all-sort-list').height();            //父类分类列表容器的高度
      
      if ( item < sort ){                       //如果子类的高度小于父类的高度
        if ( eq == 0 ){
          $(this).children('.item-list').css('top', (i-h));
        } else {
          $(this).children('.item-list').css('top', (i-h));
        }
      } else {
        if ( s > h ) {                        //判断子类的显示位置，如果滚动的高度大于所有分类列表容器的高度
          if ( i-s > 0 ){                     //则 继续判断当前滑过容器的位置 是否有一半超出窗口一半在窗口内显示的Bug,
            $(this).children('.item-list').css('top', (s-h)+2 );
          } else {
            $(this).children('.item-list').css('top', (s-h)-(-(i-s))+2 );
          }
        } else {
          $(this).children('.item-list').css('top', 0);
        }
      } 

      $(this).addClass('hover');
      $(this).children('.item-list').css('display','block');
    },function(){
      $(this).removeClass('hover');
      $(this).children('.item-list').css('display','none');
    });

    $('.item > .item-list > .close').click(function(){
      $(this).parent().parent().removeClass('hover');
      $(this).parent().hide();
    });
  </script> 
      <!--我要买车-->
      <div class="buy-tit">我要买车</div>
      <div class="sell-car-box">
        <form action="" class="clearfix">
          <input type="text" class="sell-phone-input" data-role="sellPhone" placeholder="请输入手机号码">
          <button class="sell-phone-submit">我要卖车</button>
        </form>
        <!--提交失败-->
        <p class="sell-phone-error" style="display:block;">请填写正确的手机号码</p>
        <!--提交成功-->
        <div class="submit-suc" style="display:none"><i></i>提交成功！ <a href="javascript:void(0)" data-role="go_back">返回</a> </div>
      </div>
    </div>
  </div>
  <div class="menu_r">
    <div class="flexslider">
      <ul class="slides">
      @foreach ($lists as $list)
          <li><img src="../upload/{{ $list->ad_picture }}"  alt=""></li>
      @endforeach
        
      </ul>
    </div>
    <div class="clear_fix"></div>
    <div class="purpose">
      <div class="ind-dz-lc">
        <ul>
          <li>
            <div class="circle radius"> <i class="lc-01"></i> </div>
            <div class="txt">
              <h4>一年/两万公里质保</h4>
            </div>
          </li>
          <li>
            <div class="circle radius"> <i class="lc-02"></i> </div>
            <div class="txt">
              <h4>全面检测</h4>
            </div>
          </li>
          <li>
            <div class="circle radius"> <i class="lc-03"></i> </div>
            <div class="txt">
              <h4>14天可退</h4>
            </div>
          </li>
          <li>
            <div class="circle radius"> <i class="lc-04"></i> </div>
            <div class="txt">
              <h4>100%个人车源</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('.flexslider').flexslider({
    directionNav: true,
    pauseOnAction: false
  });
  $('.flexslider').hover(function(){
    $('.flex-direction-nav').fadeIn();
    },function(){
    $('.flex-direction-nav').fadeOut();
    })
});
</script> 
<!--特色频道-->
<div class="clear_fix"></div>
<div class="special_sun">
  <div class="block-description"> <span class="title">阳光特色</span> </div>
  <div class="active-banner fl"> <a href="#">
    <h2><font color="#f79630">259项</font>全面检测</h2>
    <p>严苛检测标准，无事故</p>
    <img src="{{asset('assets/home/images/sun_banner.jpg') }} "> </a> </div>
  <div class="active-blocks fr">
    <ul>
      <li class="li_01"><a href="{{$Ad[0]->link}}" title="实用代步车" target="_blank">
        <p class="title">实用代步车</p>
        <p class="content">驾驭想象 聆听声音</p>
        <div class="pic"><img src="{{ asset('upload/'.$Ad[0]->ad_picture)}}" alt="保值车型"></div>
        </a></li>
      <li class="li_02"><a href="{{$Ad[1]->link}}" title="5-8万能买啥" target="_blank">
        <p class="title">5-8万能买啥</p>
        <p class="content">驾有所值，动气强劲</p>
        <div class="pic"><img src="{{ asset('upload/'.$Ad[1]->ad_picture)}} " alt="5-8万能买啥"></div>
        </a></li>
      <li class="li_03"><a href="{{$Ad[2]->link}}" title="12-16万能买啥" target="_blank">
        <p class="title">12-16万能买啥</p>
        <p class="content">风范，与自由同行</p>
        <div class="pic"><img src="{{ asset('upload/'.$Ad[2]->ad_picture)}}" alt="12-16万能买啥"></div>
        </a></li>
      <li class="li_04"><a href="{{$Ad[3]->link}}" title="奥迪车库" target="_blank">
        <p class="title">奥迪车库</p>
        <p class="content">奥迪—— Audi</p>
        <div class="pic"><img src="{{ asset('upload/'.$Ad[3]->ad_picture)}}" alt="奥迪车库"></div>
        </a></li>
      <li class="li_05"><a href="{{$Ad[4]->link}}" title="大众车库" target="_blank">
        <p class="title">大众车库</p>
        <p class="content">大众 — Volkswagen</p>
        <div class="pic"><img src="{{ asset('upload/'.$Ad[4]->ad_picture)}}" alt="大众车库"></div>
        </a></li>
      <li class="li_06"><a href="{{$Ad[5]->link}}" title="岂止于大" target="_blank">
        <p class="title">岂止于大</p>
        <p class="content">我所钟爱的7座SUV</p>
        <div class="pic"><img src="{{ asset('upload/'.$Ad[5]->ad_picture)}}" alt="岂止于大"></div>
        </a></li>
    </ul>
  </div>
</div>
<!--车类列表-->
<div class="car_feature">
  <div class="menucar">
    <div class="more" id="11"><a href="list.html">查看全部>></a></div>
    <ul>
      <li class="hover" id="tabs2_0" onmousemove="isShow4('tabs2_0','divs2_0','block','<a href=list.html>查看全部>></a>');">热卖好车</li>
      <li id="tabs2_1" onmousemove="isShow4('tabs2_1','divs2_1','block','<a href=list.html>查看全部>></a>');">最新上架</li>
      <li id="tabs2_2" onmousemove="isShow4('tabs2_2','divs2_2','block','<a href=list.html>查看全部>></a>');">降价急售</li>
      <li id="tabs2_3" onmousemove="isShow4('tabs2_3','divs2_3','block','<a href=list.html>查看全部>></a>');">准新车</li>
      <li id="tabs2_4" onmousemove="isShow4('tabs2_4','divs2_4','block','<a href=list.html>查看全部>></a>');">SUV</li>
    </ul>
  </div>
  <div class="clear_fix"></div>
  <div class="joinsnncar fl">
    <form class="dForm" method="post">
      <h2>我要加盟</h2>
      <div class="mod-form">
        <div class="mod-form-item">
          <input class="input1" placeholder="请填写您的姓名" value="">
        </div>
        <div class="mod-form-item ">
          <input class="input1 tipinput" name="mobile" id="mobile" placeholder="请填写您的手机号码" >
          <i class="i-must"></i> </div>
        <div class="mod-form-item mod-form-item-ex">
          <input class="input1 input-short tipinput" name="msg_code" id="msg_code" placeholder="请输入短信验证码" >
          <i class="i-must"></i><a id="countdown" href="javascript:;" class="get-code2">发送短信</a> </div>
        <div class="mod-form-item mod-form-item-choose clearfix dropdown-group" style="position: relative; z-index: 1">
          <div class="m_zlxg" id="shenfen">
            <p title="">选择省份</p>
            <div class="m_zlxg2">
              <ul>
              </ul>
            </div>
          </div>
          <div class="m_zlxg" id="chengshi">
            <p title="">选择城市</p>
            <div class="m_zlxg2">
              <ul>
              </ul>
            </div>
          </div>
          <input id="sfdq_num" type="hidden" value="" />
          <input id="csdq_num" type="hidden" value="" />
          <input id="sfdq_tj" type="hidden" value="" />
          <input id="csdq_tj" type="hidden" value="" />
          <input id="qydq_tj" type="hidden" value="" />
        </div>
        <div class="mod-form-item">
          <input class="input1 tipinput" name="email" id="email" placeholder="电子邮箱" >
        </div>
        <div class="mod-form-item">
          <textarea id="suggest" name="suggest" placeholder="留言" class="textarea1"></textarea>
        </div>
        <div class="mod-form-item">
          <div class="btn-box">
            <button type="submit" value="submit" class="b-r orange">提交</button>
          </div>
        </div>
        <!---校验-->
         <p class="sell-phone-error" style="display:block;">请填写正确的手机号码</p>
      </div>
    </form>
  </div>
  <div class="menucarlist fr">
    <div id="divs2_0">
      <ul class="carList">
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
      </ul>
    </div>
    <div id="divs2_1" style="display: none;">
      <ul class="carList">
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="#" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
      </ul>
    </div>
    <div id="divs2_2" style="display: none;">
      <ul class="carList">
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="#" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
      </ul>
    </div>
    <div id="divs2_3" style="display: none;">
      <ul class="carList">
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="#" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
      </ul>
    </div>
    <div id="divs2_4" style="display: none;">
      <ul class="carList">
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{asset('assets/home/images/carimg.jpg') }} " alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--新闻资讯-->
<div class="newscon">
  <div class="block-description"> <span class="title">阳光新闻</span> </div>
  <div class="newslist">
    <div class="nKe">
      <div class="kTit">
        <h2>加盟故事</h2>
      </div>
      <div class="slide">
        <div class="hd"> <a class="prev"><img src="{{asset('assets/home/images/in_l..png') }} "/></a>
          <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
          </ul>
          <a class="next"><img src="{{asset('assets/home/images/in_r..png') }} "/></a></div>
        <div class="bd">
          <ul>
            <li >
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{asset('assets/home/images/car2.jpg') }} " /> </a>
                <div class="joininfor">
                  <h4>当漂移车手  遇见限量A8</h4>
                  <p>今年的明星车辆、全省唯一一辆橙色奥迪A8L，他的买家是一位身份特殊的勇士，一位知名的...</p>
                  <div align="right"> <a href="#" class="cMore">查看详情</a> </div>
                </div>
              </div>
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{asset('assets/home/images/car2.jpg') }} " /> </a>
                <div class="joininfor">
                  <h4>青藏川藏   曲水流觞</h4>
                  <p>在2年的发展历程中，与很多朋友结下了缘分，这些朋友大多成为了我们的车主和会员，他们有着不...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
            </li>
            <li >
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{asset('assets/home/images/car2.jpg') }} " /> </a>
                <div class="joininfor">
                  <h4>当漂移车手  遇见限量A8</h4>
                  <p>今年的明星车辆、全省唯一一辆橙色奥迪A8L，他的买家是一位身份特殊的勇士，一位知名的...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{asset('assets/home/images/car2.jpg') }} " /> </a>
                <div class="joininfor">
                  <h4>青藏川藏   曲水流觞</h4>
                  <p>在2年的发展历程中，与很多朋友结下了缘分，这些朋友大多成为了我们的车主和会员，他们有...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
            </li>
            <li >
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{asset('assets/home/images/car2.jpg') }} " /> </a>
                <div class="joininfor">
                  <h4>当漂移车手  遇见限量A8</h4>
                  <p>今年的明星车辆、全省唯一一辆橙色奥迪A8L，他的买家是一位身份特殊的勇士，一位知名的专业...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{asset('assets/home/images/car2.jpg') }} " /> </a>
                <div class="joininfor">
                  <h4>青藏川藏   曲水流觞</h4>
                  <p>在2年的发展历程中，与很多朋友结下了缘分，这些朋友大多成为了我们的车主和会员，他们...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <!--媒体报道-->
    <div class="r-news">
      <div class="kTit">
        <h2>加盟故事</h2>
        <a href="medialist.html" class="newsmore">更多</a> </div>
      <div class="r-news-list">
        <ul>
          <li><span class="date">11月02日</span><i class="icon "></i><a href="newsinfor.html" title="阳光易贷网贷10月份月报"> 阳光易贷网贷10月份月报 </a> </li>
          <li><span class="date">10月10日</span><i class="icon "></i><a href="newsinfor.html" title="阳光易贷网贷9月份月报"> 阳光易贷网贷9月份月报 </a> </li>
          <li><span class="date">09月28日</span><i class="icon "></i><a href="newsinfor.html" title="关于2016年国庆节放假工作安排的通知"> 关于2016年国庆节放假工作安... </a> </li>
          <li><span class="date">09月13日</span><i class="icon "></i><a href="newsinfor.html" title="关于2016年中秋节放假工作安排的通知"> 关于2016年中秋节放假工作安... </a> </li>
          <li><span class="date">09月13日</span><i class="icon "></i><a href="newsinfor.html" title="关于2016年中秋节放假工作安排的通知"> 关于2016年中秋节放假工作安... </a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection