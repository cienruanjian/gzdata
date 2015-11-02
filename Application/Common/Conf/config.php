<?php
return array(

	// +----------------------------------------------------------------------------
	// | 数据库配置                                     							
	// +----------------------------------------------------------------------------
	
	'DB_TYPE'               =>  'mysql',            // 数据库类型
    'DB_HOST'               =>  '202.105.179.59',   // 服务器地址
    'DB_NAME'               =>  'db_bdbmc',         // 数据库名
    'DB_USER'               =>  'sql_bdbmc',        // 用户名
    'DB_PWD'                =>  'c2VcYlp7WYjv',     // 密码
    'DB_PORT'               =>  '3306',             // 端口
    'DB_PREFIX'             =>  'cns_',             // 数据库表前缀


	'MODULE_ALLOW_LIST'     => array('Home','Admin'),
	'DEFAULT_MODULE'        => 'Home', 
	'URL_MODEL'             => '2',   
	'URL_HTML_SUFFIX'       =>  '',                  // URL伪静态后缀设置

	'UPLOAD_PATH'           => 'Upload/',
 
	'ALLOW_UPDATE_TIME'     => 3                      //允许修改报名资料的次数 
); 