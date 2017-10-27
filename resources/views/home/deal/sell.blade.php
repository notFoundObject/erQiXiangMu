@extends('common.home')

@section('content')
	<div class="clear_fix"></div>
<div class="sell_box">
  <div class="middlewrap">
    <form class="sel-box sell_panel_maskNav">
      <div class="w-title">填写车辆信息，我们帮您卖车</div>
      <div class="write-box">
        <input type="text" class="input-phone" placeholder="请输入手机号码" id="phone">
        <input type="hidden" name="source_type" value="0">
        <p class="valid-error">请填写手机号码</p>
      </div>
      <button class="sell-submit" data-clue-entry="01" data-role="navbtn" data-maskname="mask3" data-needpub="1"> 免费卖车 </button>
      <p class="submit-tip">免费咨询<i class="nub-org">400-877-9288</i></p>
    </form>
  </div>
</div>
<div class="sell-img-1"> <img src="{{ asset('assets/home/images/sellimg1.jpg') }} "/> </div>
<div class="sell-img-2"> <img src="{{ asset('assets/home/images/sellimg2.jpg') }} "/> </div>
<div class="sell-img-1"> <img src="{{ asset('assets/home/images/sellimg3.jpg') }} "/> </div>
<div class="sell-img-2"> <img src="{{ asset('assets/home/images/sellimg4.jpg') }} "/> </div>
<div class="sell-img-1">
  <div class="con-tit">卖车指南</div>
  <ul class="sell-guide">
    <li class="fl">
      <p class="p1">Q1：是否收取费用？</p>
      <div class="txt-box"> 卖车全过程我们是不收取卖家任何费
        用的，成交时我们会按比例收取买家
        少量费用。 </div>
    </li>
    <li class="fr">
      <p class="p1">Q2：大概多久能成交？</p>
      <div class="txt-box"> 按以往经验，3天内您会陆续得到我
        们买家报价，如果售价合理，成功售
        出几率会很高。 </div>
    </li>
    <li class="fl">
      <p class="p1">Q3：卖车需要准备哪些材料？</p>
      <div class="txt-box"> 只需要提供您的身份证、行驶证、登
        记证、购置税本、购车发票，如果车
        辆为公车，还需要提供相关的组织机
        构代码信息。交。 </div>
    </li>
    <li class="fr">
      <p class="p1">Q4：出售车辆需要符合怎样的条件？</p>
      <div class="txt-box"> 只要您的车辆为非营运车辆且相关手
        续齐全即可在我们平台出售。。 </div>
    </li>
    <li class="fl">
      <p class="p1">Q5：在阳光好车能卖到理想价位吗？</p>
      <div class="txt-box"> 您只要提交信息，我们就会通过大数
        据定价系统出具报价，如果您对此价
        格不满意，我们还会获取百万用户和
        车商的报价，海量报价任您选，若有
        满意的报价随时可预约看车，双方同
        意即可成交。 </div>
    </li>
  </ul>
  <div class="tj_form">
    <p class="write-tip">填写表单，立刻卖车</p>
    <a href="#" class="backtotop">立即填写</a> </div>
</div>
<div class="clear_fix"></div>
@endsection