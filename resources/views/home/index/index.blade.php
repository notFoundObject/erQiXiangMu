@extends("common.home")

@section("content")   
<div class="clear_fix"></div>
<div class="special_sun">
  <div class="block-description"> <span class="title">阳光特色</span> </div>
  <div class="active-banner fl"> <a href="#">
    <h2><font color="#f79630">259项</font>全面检测</h2>
    <p>严苛检测标准，无事故</p>
    <img src="{{ asset ('assets/home/images/sun_banner.jpg') }}"> </a> </div>
  <div class="active-blocks fr">
    <ul>
      <li class="li_01"><a href="list.html" title="实用代步车" target="_blank">
        <p class="title">实用代步车</p>
        <p class="content">驾驭想象 聆听声音</p>
        <div class="pic"><img src="{{ asset ('assets/home/images/car1.jpg') }}" alt="保值车型"></div>
        </a></li>
      <li class="li_02"><a href="list.html" title="5-8万能买啥" target="_blank">
        <p class="title">5-8万能买啥</p>
        <p class="content">驾有所值，动气强劲</p>
        <div class="pic"><img src="{{ asset ('assets/home/images/201601221218531455.jpg') }}" alt="5-8万能买啥"></div>
        </a></li>
      <li class="li_03"><a href="list.html" title="12-16万能买啥" target="_blank">
        <p class="title">12-16万能买啥</p>
        <p class="content">风范，与自由同行</p>
        <div class="pic"><img src="{{ asset ('assets/home/images/201601221218599350.jpg') }}" alt="12-16万能买啥"></div>
        </a></li>
      <li class="li_04"><a href="list.html" title="奥迪车库" target="_blank">
        <p class="title">奥迪车库</p>
        <p class="content">奥迪—— Audi</p>
        <div class="pic"><img src="{{ asset ('assets/home/images/201601221432247622.jpg') }}" alt="奥迪车库"></div>
        </a></li>
      <li class="li_05"><a href="list.html" title="大众车库" target="_blank">
        <p class="title">大众车库</p>
        <p class="content">大众 — Volkswagen</p>
        <div class="pic"><img src="{{ asset ('assets/home/images/201601221219156607.jpg') }}" alt="大众车库"></div>
        </a></li>
      <li class="li_06"><a href="list.html" title="岂止于大" target="_blank">
        <p class="title">岂止于大</p>
        <p class="content">我所钟爱的7座SUV</p>
        <div class="pic"><img src="{{ asset ('assets/home/images/201601221219239104.jpg') }}" alt="岂止于大"></div>
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
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
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
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="#" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
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
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="#" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
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
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
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
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
            <p class="infoBox"> <a  title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" href="infor.html" target="_blank" class="info-title">奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版</a> </p>
            <p class="fc-gray"> <span class="tag-gray">石家庄</span> <span class="">2014年11月上牌</span> <em class="shuxian">|</em> 行驶2.4万公里 </p>
            <p class="priType-s"> <span> <i class="fc-org priType"> 2.10万 </i> </span> <s>3.40万</s> </p>
          </div>
        </li>
        <li>
          <div class="list-infoBox"> <a title="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版" target="_blank" class="imgtype" href="infor.html"> <img width="290" height="194" src="{{ asset ('assets/home/images/carimg.jpg') }}" alt="奇瑞QQ3 2012款 QQ3 0.8 手动 梦想版"> </a>
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
        <div class="hd"> <a class="prev"><img src="{{ asset ('assets/home/images/in_l.png') }}"/></a>
          <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
          </ul>
          <a class="next"><img src="{{ asset ('assets/home/images/in_r.png') }}"/></a></div>
        <div class="bd">
          <ul>
            <li >
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{ asset ('assets/home/images/car2.jpg') }}" /> </a>
                <div class="joininfor">
                  <h4>当漂移车手  遇见限量A8</h4>
                  <p>今年的明星车辆、全省唯一一辆橙色奥迪A8L，他的买家是一位身份特殊的勇士，一位知名的...</p>
                  <div align="right"> <a href="#" class="cMore">查看详情</a> </div>
                </div>
              </div>
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{ asset ('assets/home/images/car2.jpg') }}" /> </a>
                <div class="joininfor">
                  <h4>青藏川藏   曲水流觞</h4>
                  <p>在2年的发展历程中，与很多朋友结下了缘分，这些朋友大多成为了我们的车主和会员，他们有着不...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
            </li>
            <li >
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{ asset ('assets/home/images/car2.jpg') }}" /> </a>
                <div class="joininfor">
                  <h4>当漂移车手  遇见限量A8</h4>
                  <p>今年的明星车辆、全省唯一一辆橙色奥迪A8L，他的买家是一位身份特殊的勇士，一位知名的...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{ asset ('assets/home/images/car2.jpg') }}" /> </a>
                <div class="joininfor">
                  <h4>青藏川藏   曲水流觞</h4>
                  <p>在2年的发展历程中，与很多朋友结下了缘分，这些朋友大多成为了我们的车主和会员，他们有...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
            </li>
            <li >
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{ asset ('assets/home/images/car2.jpg') }}" /> </a>
                <div class="joininfor">
                  <h4>当漂移车手  遇见限量A8</h4>
                  <p>今年的明星车辆、全省唯一一辆橙色奥迪A8L，他的买家是一位身份特殊的勇士，一位知名的专业...</p>
                  <div align="right"> <a href="newsinfor.html" class="cMore">查看详情</a> </div>
                </div>
              </div>
              <div class="bd-dl"> <a href="newsinfor.html" class="aImg"> <img src="{{ asset ('assets/home/images/car2.jpg') }}" /> </a>
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

<div class="clear_fix"></div>

@endsection 