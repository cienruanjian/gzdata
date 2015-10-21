<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>报名通道</title>
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
      <div class="cansaibh"><span style="margin-left:15px">参赛编号：0001</span></div>
      <div class="h20"></div>
      <div id="outer">
        <label class="lab">团队性质</label>
        <ul id="tab" >
          <li class="current" style="text-align:left;margin-left:20px"><span class="tabinp tabinpu" style="margin-right:16px;"><input id="single" type="radio" name="tabinp" id="" class="radioclass" checked="checked" /></span><label for="single">企业</label></li>
          <li><span class="tabinp tabinpu"><input id="group" type="radio" name="tabinp" id="" class="radioclass" /></span><label for="group">个人/团体</label></li>
        </ul>
        <div class="clear"></div>
        <div id="content">
          <ul style="display:block;">
            <li>
              <div class="m-form">
                <form name="" action="#" method="get">
                  <fieldset style="border: 0;">
                    <div class="marlef60">
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目名称</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                          <p>请填写参赛项目的主题名称</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目简介 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei88"></textarea>
                          <p>300字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>商业计划书</label>
                        <div class="ipt" style="vertical-align: top;">
                          <button type="button" class="ipt-u u-ipt">下载模板</button>
                          <input type="file" class="file" />
                        </div>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">上传</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <p>支持word,ppt,pdf格式</p>
                          </div>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目创意背景 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目当前进展 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目盈利模式 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目竞争优势 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>企业名称 </label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                          <p>请填写公司名称</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>企业规模</label>
                       
                        <div class="ipt iptlef">
                          <div class="win150"> 
                            <input type="radio" name="number" id="number1" />
                            <label for="number1">1~20人</label>
                          </div>
                          <div class="win150"><input type="radio" name="number" id="number2" /><label for="number2">20~200人</label></div>
                          <div class="win150"><input type="radio" name="number" id="number3" /><label for="number3">200人以上</label></div>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>年均盈利</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>营业执照编号</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                          <p>请输入15位置营业执照编号</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>营业执照注册地址</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                          <p>请填写营业执照注册地址</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>营业执照扫描件</label>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择文件</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/Home/Images/m25.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                        <div id="fiwg3">
                          <p>
                            以左图方式双手持身份证，以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证
                          </p>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人姓名</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人手机号</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人邮箱</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人身份证号</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人身份证照片</label>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择正面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/Home/Images/m21.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择反面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/Home/Images/m22.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab">负责人手持身份证照片</label>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择正面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/Home/Images/m23.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择反面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/Home/Images/m23.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                        <div id="fiwg">
                          <div id="fiwg1">
                            <p>示例</p> <i><img src="/Public/Home/Images/m24.jpg" /></i>
                          </div>
                          <div id="fiwg2">
                            <p>
                              以左图方式双手持身份证，以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证
                            </p>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>紧急联系人姓名</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>紧急联系人手机号</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                    </div>
                    <div id="borbot2">
                      <label>"<span class="xinghao">*</span>"为必填项目;不带"<span class="xinghao">*</span>"项目为非必填项目,进入复赛后须补充完整</label>
                    </div>
                    <div align="center">
                      <input name="" type="button" value="确定无误，提交" / class="wgog1">
                    </div>
                  </fieldset>
                </form>
              </div>
            </li>
          </ul>
          <ul style="display:none;">
            <li>
              <div class="m-form">
                <form name="" action="#" method="get">
                  <fieldset style="border: 0;">
                    <div class="marlef60">
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目名称</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                          <p>请填写参赛项目的主题名称</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目简介 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei88"></textarea>
                          <p>300字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>商业计划书</label>
                        <div class="ipt" style="vertical-align: top;">
                          <button type="button" class="ipt-u u-ipt">下载模板</button>
                          <input type="file" class="file" />
                        </div>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">上传</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <p>支持word,ppt,pdf格式</p>
                          </div>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目创意背景 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目当前进展 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目盈利模式 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目竞争优势 </label>
                        <div class="ipt">
                          <textarea  class="wid828 hei63"></textarea>
                          <p>100字以内</p>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目团队人数</label>
                        <div class="ipt iptlef">
                          <div class="win150"><input type="radio" name="xianmutdrs" />1~5人</div>
                          <div class="win150"><input type="radio" name="xianmutdrs" />6~10人</div>
                          <div class="win150"><input type="radio" name="xianmutdrs" />10人以上</div>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>近期是否成立公司</label>
                        <div class="ipt iptlef">
                          <div class="win150"><input type="radio" name="xianmutdrs" />是</div>
                          <div class="win150"><input type="radio" name="xianmutdrs" />否</div>
                        </div>
                      </div>
                      <div class="formitm formitms">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目所在地</label>
                        <div class="ipt iptlef" style="margin-left:0">
                          <div class="win200">
                            <select>
                              <option value="volvo" selected="selected">请选择省市</option>
                              <option value="saab">贵州省</option>
                              <option value="fiat">云南省</option>
                              <option value="audi">广西省</option>
                            </select>
                          </div>
                          <div class="win200">
                            <select>
                              <option value="volvo" selected="selected">请选择城市</option>
                              <option value="saab">贵阳市</option>
                              <option value="fiat">遵义市</option>
                              <option value="audi">凯里市</option>
                            </select>
                          </div>
                          <div class="win200">
                            <select>
                              <option value="volvo" selected="selected">请选择区域</option>
                              <option value="saab">云岩区</option>
                              <option value="fiat">南明区</option>
                              <option value="audi">花溪区</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人姓名</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人手机号</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人邮箱</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人身份证号</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>项目负责人身份证照片</label>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择正面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/HomeImages/m21.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择反面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/HomeImages/m22.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab">负责人手持身份证照片</label>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择正面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/HomeImages/m23.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                        <div class="ipt">
                          <button type="button" class="ipt-u u-ipt">选择反面</button>
                          <input type="file" class="file" />
                          <div id="fileImg">
                            <img src="/Public/HomeImages/m23.jpg" alt="" class="fileImg" />
                          </div>
                        </div>
                        <div id="fiwg">
                          <div id="fiwg1">
                            <p>示例</p> <i><img src="/Public/HomeImages/m24.jpg" /></i>
                          </div>
                          <div id="fiwg2">
                            <p>
                              以左图方式双手持身份证，以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证以左图方式双手持身份证
                            </p>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>紧急联系人姓名</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                      <div class="formitm">
                        <label class="lab"><span class="xinghao">*&nbsp;</span>紧急联系人手机号</label>
                        <div class="ipt">
                          <input type="text" class="u-ipt"/>
                        </div>
                      </div>
                    </div>
                    <div id="borbot2">
                      <label>"<span class="xinghao">*</span>"为必填项目;不带"<span class="xinghao">*</span>"项目为非必填项目,进入复赛后须补充完整</label>
                    </div>
                    <div align="center">
                      <input name="" type="button" value="确定无误，提交" / class="wgog1">
                    </div>
                  </fieldset>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
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

  <script>
          $(function(){
            window.onload = function()
            {
              var $li = $('#tab li');
              var $ul = $('#content ul');
              $li.click(function(){
                var $this = $(this);
                var $t = $this.index();
                $li.removeClass();
                $this.addClass('current');
                $ul.css('display','none');
                $ul.eq($t).css('display','block');
              })
            }
          });
      </script>
</body>
</html>