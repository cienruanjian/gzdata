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
              <div class="iymm">
                <p><a href="<?php echo U('Regist/index');?>">注册</a></p>
                <p><a href="#">登录</a></p>
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
    <!--头部  结束-->
    <div id="Middle">
      <div id="left_1">
        <!-- 代码 开始 -->
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
        <!-- 代码 结束 -->
      </div>
      <div id="right_1">
        <div id="Tile1">
          <p>　　以“云上贵州　数‘踞’中国”为主题的2015中国“云上贵州”大数据商业模式大赛9月14日在贵阳启动。大赛将通过对全世界大数据商业模式的征集、评选与深度挖掘,引进优秀“大数据项目”<span><a href="#">[详细]</a></span></p>
        </div>
        <div id="Tile1">
          <p>　　以“云上贵州　数‘踞’中国”为主题的2015中国“云上贵州”大数据商业模式大赛9月14日在贵阳启动。大赛将通过对全世界大数据商业模式的征集、评选与深度挖掘,引进优秀“大数据项目”<span><a href="#">[详细]</a></span></p>
        </div>
        <div id="Tile1">
          <p>　　以“云上贵州　数‘踞’中国”为主题的2015中国“云上贵州”大数据商业模式大赛9月14日在贵阳启动。大赛将通过对全世界大数据商业模式的征集、评选与深度挖掘,引进优秀“大数据项目”<span><a href="#">[详细]</a></span></p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="h20"></div>
    <div id="Middle1">
      <div id="ddpa">
        <div id="ddpa1"><img src="/Public/Home/images/m2.jpg" width="1185" height="96" /></div>
        <div id="ddpa2">
         <div id="ddpa2_img"><img src="/Public/Home/images/m3.jpg" width="140" height="130" /></div>  
         <div id="ddpa2_Tilte">
           <p>贵州在大数据产业基础构建期，举办2015“云上贵州”大数据商业模式大赛，是圆满完成塑造“云上贵州”现代形象、吸引相关产业在黔落地的重要举措。通过举办大赛，将贵州发展大数据产业的规划传播出去...　　　　　<span><a href="#">详细</a></span></p>
         </div>
       </div>
       <div id="ddpa22">
         <div id="ddpa2_img"><img src="/Public/Home/images/m4.jpg" width="140" height="130" /></div>  
         <div id="ddpa2_Tilte">
           <p>贵州在大数据产业基础构建期，举办2015“云上贵州”大数据商业模式大赛，是圆满完成塑造“云上贵州”现代形象、吸引相关产业在黔落地的重要举措。通过举办大赛，将贵州发展大数据产业的规划传播出去...　　　　　<span><a href="#">详细</a></span></p>
         </div>
       </div>
       <div id="ddpa2">
         <div id="ddpa2_img"><img src="/Public/Home/images/m5.jpg" width="140" height="130" /></div>  
         <div id="ddpa2_Tilte">
           <p>贵州在大数据产业基础构建期，举办2015“云上贵州”大数据商业模式大赛，是圆满完成塑造“云上贵州”现代形象、吸引相关产业在黔落地的重要举措。通过举办大赛，将贵州发展大数据产业的规划传播出去...　　　　　<span><a href="#">详细</a></span></p>
         </div>
       </div>
       <div id="ddpa22">
         <div id="ddpa2_img"><img src="/Public/Home/images/m6.jpg" width="140" height="130" /></div>  
         <div id="ddpa2_Tilte">
           <p>贵州在大数据产业基础构建期，举办2015“云上贵州”大数据商业模式大赛，是圆满完成塑造“云上贵州”现代形象、吸引相关产业在黔落地的重要举措。通过举办大赛，将贵州发展大数据产业的规划传播出去...　　　　　<span><a href="#">详细</a></span></p>
         </div>
       </div>
     </div>
    </div>
    <div class="h50"></div>
    <div id="Middle2">
    <p><a href="#"><img src="/Public/Home/images/m9.jpg" width="373" height="228" /></a></p>
    <p><a href="baomingtongdao.html"><img src="/Public/Home/images/m7.jpg" width="371" height="228" /></a></p>
    <p><a href="#"><img src="/Public/Home/images/m8.jpg" width="373" height="230" /></a></p>
    </div>
    <div class="h50"></div>
    <div id="Middle1" style="height:630px;">
    <div id="ddp1a">
    <div id="ddpa1"><img src="/Public/Home/images/m10.jpg" width="1185" height="122" /></div>
    <div class="modeA">
      <!--代码开始-->
      <div class="slide_screen">
        <ul class="list">
          <li class="liA">
            <div class="window">
              <?php if(is_array($ad_3)): foreach($ad_3 as $key=>$v): ?><div class="piece">
                  <a <?php if($v['url']): ?>target="_blank" href="{$.url}"<?php endif; ?>>
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
                  <a <?php if($v['url']): ?>target="_blank" href="{$.url}"<?php endif; ?>>
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
                  <a <?php if($v['url']): ?>target="_blank" href="{$.url}"<?php endif; ?>>
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
                  <a <?php if($v['url']): ?>target="_blank" href="{$.url}"<?php endif; ?>>
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
      <img src="/Public/Home/images/m14.jpg" width="1185" height="94" />
      <div id="xexk1" class="xexk2">
        <p>中国工业和信息化部软件服务业司</p>
        <p>共青团中央学校部</p>
        <p>中国电子企业协会</p>
      </div>
      <div id="xexk1" class="xexk3">
        <p>清华大学</p>
        <p>贵阳市人民政府</p>
        <p>贵安新区管委会</p>
        <p>贵州省经济和信息化委员会</p>
      </div>
      <div id="xexk1">
        <p>阿里巴巴集团</p>
        <p>百度公司</p>
        <p>腾讯公司</p>
        <p>新浪公司</p>
        <p>赛伯乐投资公司</p>
      </div>
      <div id="xexk1">
        <p>中软国际公司</p>
        <p>中关村青年联合会</p>
      </div>
      <div id="xexk1" class="xexk4">
        <p>中软国际公司</p>
      </div>
    </div>
    <div class="clear"></div>
    </div>
    <div class="h50"></div>
    <div id="Middle4">
    <div id="fcrf">
      <img src="/Public/Home/images/m15.jpg" width="1185" height="121" />
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
      <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    <div id="fcrf1">
     <p><a href="#"><img src="/Public/Home/images/m16.jpg" width="272" height="79" /></a></p>
    </div>
    </div>
    <div id="Middle5">
      <p>友情链接：友情链接  友情链接 友情链接  友情链接 友情链接  友情链接 友情链接  友情链接 友情链接  友情链接 友情链接  友情链接 友情链接  友情链接 友情链接  </p>
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