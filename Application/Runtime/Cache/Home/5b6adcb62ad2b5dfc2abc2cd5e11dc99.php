<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>云上贵州-注册</title>
<link href="/Public/Home/Css/zhuce.css" rel="stylesheet" type="text/css" />
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
              <?php if(!$_SESSION['home'][C('USER_AUTH_KEY')]): ?><div class="iymm">
                <p><a href="<?php echo U('Regist/index');?>">注册</a></p>
                <p><a href="<?php echo U('Login/index', ['ctl' => CONTROLLER_NAME, 'act' => ACTION_NAME]);?>">登录</a></p>
              </div>
              <?php else: ?>
               <div class="iymm" style="background:none">
                <p style="width:100%; color: #7e7e7e; font-size: 12px;"><?php echo ($_SESSION['home']['phone']); ?><a href="<?php echo U('Login/logout');?>"> [退出]</a></p>
              </div><?php endif; ?>
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
  <!--头部  结束-->
  <div id="khuj" style="background:url(/Public/Home/Images/m19.jpg) center top no-repeat;">
    <div id="h302"></div>
    <div class="all">
      <div class="all_1"> <img src="/Public/Home/Images/qzy/1.jpg" width="411" height="52" /></div>
      <div class="all_2">
        <form action="<?php echo U('Login/handle');?>">
          <div class="all_2_l">
            <div class="all_2_l_1">
              <div class="all_2_l_1_l">手机：</div>
              <div class="all_2_l_1_r">
                <input name="phone" type="text" />
              </div>
              <div class="clear"></div>
            </div>
            <div class="all_2_l_1" style="margin-top:50px">
              <div class="all_2_l_1_l">密码：</div>
              <div class="all_2_l_1_r">
                <input name="password" type="password" />
                <a href="#" style="float:right;color:#8c8c8c;font-size:16px">忘记密码？</a>
              </div>

              <div class="clear"></div>
            </div>
            <div class="all_2_l_1">
              <div class="all_2_l_1_l"></div>
              <div class="all_2_l_1_r all_2_l_1_r_g">
                <input type="hidden" name="back" value="<?php echo ($back); ?>" />
                <input type="submit" value="登录" />
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </form>
        <div class="all_2_r">

        <div class="all_2_r_1">
          没有帐号？<a href="<?php echo U('Regist/index');?>">立即注册</a></div>
          <div class="all_2_r_1 all_2_r_1_g">

          组委会电话：0851-8626792
        </div>
        <div class="all_2_r_2"><img src="/Public/Home/Images/qzy/2.jpg" width="350" height="291" /></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
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

  <script src="/Public/Plugin/layer/layer.js"></script>
  <script>
    //登陆
    $('form').submit(function() {
      var _this = $(this);
      if (!$.trim($('input[name=phone]').val())) {
        layer.msg('请输入电话号码');
        return false;
      }
      if (!$.trim($('input[name=password]').val())) {
        layer.msg('请输入密码');
        return false;
      }
      $.ajax({
          url  : _this.attr('action'),
          data : _this.serialize(),
          type : "post",
          dataType : "json",
          beforeSend : function(){layer.load(1);},
          success : function(data) {
            layer.closeAll();
            var data = eval(data);
            if (data.status) {
              window.location.href = data.jumpUrl;
            } else {
              layer.msg(data.msg);
            }
          }
      });
      return false;
    });
  </script>
</body>
</html>