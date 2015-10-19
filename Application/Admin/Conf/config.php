<?php
return array(
	'BACKEND_NAME'        => '云上贵州后台管理系统',
    'USER_AUTH_KEY'       => 'mid',
    'USER_AUTH_GATEWAY'   => 'Login/index',
    'UPLOAD_PATH'         => 'Upload/',
    'UPLOAD_IMG_EXTS'     => array('jpg', 'jpeg', 'gif', 'png'), 

    //缩略图尺寸配置， 健值为编号1-100广告位，101-200文章 如：1 => array(width, height)
    "THUMB_SIZE"          => array(

		1                 => array(1184, 580),    //1号广告位
		2                 => array(588, 385),     //2号广告位
		3                 => array(690, 455),     //3号广告位
		4                 => array(245, 225),     //4号广告位
		5                 => array(245, 225),     //5号广告位
		6                 => array(240, 455),     //6号广告位

        101               => array(140, 130),     //大赛介绍
        102               => array(240, 146)      //大赛咨询
    ),
    
);