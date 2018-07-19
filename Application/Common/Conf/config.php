<?php
return array(
	//'配置项'=>'配置值'
	//连接数据库
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	// 'DB_NAME'   => 'class', // 数据库名
	// 'DB_USER'   => 'root', // 用户名
	// 'DB_PWD'    => 'root', // 密码
	// 'DB_PORT'   => 3306, // 端口
	// 'DB_PARAMS' =>  array(), // 数据库连接参数
	// 'DB_PREFIX' => 'tp_', // 数据库表前缀 
	// 'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    // 'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存(是否检查文件的大小写 对Windows平台有效)
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'URL_MODEL'          => '2', //URL模式 1,显示的URL格式
    'URL_HTML_SUFFIX'       =>  'html|asp|shtml',  // URL伪静态后缀设置
    // 'SHOW_PAGE_TRACE' =>true,  
    //页面Trace功能就是ThinkPHP提供给开发人员的一个用于开发调试的辅助工具。
    //可以实时显示当前页面的操作的请求信息、运行情况、SQL执行、错误提示等，并支持自定义显示。
    'DEFAULT_MODULE'       =>    'Home', //设置模块为Admin,默认为Home
    
	
);