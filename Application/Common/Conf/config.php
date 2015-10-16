<?php
return array(

	// +----------------------------------------------------------------------------
	// | 数据库配置                                     							
	// +----------------------------------------------------------------------------
	
	'DB_TYPE'               =>  'mysql',            // 数据库类型
    'DB_HOST'               =>  '127.0.0.1',        // 服务器地址
    'DB_NAME'               =>  'gzdata',           // 数据库名
    'DB_USER'               =>  'root',             // 用户名
    'DB_PWD'                =>  'root',             // 密码
    'DB_PORT'               =>  '3306',             // 端口
    'DB_PREFIX'             =>  'cns_',             // 数据库表前缀


	'MODULE_ALLOW_LIST'     => array('Home','Admin'),
	'DEFAULT_MODULE'        => 'Home', 
	'URL_MODEL'             => '2',   
	'URL_HTML_SUFFIX'       =>  '',  // URL伪静态后缀设置
);