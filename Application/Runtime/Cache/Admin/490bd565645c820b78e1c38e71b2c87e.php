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
                    		<section>
                                <ul id="myTab2" class="nav nav-tabs">
                                    <li <?php if($_GET['n'] == 1 or $_GET['n'] == ''): ?>class="active"<?php endif; ?>>
                                        <a href="<?php echo U('Enroll/index?n=1');?>" >企业</a>
                                    </li>
                                    <li <?php if($_GET['n'] == 2): ?>class="active"<?php endif; ?>>
                                        <a href="<?php echo U('Enroll/index?n=2');?>" >个人/团体</a>
                                    </li>
                                </ul>
                                <section class="panel">
                                    <div class="panel-body">
                                        <div id="myTabContent2" class="tab-content">
                                          <!-- content -->
                                            <div class="tab-pane active">
                                                 <!-- content -->
                                                 <section class="panel">
												    <div class="panel-body  no-padding">
												    	<form action="<?php echo U('Excel/index');?>">
												        <table class="table table-bordered table-hover no-margin">
												            <thead>
												                <tr>
												                	<th align="center">
												                		<input type="checkbox" id="title-table-checkbox"/>
												                	</th>
												                    <th>项目编号</th>
												                    <th>项目名称</th>
												                    <th>报名时间</th>
												                    <th>项目负责人</th>
												                    <th>负责人电话</th>	
												                    <th>状态</th>
												                    <th>操作</th>
												                </tr>
												            </thead>
												            <tbody>
												            	<?php if(!empty($lists)): if(is_array($lists)): foreach($lists as $key=>$v): ?><tr>
												                    	<td alitn="center"><input name="id[]" value="<?php echo ($v["id"]); ?>" type="checkbox" /></td>
												                        <td><?php echo ($v["number"]); ?></td>
												                        <td><?php echo ($v["name"]); ?></td>
												                        <td><?php echo (date("Y-m-d", $v["create_at"])); ?></td>
												                        <td><?php echo ($v["duty_name"]); ?></td>
												                        <td><?php echo ($v["duty_phone"]); ?></td>
												                        <td>
												                        	<?php if(($v["status"]) == "0"): ?><a href="<?php echo U('Enroll/check', ['id' => $v['id'], 'set' => 1, 'p' => $_GET['p']]);?>" class="btn btn-danger btn-xs">未审核</a><?php endif; ?>
																			<?php if(($v["status"]) == "1"): ?><a href="<?php echo U('Enroll/check', ['id' => $v['id'], 'set' => 0, 'p' => $_GET['p']]);?>" class="btn btn-success btn-xs">已审核</a><?php endif; ?>
												                        </td>
												                        <td>
												                        	<a class="detail" href="javascript:;" show-url="<?php echo U('Enroll/detail', array('id' => $v['id']));?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="查看详细信息"><i class="fa fa-eye"></i></a>
												                        	&nbsp;
												                        	<a href="<?php echo U('Excel/index', array('id' => $v['id'], 'n' => $v['team_nature']));?>"  data-toggle="tooltip" data-placement="top" title="" data-original-title="导出到excel"><i class="fa fa-file"></i></a>
												                        </td>
												                    </tr><?php endforeach; endif; ?>
												                <?php else: ?>
												                	<tr><td colspan="8" align="center" ><br><h4 style="color:#999;">暂时没有内容~</h4></td></tr><?php endif; ?>
												            </tbody>
												        </table>
												       	<input type="hidden" name="n" value="<?php echo ($_GET['n']); ?>">
												        </form>
												    </div>
												    <div class="panel-footer no-border no-padding">
												    	<div class="page" style="padding-top:5px;">
												    		<?php echo ($page); ?>
												    	</div>
												    	<div style="clear:both"></div>
												    	<?php if(!empty($lists)): ?><div style="text-align:right; margin-top:10px;">
												            	<button id="btn-excel" class="btn btn-success btn-sm"><i class="fa fa-cloud-download"></i> 导出到EXCEL</button>
													    	</div><?php endif; ?>
												    </div>
												</section>
                                            </div>
                                            <!-- contentend -->
                                        </div>
                                    </div>
                                </section>
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
<script src="/Public/Plugin/layer/layer.js"></script>
<script>
$('.detail').click(function() {
	var url = $(this).attr('show-url');
	layer.open({
        type: 2,
        title: '报名详细信息',
        shadeClose: true,
        shade: false,
        maxmin: true, //开启最大化最小化按钮
        area: ['80%', '90%'],
        content: url
    });
});
//全选
$('#title-table-checkbox').click(function() {
	var isChecked = $(this).prop("checked");
	$("table tbody input[type='checkbox']").prop("checked", isChecked);
});
$('#btn-excel').click(function() {
	var lock = 1;
	$('table tbody input[type=checkbox]').each(function() {
		if ($(this).prop("checked")) {
			lock = 0;
			return;
		}
	});
	if (lock) {
		layer.msg('请勾选需要导出的数据');
	} else {
		$('form').submit();
	}
});

</script>
</body>

</html>