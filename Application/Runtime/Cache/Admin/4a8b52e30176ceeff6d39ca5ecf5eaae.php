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
<style>
	#table  td {
	 	 vertical-align:middle;
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
                                <span>广告管理</span>
                            </a>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "article"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Article/index');?>">
                                <i class="fa fa-file"></i>
                                <span>文章管理</span>
                            </a>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "enroll"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Enroll/index');?>">
                                <i class="fa fa-plus"></i>
                                <span>报名管理</span>
                            </a>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "question"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Question/index');?>">
                                <i class="fa fa-question"></i>
                                <span>帮助中心</span>
                            </a>
                        </li>

                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "type"): ?>active<?php endif; if((strtolower(CONTROLLER_NAME)) == "link"): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-gears"></i>
                                <span>设置</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li >
                                    <a href="<?php echo U('Type/index');?>">
                                        <span>项目类别</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo U('Link/index');?>">
                                        <span>其他</span>
                                    </a>
                                </li>
                            </ul>
                        </li> 

                       <!--  <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "theater"): ?>active<?php endif; ?>">
                           
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
                        </li> -->
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

                <header class="header navbar bg-default">
                    <ul class="nav navbar-nav">
                        <li <?php if($_GET['number'] == 1 || !$_GET['number']): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index', array('number' => 1));?>">1号广告位</a>
                        </li>
                        <li <?php if($_GET['number'] == 2): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index', array('number' => 2));?>">2号广告位</a>
                        </li>
                        <li <?php if($_GET['number'] == 3): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index', array('number' => 3));?>">3号广告位</a>
                        </li>
                        <li <?php if($_GET['number'] == 4): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index', array('number' => 4));?>">4号广告位</a>
                        </li>
                        <li <?php if($_GET['number'] == 5): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index', array('number' => 5));?>">5号广告位</a>
                        </li>
                        <li <?php if($_GET['number'] == 6): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index', array('number' => 6));?>">6号广告位</a>
                        </li>
                    </ul>
                </header>

                <div class="content-wrap">
                	<div class="row mg-b">
                        <div class="col-xs-12">
                            <section class="panel">
                                <header class="panel-heading">
                                	<a class="btn btn-success btn-xs" href="<?php echo U('AdManage/add', ['number' => $_GET['number']]);?>">添加广告</a>
                                </header>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="table" class="table table-bordered" data-sortable="" data-sortable-initialized="true">
                                            <thead>
                                                <tr>
                                                    <th>缩略图</th>
                                                    <th>链接地址</th>
                                                    <th>描述</th>
                                                    <th>排序</th>
                                                    <th>操作</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php if(!empty($ad)): if(is_array($ad)): foreach($ad as $key=>$v): ?><tr>
                                                            <td>
                                                                <img src="/<?php echo ($v["thumb"]); ?>" width="140" height="90">
                                                            </td>
                                                            <td><?php echo ($v["url"]); ?></td>
    	                                                    <td><?php echo ($v["desc"]); ?></td>
    	                                                    <td><?php echo ($v["sort"]); ?></td>
    	                                                    <td>
    	                                                    	<a href="<?php echo U('AdManage/edit', array(number => $v['number'],'id' => $v['id']));?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="编辑"><span class="fa fa-edit text-success"></span></a>&nbsp;
                                                 			  	<a class="del" href="<?php echo U('AdManage/del', array(number => $v['number'],'id' => $v['id']));?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="删除"><span class="fa fa-trash-o text-success"></span></a>
    	                                                    </td>
    	                                                </tr><?php endforeach; endif; ?>
                                                <?php else: ?>
                                                    <tr><td colspan="5" align="center" ><br><h4 style="color:#999;">暂时没有内容~</h4></td></tr><?php endif; ?>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
<!-- page special js plugin here -->
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
</body>

</html>