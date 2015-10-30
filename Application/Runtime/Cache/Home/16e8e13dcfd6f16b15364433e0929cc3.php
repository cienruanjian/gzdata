<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>报名通道 - 第二届云上贵州大数据商业模式大赛</title>
  <link href="/Public/Home/Css/index.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/Public/Plugin/uploadify/uploadify.css">
  <style type="text/css">
    .uploadify-button {
        background-color: transparent;
        border: none;
        padding: 0;
        border-radius: 4px;
        background: #fff;
        color: #5d5d5d;
        font-family: "微软雅黑";
        border:1px solid #e7e7eb;
        font-size: 14px;
        font-weight: normal;
    }
    .uploadify:hover .uploadify-button {
        background-color: transparent;
        background: #ddd;
    }
    .uploadify-queue{
      position: absolute;
      z-index: 99999;
      width: 600px;
      min-height: 30px;
    }
    input[disabled] {
    	background: #f2f2f2;
    	color: #ccc;
    	cursor: help;
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

  <div id="khuj" style="background:url(/Public/Home/Images/m19.jpg) center top no-repeat;">
    <div id="h302"></div>
    <div id="rbqk">
      <h3>报名通道</h3>
      <p>
        SIGN ＵＰ
        <img src="/Public/Home/Images/m20.jpg" width="16" height="22" />
      </p>
    </div>

    <div id="lfbw">
      <form  action="<?php echo U('Enroll/handle');?>" method="post">
        <div class="cansaibh"><span style="margin-left:15px">参赛编号：<?php echo ($data["number"]); ?></span></div>
        <div class="h20"></div>
        <div id="outer">
          <label class="lab" style="margin-left:60px;">团队性质</label>
          <ul id="tab" >
            <li class="current" style="margin-left:20px;width:80px">
              <span class="tabinp tabinpu">
               <input disabled="disabled" id="single" type="radio" name="team_nature" class="radioclass" value="1" <?php if($data['team_nature'] == 1): ?>checked<?php endif; ?> />
              </span>
              <label for="single">企业</label>
            </li>
            <li>
              <span class="tabinp tabinpu">
                <input disabled="disabled" id="group" type="radio" name="team_nature" class="radioclass" value="2" class="radioclass" value="1" <?php if($data['team_nature'] == 2): ?>checked<?php endif; ?> />
              </span>
              <label for="group">个人/团体</label>
            </li>
          </ul>
          <div class="clear"></div>
          <div id="content">
            <ul style="display:block;">
              <li>
                <div class="m-form">
                 
                    <fieldset style="border: 0;">
                      <div class="marlef60">

                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目名称</label>
                          <div class="ipt">
                            <input type="text" class="u-ipt required" error="请填写项目名称"  name="name" value="<?php echo ($data["name"]); ?>" <?php if($data['team_nature'] == 2): ?>disabled="disabled"<?php endif; ?>/>
                            <p>请填写参赛项目的主题名称</p>
                          </div>
                        </div>

                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目类型</label>
                          <div class="ipt">
                            <select name="type" error="请选择项目类型" class="u-ipt required">
                              <option value="">请选择项目类型</option>
                              <?php if(is_array($type)): foreach($type as $key=>$v): ?><option <?php if($data['type'] == $v['id']): ?>selected="selected"<?php endif; ?> value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                            </select>
                            <p>请填写参赛项目的主题名称</p>
                          </div>
                        </div>

                        <div class="formitm formitmsc">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目简介 </label>
                          <div class="ipt word-count">
                            <textarea error="请填写项目简介"  class="wid828 hei88 required" name="desc"><?php echo ($data["desc"]); ?></textarea>
                            <p>300字以内</p>
                            <span class="wordwrap"><var class="word">300</var>/300</span>

                          </div>
                        </div>

                        <div class="formitm formitms">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>商业计划书</label>
                          
                          <div class="ipt" style="vertical-align: top;">
                            <button type="button" id="download" class="ipt-u u-ipt">下载模板</button>
                          </div>
                          
                          <div class="ipt">
                            <input class="file" type="file" class="ipt-u u-ipt" id="upload_business_plan"/>
                            <input type="hidden" class="required" value="<?php echo ($data["business_plan"]); ?>" name="business_plan" error="请上传商业计划书" />
                            <div id="fileImg">
                              <p id="upload-plan-tip">支持word,ppt,pdf格式</p>
                            </div>
                          </div>
                        </div>
                        <div class="formitm formitms">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目创意背景 </label>
                          <div class="ipt word-count">
                            <textarea error="请填写项目创意背景"  class="wid828 hei63 required" name="background"><?php echo ($data["background"]); ?></textarea>
                            <span class="wordwrap"><var class="word">100</var>/100</span>
                            <p>100字以内</p>
                          </div>
                        </div>
                        <div class="formitm formitms">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目当前进展 </label>
                          <div class="ipt word-count">
                            <textarea error="请填写当前的进展"  class="wid828 hei63 required" name="progress"><?php echo ($data["progress"]); ?></textarea>
                            <span class="wordwrap"><var class="word">100</var>/100</span>
                            <p>100字以内</p>
                          </div>
                        </div>
                        <div class="formitm formitms">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目盈利模式 </label>
                          <div class="ipt word-count">
                            <textarea error="请填写盈利模式" class="wid828 hei63 required" name="profit_model"><?php echo ($data["profit_model"]); ?></textarea>
                            <span class="wordwrap"><var class="word">100</var>/100</span>
                            <p>100字以内</p>
                          </div>
                        </div>
                        <div class="formitm formitms">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目竞争优势 </label>
                          <div class="ipt word-count">
                            <textarea error="请填写项目竞争优势"  class="wid828 hei63 required" name="advantage"><?php echo ($data["advantage"]); ?></textarea>
                            <span class="wordwrap"><var class="word">100</var>/100</span>
                            <p>100字以内</p>
                          </div>
                        </div>
                        <div class="formitm formitms">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>年均盈利（元）</label>
                          <div class="ipt">
                            <input error="请填写年均盈利" type="number" name="income" class="u-ipt required" value="<?php echo ($data["income"]); ?>" />
                          </div>
                        </div>
                       
                        <?php if($data['team_nature'] == 1): ?><div class="enterprise-only">
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>企业名称 </label>
                            <div class="ipt">
                              <input error="请填写企业名称" type="text" class="u-ipt required" value="<?php echo ($data["enterprise_name"]); ?>" name="enterprise_name" />
                              <p>请填写公司名称</p>
                            </div>
                          </div>
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>企业规模</label>
                            <div class="ipt iptlef">
                              <div class="win150"> 
                                <input type="radio" value="1~20人" name="scale" id="number1" />
                                <label for="number1">1~20人</label>
                              </div>
                              <div class="win150" value="20~200人" style="width: 120px;">
                                <input type="radio" name="scale" id="number2" />
                                <label for="number2">20~200人</label>
                              </div>
                              <div class="win150">
                                <input type="radio" value="200人以上" name="scale" id="number3" />
                                <label for="number3">200人以上</label>
                              </div>
                            </div>
                          </div>
                          
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>营业执照编号</label>
                            <div class="ipt">
                              <input disabled="disabled" type="text" class="u-ipt license length" value="<?php echo ($data["business_license_number"]); ?>" length="15" name="business_license_number"/>
                              <p>请输入15位营业执照编号</p>
                            </div>
                          </div>
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>营业执照注册地址</label>
                            <div class="ipt">
                              <input type="text" name="address" class="u-ipt required" value="<?php echo ($data["address"]); ?>"/>
                              <p>请填写营业执照注册地址</p>
                            </div>
                          </div>
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>营业执照扫描件</label>
                            <div class="ipt">
                                <input class="file required" type="file" id="upload_business_license_scan"/> 
                                <input type="hidden" class="required" value="<?php echo ($data["business_license_scan"]); ?>" name="business_license_scan" error="请上传营业执照扫描件" />
                              <div id="fileImg">
                                <img src="/{data.business_license_scan}" alt="" class="fileImg" />
                              </div>
                            </div>
                          </div>
                        </div><?php endif; ?>
						<?php if($data['team_nature'] == 2): ?><div class="personal-only">
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>项目团队人数</label>
                            <div class="ipt iptlef">
                              <div class="win150 wid100">
                                <input type="radio" name="xianmutdrs" value="1~5人" id="xianmutdrs1" checked />
                                <label for="xianmutdrs1">1~5人</label>
                              </div>
                              <div class="win150">
                                <input type="radio" name="xianmutdrs" value="6~10人" id="xianmutdrs2" />
                                <label for="xianmutdrs2">6~10人</label>
                              </div>
                              <div class="win150">
                                <input type="radio" name="xianmutdrs" value="10人以上" id="xianmutdrs3" />
                                <label for="xianmutdrs3">10人以上</label>
                              </div>
                            </div>
                          </div>
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>近期是否成立公司</label>
                            <div class="ipt iptlef">
                              <div class="win150 wid100">
                                <input type="radio" name="enterprise_name" <?php if($data['enterprise_name'] == '是'): ?>checked="checked"<?php endif; ?> value="是" checked id="YES" />
                                <label for="YES">是</label>
                              </div>
                              <div class="win150 wid100">
                                <input type="radio" name="enterprise_name" value="否" id="NO" <?php if($data['enterprise_name'] == '否'): ?>checked="checked"<?php endif; ?> />
                                <label for="NO">否</label>
                              </div>
                            </div>
                          </div>
                          <div class="formitm formitms">
                            <label class="lab"><span class="xinghao">*&nbsp;</span>项目所在地</label>
                            <div class="ipt iptlef" style="margin-left:0">
                              <div class="win200">
                                <select name="location_p" id="location_p">
                                </select>
                              </div>
                              <div class="win200">
                                <select name="location_c" id="location_c">
                                </select>
                              </div>
                              <div class="win200">
                                <select name="location_a" id="location_a">
                                </select>
                              </div>
                            </div>
                          </div>
                        </div><?php endif; ?>

                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人姓名</label>
                          <div class="ipt">
                            <input disabled="disabled" value="<?php echo ($data["duty_name"]); ?>" error="请填写项目负责人姓名" type="text" name="duty_name" class="u-ipt required"/>
                          </div>
                        </div>
                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人手机号</label>
                          <div class="ipt">
                            <input disabled="disabled" value="<?php echo ($data["duty_phone"]); ?>" error="请填写项目负责人手机号" type="number" name="duty_phone" class="u-ipt required phone"/>
                          </div>
                        </div>
                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人邮箱</label>
                          <div class="ipt">
                            <input error="请填写项目负责人邮箱" value="<?php echo ($data["duty_email"]); ?>" type="text" name="duty_email" class="u-ipt required email"/>
                          </div>
                        </div>
                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人身份证号</label>
                          <div class="ipt">
                            <input disabled="disabled" value="<?php echo ($data["duty_id"]); ?>" error="请填写项目负责人身份证" type="text" name="duty_id" class="u-ipt required ID"/>
                          </div>
                        </div>
                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人身份证照片</label>
                          <div class="ipt">
                            <input class="file" id="upload_duty_id_frontal_photo" type="file" />
                            <input type="hidden" value="<?php echo ($data["duty_id_frontal_photo"]); ?>" class="required" name="duty_id_frontal_photo" error="请上传正面身份证照" />
                            <div id="fileImg">
                              <img <?php if($data['duty_id_frontal_photo']): ?>src="/<?php echo ($data["duty_id_frontal_photo"]); ?>"<?php else: ?> src="/Public/Home/Images/m21.jpg"<?php endif; ?> alt="" class="fileImg" />
                            </div>
                          </div>
                          <div class="ipt" style="margin-left:80px;">
                            <input class="file" type="file" id="upload_duty_id_back_photo" />
                            <input value="<?php echo ($data["duty_id_back_photo"]); ?>" type="hidden" class="required" name="duty_id_back_photo" error="请上传背面身份证照" />
                            <div id="fileImg">
                              <img <?php if($data['duty_id_back_photo']): ?>src="/<?php echo ($data["duty_id_back_photo"]); ?>"<?php else: ?> src="/Public/Home/Images/m22.jpg"<?php endif; ?> alt="" class="fileImg" />
                            </div>
                          </div>
                        </div>
                        <div class="formitm">
                          <label class="lab">负责人手持身份证照片</label>
                          <div class="ipt">
                            <input class="file" type="file" id="upload_duty_handheld_id_frontal_photo" />
                            <input type="hidden" value="<?php echo ($data["duty_handheld_id_frontal_photo"]); ?>" class="" name="duty_handheld_id_frontal_photo" error="请上传手持正面身份证照" />
                            <div id="fileImg">
                              <img <?php if($data['duty_handheld_id_frontal_photo']): ?>src="/<?php echo ($data["duty_handheld_id_frontal_photo"]); ?>"<?php else: ?> src="/Public/Home/Images/m23.jpg"<?php endif; ?> alt="" class="fileImg" />
                            </div>
                          </div>
                          <div class="ipt" style="margin-left:80px;">
                            <input class="file" type="file" id="upload_duty_handheld_id_back_photo"/>
                            <input value="<?php echo ($data["duty_handheld_id_back_photo"]); ?>" type="hidden" class="" name="duty_handheld_id_back_photo" error="请上传手持反面身份证照" />
                            <div id="fileImg">
                              <img  <?php if($data['duty_handheld_id_back_photo']): ?>src="/<?php echo ($data["duty_handheld_id_back_photo"]); ?>"<?php else: ?> src="/Public/Home/Images/back.jpg"<?php endif; ?> alt="" class="fileImg" />
                            </div>
                          </div>
                          <div id="fiwg">
                            <div id="fiwg1">
                              <p>示例</p> <i><img src="/Public/Home/Images/m24.jpg" /></i>
                            </div>
                            <div id="fiwg2">
                              <p>
                                以左图方式双手持身份证，需免冠，五官清晰可见；<br>
								身份证信息清晰可见；<br>
								照片内容真实有效，不得做任何修改；<br>
								支持 .jpg .jpeg .png .gif格式照片，大小不超过2M
                              </p>
                            </div>
                            <div class="clear"></div>
                          </div>
                        </div>
                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>紧急联系人姓名</label>
                          <div class="ipt">
                            <input value="<?php echo ($data["emergency_contact"]); ?>" error="请填写紧急联系人姓名" type="text" name="emergency_contact" class="u-ipt required"/>
                          </div>
                        </div>
                        <div class="formitm">
                          <label class="lab"><span class="xinghao">*&nbsp;</span>紧急联系人手机号</label>
                          <div class="ipt">
                            <input value="<?php echo ($data["emergency_contact_phone"]); ?>" error="请填写紧急联系人手机号" type="number" name="emergency_contact_phone" class="u-ipt required phone"/>
                          </div>
                        </div>
                      </div>
                      <div id="borbot2">
                        <label>"<span class="xinghao">*</span>"为必填项目;不带"<span class="xinghao">*</span>"项目为非必填项目,进入复赛后须补充完整</label>
                      </div>
                     
                      <div align="center">
                        <input type="submit" value="确定无误，修改" class="wgog1">
                      </div>
                    </fieldset>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </form>
    </div>

    <div class="clear"></div>
  </div>
  <script>
    //图片上传
    var sid = "<?php echo session_id();?>";
    var url = "<?php echo U('Base/upload');?>";
  </script>
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
  <script src="/Public/Home/Js/city.js"></script>
  <script type="text/javascript" src="/Public/Plugin/uploadify/jquery.uploadify.min.js"></script>
  <script src="/Public/Home/Js/upload.js"></script>
  <script>
  
    $(function(){
        //字数限制
        $('.word-count').each(function() {
          var textArea = $(this).find('textarea'),
              word = $(this).find('.word');
              setTextareaNum(textArea,word);
        });

        $('form').submit(function () {
          var lock = 0;
          //数据检测 必填项验证
          $('.required').each(function() {
            var value = $.trim($(this).val());
            if (value == '' && !$(this).prop('disabled')) {
              var _this = $(this);
              if ($(this).attr('type') == 'hidden') {
                var id = '#upload_'+_this.attr('name');
                _this = $(id);
                $('html,body').animate({scrollTop: _this.offset().top - 100}, 500);
              };
              var text = $(this).attr('error') ? $(this).attr('error') : '此项为必填项，请按要求填写';
              $(this).focus();
              layer.tips(text, _this, {
                tips: [3, '#FF5151'],
                time: 4000
              });
              lock = 1;
              return false;
            }
          });

           if (lock) return false;

          //电话号码验证
          $('.phone').each(function() {
            var obj = $.trim($(this).val());
            var reg = /^0?1[3|4|5|8][0-9]\d{8}$/;
            if (!reg.test(obj) && obj != '' && !$(this).prop('disabled')) {
              layer.tips('请输入正确的手机号码~', $(this), {
                tips: [3, '#FF5151'],
                time: 4000
              });
              $(this).focus();
              lock = 1;
              return false;
            };
          });

          if (lock) return false;

          //身份证验证
          $('.ID').each(function() {
            var obj = $.trim($(this).val());
            var reg = /^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{4}$/;
            if (!reg.test(obj) && obj != '' && !$(this).prop('disabled') ) {
              layer.tips('请输入正确的身份证号~', $(this), {
                tips: [3, '#FF5151'],
                time: 4000
              });
              $(this).focus();
              lock = 1;
              return false;
            };
          });

          if (lock) return false;

          //license
          $('.license').each(function() {
            var obj = $.trim($(this).val() && !$(this).prop('disabled'));
            var reg = /\d{15}/;
            if (!reg.test(obj) && obj != '') {
              layer.tips('营业执照编号格式不正确~', $(this), {
                tips: [3, '#FF5151'],
                time: 4000
              });
              $(this).focus();
              lock = 1;
              return false;
            };
          });

          if (lock) return false;

          //邮箱验证
          $('.email').each(function() {
            var obj = $.trim($(this).val());
            var reg = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
            if (!reg.test(obj) && obj != '' && !$(this).prop('disabled')) {
              layer.tips('邮箱格式不正确~', $(this), {
                tips: [3, '#FF5151'],
                time: 4000
              });
              $(this).focus();
              lock = 1;
              return false;
            };
          });

          if (lock) return false;

          $.ajax({
            url        :    "<?php echo U('Enroll/handle');?>",
            type       :    "post",
            data       :    $('form').serialize(),
            dataType   :    'json',
            beforeSend :    function(){layer.load(1)},
            success    :    function(data) {
              layer.closeAll();
              var data = eval(data);
              if (data.status) {
                layer.msg(data.msg, function() {
                  window.location.href = data.jumpUrl;
                });
              } else {
                layer.msg(data.msg);
              }
            } 
          });
          return false;
        });
        //地址
        var teamNature = "<?php echo ($data["team_nature"]); ?>";
        var address = "<?php echo ($data["address"]); ?>"
        if (teamNature == 2) {
        	var address = address.split(' ');
        	new PCAS('location_p', 'location_c', 'location_a', address[0], address[1], address[2]);
        }

        $("#download").click(function(){
        	window.location.href="<?php echo U('Download/index');?>";
        })
      }); 
  </script>
</body>
</html>