<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="后台管理系统">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

    <title><?php echo ($titleL1); ?> - <?php echo C('BACKEND_NAME');?></title>
    <link rel="stylesheet" href="/Public/Admin/vendor/offline/theme.css">
    <link rel="stylesheet" href="/Public/Admin/vendor/pace/theme.css">


    <link rel="stylesheet" href="/Public/Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/Admin/css/animate.min.css">

    <link rel="stylesheet" href="/Public/Admin/css/panel.css">

    <link rel="stylesheet" href="/Public/Admin/css/skins/palette.1.css" id="skin">
    <link rel="stylesheet" href="/Public/Admin/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/Public/Admin/css/main.css">
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/Public/Admin/vendor/modernizr.js"></script>
<!-- page special css plugin here -->
<link rel="stylesheet" href="/Public/Plugin/uploadify/uploadify.css">
<style type="text/css">
	.uploadify-button {
	    background-color: transparent;
	    border: none;
	    padding: 0;
	}
	.uploadify:hover .uploadify-button {
	    background-color: transparent;
	}
</style>
</head>
<body>
    <div class="app">
        <header class="header header-fixed navbar">
            <div class="brand">
                <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                <a href="<?php echo U('Index/index');?>" class="navbar-brand text-white">
                    <i class="fa fa-stop mg-r-sm"></i>
                    <span class="heading-font">
						云上贵州<b>管理系统</b>
					</span>
                </a>
            </div>
            <form class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <button class="btn no-border no-margin bg-none no-pd-l" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" class="form-control no-border no-padding search" placeholder="">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="javascript:;">
						欢迎您，<?php echo ($_SESSION['admin']['login']); ?>
					</a>
                </li>
                <li class="notifications dropdown hidden-xs">
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <div class="badge badge-top bg-danger animated flash">0</div>
                    </a>
                </li>
                <li class="quickmenu">
                    <a href="javascript:;" data-toggle="dropdown"  style="font-size:18px;">
                        <i class="fa fa-user"></i>
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        
                        <li>
                            <a href="<?php echo U('My/index');?>">修改密码</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Login/logout');?>">退出</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>

        <section class="layout">

            <aside class="sidebar canvas-left">

                <nav class="main-navigation">
                    <ul>
                        <li <?php if((strtolower(CONTROLLER_NAME)) == "index"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Index/index');?>">
                                <i class="fa fa-coffee"></i>
                                <span>控制台</span>
                            </a>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "admanage"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index');?>">
                                <i class="fa fa-desktop"></i>
                                <span>广告位管理</span>
                            </a>
                        </li>

                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "theater"): ?>active<?php endif; ?>">
                           
                            <a href="javascript:;">
                                <i class="fa fa-video-camera"></i>
                                <span>影城管理</span>
                            </a>
                             <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Theater/add');?>">
                                        <span>添加影城</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Theater/index');?>">
                                        <span>影城列表</span>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                       
                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "movie"): ?>active<?php endif; ?>">
                           
                            <a href="javascript:;">
                                <i class="fa fa-play"></i>
                                <span>影视管理</span>
                            </a>
                             <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Movie/add');?>">
                                        <span>添加电影</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Movie/index');?>">
                                        <span>电影列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "screening"): ?>active<?php endif; ?>">
                           
                            <a href="javascript:;">
                                <i class="fa fa-eye"></i>
                                <span>上映管理</span>
                            </a>
                             <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('screening/add');?>">
                                        <span>添加</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('screening/index');?>">
                                        <span>上映列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "news"): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-dribbble"></i>
                                <span>新闻管理</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('News/add');?>">
                                        <span>添加新闻</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('News/index');?>">
                                        <span>新闻列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown show-on-hover <?php if(in_array(strtolower(CONTROLLER_NAME), ['kanwu', 'article'])): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-file"></i>
                                <span>广电报</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Kanwu/add');?>">
                                        <span>添加刊物</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Kanwu/index');?>">
                                        <span>刊物列表</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Article/add');?>">
                                        <span>添加文章</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Article/index');?>">
                                        <span>文章列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        

                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "integral"): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-gift"></i>
                                <span>积分兑换</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Integral/index');?>">
                                        <span>礼品列表</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Integral/record');?>">
                                        <span>兑换记录</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "activity"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Activity/index');?>">
                                <i class="fa fa-file"></i>
                                <span>活动管理</span>
                            </a>
                        </li>

                        <li class="dropdown show-on-hover">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-gears"></i>
                                <span>设置</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li >
                                    <a href="<?php echo U('Category/index');?>">
                                        <span>类别</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('City/index');?>">
                                        <span>城市</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo U('Enterprise/index');?>">
                                        <span>合作企业</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <footer>
                    <div class="about-app pd-md animated pulse">
                        <span>
							<b><?php echo C('BACKEND_NAME');?></b>
						</span>
                    </div>
                    <div class="footer-toolbar pull-left">
                        <a href="javascript:;" class="pull-left help">
                            <i class="fa fa-question-circle"></i>
                        </a>
                        <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                </footer>

            </aside>
        <section class="main-content">
            <div class="content-wrap">
                <div class="row">
                	<div class="col-lg-12">
                 	<section class="panel">
                      <header class="panel-heading"><?php echo ($titleL2); ?></header>
                      <div class="panel-body">
                          <form class="form-horizontal bordered-group" role="form" action="<?php echo U('AdManage/addHandle');?>" method="post">
                              
                              <div class="form-group">
                              	  
                                  <label for="inputEmail3" class="col-sm-2 control-label"><span class="red">* </span>轮播大图</label>
                                  <div class="col-sm-2">
                                  	<img id="no-image" src="/Public/Default/images/no_image.jpg" >
                                  </div>
                                  <div class="col-sm-8" style="margin-top:20px;">
                                      <input type="file" name="face" id="upload" />
                                      <p class="help-block no-margin">格式：jpg、jpeg、gif、png 尺寸：<?php echo ($big_thumb); ?></p>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">链接地址</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="url" placeholder="http://" class="form-control" id="inputEmail3">
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                  <label class="col-sm-2 control-label">描述</label>
                                  <div class="col-sm-8">
                                      <textarea name="desc" class="form-control" rows="2"></textarea>
                                  </div>
                              </div> 
                             
                              <div class="form-group">
                                  <label for="inputEmail4" class="col-sm-2 control-label">排序</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="sort" id="inputEmail4" value="100" placeholder="排序">
                                  </div>
                              </div>
                              <input type="hidden" name="big_thumb">
                              <input type="hidden" name="small_thumb">
                              <input type="hidden" name="pos" value="<?php echo ($pos); ?>">
                              
                              <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-6">
                                      <button type="submit" class="btn btn-default">添加</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </section>
                 </div>
                </div>
            </div>
        </section>
    </section>
</div>
<script src="/Public/Admin/vendor/jquery-1.11.1.min.js"></script>
<script src="/Public/Admin/bootstrap/js/bootstrap.js"></script>
<script src="/Public/Admin/vendor/jquery.easing.min.js"></script>
<script src="/Public/Admin/vendor/jquery.placeholder.js"></script>
<script src="/Public/Admin/vendor/fastclick.js"></script>

<script src="/Public/Admin/vendor/offline/offline.min.js"></script>
<script src="/Public/Admin/vendor/pace/pace.min.js"></script>
<script src="/Public/Admin/js/off-canvas.js"></script>
<script src="/Public/Admin/js/main.js"></script>
<script src="/Public/Admin/js/panel.js"></script>

<script src="/Public/Admin/js/components.js"></script>
<script src="/Public/Admin/vendor/slider/bootstrap-slider.js"></script>
<script src="/Public/Admin/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="/Public/Admin/js/feed.js"></script>

<script src="/Public/Admin/js/common.js"></script> 
<!-- page special js plugin here -->
<script type="text/javascript" src="/Public/Plugin/uploadify/jquery.uploadify.min.js"></script>

<script>
  var pos = "<?php echo ($pos); ?>";
  $(function() {
	setTimeout(function() {
		 var sid = "<?php echo session_id();?>";
		    $('#upload').uploadify({
		      'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
		      'uploader'      :    "<?php echo U('Base/uploadAdBigThumb');?>",
		      'buttonImage'   :    "/Public/Plugin/uploadify/browse-btn.png",
		      'width'         :    "120",
		      'height'        :    "30",
		      'fileTypeDesc'  :    "Image file",
		      'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
		      'formData'      :    {"session_id"  : sid, "pos" : pos},
		      'multi'         :     false,
		      'removeTimeout' :     1,
		      onUploadSuccess :     function(file, data, response) {
		        eval('var data = ' + data);
		        if (data.status == 1) {
		        	$('input[name=big_thumb]').val(data.path.big_thumb);
		        	$('#no-image').attr('src', "/"+data.path.big_thumb);
		        } else {
		         	alert('图片上传失败，请重试...');
		        }
		      }
		    });
	}, 10);
  });

  //小图上传
   $(function() {
   setTimeout(function() {
     var sid = "<?php echo session_id();?>";
        $('#uploadSmallThumb').uploadify({
          'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
          'uploader'      :    "<?php echo U('Base/uploadAdSmallThumb');?>",
          'buttonImage'   :    "/Public/Plugin/uploadify/browse-btn.png",
          'width'         :    "120",
          'height'        :    "30",
          'fileTypeDesc'  :    "Image file",
          'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
          'formData'      :    {"session_id"  : sid, "pos" : pos},
          'multi'         :     false,
          'removeTimeout' :     1,
          onUploadSuccess :     function(file, data, response) {
            eval('var data = ' + data);
            if (data.status == 1) {
              $('input[name=small_thumb]').val(data.path.small_thumb);
              $('#no-image-small').attr('src', "/"+data.path.small_thumb);
            } else {
              alert('图片上传失败，请重试...');
            }
          }
        });
  }, 10);
  });
</script>

</body>
</html>