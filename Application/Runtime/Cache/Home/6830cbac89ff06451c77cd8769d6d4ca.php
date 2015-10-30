<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帮助中心</title>
<link href="/Public/Home/Css/index.css" rel="stylesheet" type="text/css" />
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
                <p style="width:100%; color: #7e7e7e; font-size: 12px;"><a href="<?php echo U('User/index');?>"><?php echo ($_SESSION['home']['phone']); ?></a><a href="<?php echo U('Login/logout');?>"> [退出]</a></p>
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


<div id="khuj" style="background:url(/Public/Home/Images/jj.jpg) center top no-repeat;">
  <div id="h302"></div>
  <div id="rbqk">
    <h3>审核信息</h3>
    <p>　AUDIT INFORMATION<img src="/Public/Home/Images/m20.jpg" width="16" height="22" /></p>
  </div>
  <div id="lfbw">
    <div class="h20"></div>
    <div id="khny_Title">
        <h3>审核信息</h3>
        <p>您现在的位置：<a href="/">首页</a>>审核信息</p>
    </div>
    <div style="margin-top:30px"></div>
    <?php if(!empty($data)): ?><div>
	      <div class="messageModify">
	        <ul>
	          <li>参赛编号</li>
	          <li class="widbf25">项目名称</li>
	          <li>报名时间</li>
	          <li>修改次数</li>
	          <li>审核结果</li>
	          <li>操作</li>
	        </ul>
	        <ul class="modifyMessage">
	          <li><?php echo ($data["number"]); ?></li>
	          <li class="widbf25"><?php echo ($data["name"]); ?></li>
	          <li><?php echo (date("Y-m-d H:i:s", $data["create_at"])); ?></li>
	          <li><?php echo ($data["update_number"]); ?></li>
	          <li>
	          	<?php if($data['status'] == 0): ?>审核中
	          	<?php elseif($data['status'] == 1): ?>
	          		审核已通过
	          	<?php else: ?>
	          		审核未通过<?php endif; ?>
	          </li>
	          <li><a href="<?php echo U('Enroll/edit');?>">修改</a></li>
	        </ul>
	        <div class="clear"></div>
	        <div style="height:50px"></div>
	      </div>
	      <div style="height:50px"></div>
	      <div class="redling">
	        <p>温馨提示：通过审核的信息最多可修改3次，其中不带“*”的信息不可修改</p>
	      </div>
	      <div class="clear"></div>
	    </div>
	<?php else: ?>
	    <div class="clear"></div>
	    <div class="tips">
	      您还没有报名
	    </div><?php endif; ?>
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

</body>
</html>