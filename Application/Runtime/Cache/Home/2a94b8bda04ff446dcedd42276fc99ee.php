<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>第二届云上贵州大数据商业模式大赛</title>
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
    <div style="background-color:#fff">
    <!--首页  焦点图-->
    <div id="wrappen">
      <div id="wrapper">
        <ul class="lanrenzhijia">
          <?php if(is_array($ad_1)): foreach($ad_1 as $key=>$v): ?><li class="lanrenzhijia_li show_images_<?php echo ($key + 1); ?>">
              <a <?php if($v['url']): ?>href="<?php echo ($v["url"]); ?>" target="_blank"<?php endif; ?>>
                <img class="show_images_<?php echo ($key + 1); ?>_img" src="/<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["desc"]); ?>" />
              </a>
            </li><?php endforeach; endif; ?>
        </ul>
        <div style="clear:both;"></div>
      </div>
    </div>
    <!--头部结束-->
    <div id="Middle">
      <div id="left_1">
        <!-- 轮播图代码开始 -->
        <div id="fsD1" class="focus">
          <div id="D1pic1" class="fPic">
            <?php if(is_array($ad_2)): foreach($ad_2 as $key=>$v): ?><div class="fcon" style="display: none;">
                <a <?php if($v['url']): ?>href="<?php echo ($v["url"]); ?>" target="_blank"<?php endif; ?>>
                  <img src="/<?php echo ($v["thumb"]); ?>" style="opacity: 1; ">
                </a>
                <?php if($v['desc']): ?><span class="shadow"><a <?php if($v['url']): ?>href="<?php echo ($v["url"]); ?>" target="_blank"<?php endif; ?>><?php echo ($v["desc"]); ?></a></span><?php endif; ?>
              </div><?php endforeach; endif; ?>
          </div>
          <div class="fbg">
            <div class="D1fBt" id="D1fBt">
              <?php if(is_array($ad_2)): foreach($ad_2 as $key=>$v): ?><a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i><?php echo ($key + 1); ?></i></a><?php endforeach; endif; ?>
            </div>
          </div>
        </div>
        <!-- 轮播图代码结束 -->
      </div>
      <div id="right_1">
        <?php if(is_array($art)): foreach($art as $key=>$v): ?><div class="Tile1">
            <h3><?php echo (mb_substr($v["title"], 0, 30, 'utf-8')); ?></h3>
            <p><?php echo (mb_substr($v["desc"], 0, 140, 'utf-8')); ?>...<span><a href="<?php echo U('Article/detail', array('id' => $v['id']));?>">[详细]</a></span></p>
          </div><?php endforeach; endif; ?>
      </div>
      <div class="clear"></div>
    </div>
    <div class="h20"></div>
    <div id="Middle1">
      <div class="ddpa">
        
        <div class="ddpa1"><img src="/Public/Home/Images/m2.jpg" width="1185" height="96" /></div>
        
        <?php if(is_array($intro)): foreach($intro as $key=>$v): ?><div <?php if($key % 2 == 0): ?>class="ddpa2"<?php else: ?>class="ddpa22"<?php endif; ?>>
           <div class="ddpa2_img"><img src="/<?php echo ($v["thumb"]); ?>" width="140" height="130" /></div>  
           <div class="ddpa2_Tilte">
              <h3><?php echo ($v["title"]); ?></h3>
             <p><?php echo (mb_substr($v["desc"], 0, 100, 'UTF-8')); ?>...<span><a href="<?php echo U('Article/detail', array('id' => $v['id']));?>">详细</a></span></p>
           </div>
         </div><?php endforeach; endif; ?>
     </div>
    </div>
    <div class="h50"></div>
    <div id="Middle2">
    <p><a href="#"><img src="/Public/Home/Images/m9.jpg" width="373" height="228" /></a></p>
    <p><a href="<?php echo U('Enroll/index');?>"><img src="/Public/Home/Images/m7.jpg" width="371" height="228" /></a></p>
    <p><a href="#"><img src="/Public/Home/Images/m8.jpg" width="373" height="230" /></a></p>
    </div>
    <div class="h50"></div>
    <div id="Middle1" style="height:630px;">
    <div id="ddp1a">
    <div id="ddpa1"><img src="/Public/Home/Images/m10.jpg" width="1185" height="122" /></div>
    <div class="modeA">
      <!--代码开始-->
      <div class="slide_screen">
        <ul class="list">
          <li class="liA">
            <div class="window">
              <?php if(is_array($ad_3)): foreach($ad_3 as $key=>$v): ?><div class="piece">
                  <a <?php if($v['url']): ?>target="_blank" href="<?php echo ($v["url"]); ?>"<?php endif; ?>>
                    <img alt="<?php echo ($v["desc"]); ?>" src="/<?php echo ($v["thumb"]); ?>">
                  </a>
                  <?php if($v['desc']): ?><div class="bar">
                      <h3><?php echo ($v["desc"]); ?></h3>
                      <span></span>
                    </div><?php endif; ?>
                </div><?php endforeach; endif; ?>
            </div>
          </li>
          <li class="liB">
            <div class="window">
              <?php if(is_array($ad_4)): foreach($ad_4 as $key=>$v): ?><div class="piece">
                  <a <?php if($v['url']): ?>target="_blank" href="<?php echo ($v["url"]); ?>"<?php endif; ?>>
                    <img alt="<?php echo ($v["desc"]); ?>" src="/<?php echo ($v["thumb"]); ?>">
                  </a>
                  <?php if($v['desc']): ?><div class="bar">
                      <h3><?php echo ($v["desc"]); ?></h3>
                      <span></span>
                    </div><?php endif; ?>
                </div><?php endforeach; endif; ?>
            </div>
          </li>
          <li class="liC">
            <div class="window">
              <?php if(is_array($ad_5)): foreach($ad_5 as $key=>$v): ?><div class="piece">
                  <a <?php if($v['url']): ?>target="_blank" href="<?php echo ($v["url"]); ?>"<?php endif; ?>>
                    <img alt="<?php echo ($v["desc"]); ?>" src="/<?php echo ($v["thumb"]); ?>">
                  </a>
                  <?php if($v['desc']): ?><div class="bar">
                      <h3><?php echo ($v["desc"]); ?></h3>
                      <span></span>
                    </div><?php endif; ?>
                </div><?php endforeach; endif; ?>
            </div>
          </li>
          <li class="liD">
            <div class="window">
              <?php if(is_array($ad_6)): foreach($ad_6 as $key=>$v): ?><div class="piece">
                  <a <?php if($v['url']): ?>target="_blank" href="<?php echo ($v["url"]); ?>"<?php endif; ?>>
                    <img alt="<?php echo ($v["desc"]); ?>" src="/<?php echo ($v["thumb"]); ?>">
                  </a>
                  <?php if($v['desc']): ?><div class="bar">
                      <h3><?php echo ($v["desc"]); ?></h3>
                      <span></span>
                    </div><?php endif; ?>
                </div><?php endforeach; endif; ?>
            </div>
          </li>
        </ul>
      </div>
      <!--代码结束-->
    </div>
    </div>
    </div>
    <div id="Middle3">
      <div id="xexk">
        <img src="/Public/Home/Images/m14.jpg" width="1185" height="94" />
        
        <div class="xexk1 xexk2">
            <h3>指导单位</h3>
            <?php if(is_array($link_4)): foreach($link_4 as $key=>$v): ?><p><?php echo ($v["name"]); ?></p><?php endforeach; endif; ?>
        </div>
        <div class="xexk1 xexk3">
            <h3>主办单位</h3>
            <?php if(is_array($link_5)): foreach($link_5 as $key=>$v): ?><p><?php echo ($v["name"]); ?></p><?php endforeach; endif; ?>
        </div>
        <div class="xexk1">
            <h3>联合主办</h3>
            <?php if(is_array($link_6)): foreach($link_6 as $key=>$v): ?><p><?php echo ($v["name"]); ?></p><?php endforeach; endif; ?>
        </div>
        <div class="xexk1">
            <h3>协办单位</h3>
            <?php if(is_array($link_7)): foreach($link_7 as $key=>$v): ?><p><?php echo ($v["name"]); ?></p><?php endforeach; endif; ?>
        </div>
        <div class="xexk1 xexk4">
            <h3>执行承办</h3>
            <?php if(is_array($link_8)): foreach($link_8 as $key=>$v): ?><p><?php echo ($v["name"]); ?></p><?php endforeach; endif; ?>
        </div>
      </div>

      <div class="clear"></div>
    </div>
    <div class="h50"></div>
    <div id="Middle4">
      <div id="fcrf">
        <img src="/Public/Home/Images/m15.jpg" width="1185" height="121" />
      </div>
      <?php if(is_array($link_support)): foreach($link_support as $key=>$v): ?><div class="fcrf1">
          <p><a href="<?php echo ((isset($v["url"]) && ($v["url"] !== ""))?($v["url"]):'javascript:;'); ?>"><img src="/<?php echo ($v["thumb"]); ?>" width="272" height="79" /></a></p>
        </div><?php endforeach; endif; ?>
      <div class="clear"></div>
    </div>
     <div class="clear"></div>
    <div id="Middle5">
      <div>
        友情连接：
        <?php if(is_array($link_friend)): foreach($link_friend as $key=>$v): ?><a target="_blank" href="<?php echo ((isset($v["url"]) && ($v["url"] !== ""))?($v["url"]):'javascript:;'); ?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
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

    <!-- page special js plugin  -->
    <script>
      var URL = "/Public/Home/Js/terminator2.2.min.js";
    </script>
    <script type="text/javascript" src="/Public/Home/Js/koala.min.1.5.js"></script>
    <script type="text/javascript" src="/Public/Home/Js/focus.js"></script>
    <script type="text/javascript" src="/Public/Home/Js/index.js"></script>
    <script type="text/javascript" src="/Public/Home/Js/a.js"></script>

  </body>
</html>