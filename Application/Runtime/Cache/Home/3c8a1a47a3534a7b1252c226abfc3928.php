<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($article["title"]); ?> - 大赛咨询</title>
<link href="/Public/Home/Css/index.css" rel="stylesheet" type="text/css" />
<style>
  .bdsharebuttonbox{
    float:right;
    margin-top: 10px;
  }
  .bdsharebuttonbox a {
    color:#666;
  }
</style>
<!-- page common css here -->
<link href="/Public/Home/Css/base.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--头部  开始-->
<div id="head">
  <div id="head1">
    <div id="mav">
          <div id="logo"><img src="/Public/Home/Images/logo.jpg" width="502" height="124" /></div>
          <div id="neww11">
              <div id="iymm1">
                <input type="text" placeholder="请输入关键字搜索" / class="udq1">
                <button type="submit" class="buttons"> </button>
              </div>
              <div class="iymm">
                <p><a href="<?php echo U('Regist/index');?>">注册</a></p>
                <p><a href="<?php echo U('Login/index', ['ctl' => CONTROLLER_NAME, 'act' => ACTION_NAME]);?>">登录</a></p>
              </div>
          </div>
          <div id="neww">
              <ul>
                  <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                  <li><a href="<?php echo U('Intro/index');?>">大赛简介</a></li>
                  <li><a href="<?php echo U('Article/index');?>">大赛资讯</a></li>
                  <li><a href="<?php echo U('Enroll/index');?>">报名通道</a></li>
                  <li><a href="<?php echo U('Help/index');?>">帮助中心</a></li>
                  <li><a href="http://contest.gzdata.com.cn/" target="_blank">往届回顾 </a></li>
              </ul>
          </div>
    </div>
  <div class="clear"></div>
</div>
</div>

<div id="khuj" style="background:url(/Public/Home/Images/zu.jpg) center top no-repeat;">
  <div id="h302"></div>
  <div id="rbqk">
       <h3></h3>
     <p>  NEWS <img src="/Public/Home/Images/m20.jpg" width="16" height="22" /></p>
    </div>
    
  <div id="lfbw">
  <div class="h20"></div>
      <div id="ghyy">
        <div id="ghyy1">
          <h3><?php echo ($article["title"]); ?></h3>
          <p>发布时间：<?php echo (date("Y-m-d H:i:s", $article["create_at"])); ?>　浏览：<?php echo ($article["click"]); ?>次</p>
          
          <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>

          <p></p>
        </div>
      </div>
      <div class="h50"></div>
      <div class="clear"></div>
      <div id="ghyy2">
          <?php echo ($article["content"]); ?>
      </div>
  <div class="clear"></div>  
  </div>  
  <div class="clear"></div> 
</div>
<div id="foot">
  <div class="h50"></div>
  <div id="foot1">
      <div id="foot1_logo"><img src="/Public/Home/Images/logo1.jpg" width="156" height="115" /></div>
      <div id="foot1_Title">
         <h3><img src="/Public/Home/Images/m17.jpg" width="36" height="36" />　大赛组委会电话</h3>
         <p class="mmq">0851-8626792</p>
         <p>官方邮箱：gzdata@163.com</p>
         <p>报名地址：contest.gzdata.com.cn</p>
      </div>
      <div id="foot_qq">
         <p class="maz">QQ: 3086586463</p>
         <p class="maz1">大数据商业模式大赛</p>
      </div>
      <div id="foot_rvtv">
          <div id="foot_rvrv_img"><img src="/Public/Home/Images/m18.jpg" width="114" height="113" /></div>
          <div id="foot_Tbr">
              <p class="mn1">大数据商业模式大赛官方微信</p>
              <p class="mn2">扫一扫，关注我们</p>
              <p class="mn3">及时获取大数据大赛最新信息</p>
              <p class="mn4">微信号：gzdatacontest</p>
          </div>
      </div>
  </div>
  <div id="foot_wqbu">
    <p>黔ICP备15088888号  Copyrights @ 2014-2016 贵州省经济信息和信息化委员会 版权所有.All Rights Reservde    技术支持：慈恩软件</p>
  </div>
</div>
<!-- common js plugin here -->
<script type="text/javascript" src="/Public/Home/Js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/Public/Home/Js/util.js"></script>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","sqq"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","sqq"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</body>
</html>