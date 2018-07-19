<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
date_default_timezone_set('PRC');

define('HOST', rtrim(str_replace('\\', '/', 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME'])), '/'));
define('__WWW__', HOST);
define('__PUBLIC__', HOST . '/public');
define('__UPLOAD__', HOST . '/upload');
define('__UPLOAD_PATH__', str_replace('\\', '/', dirname(__FILE__)) . '/upload');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');
// 绑定Admin模块到当前入口文件
// define('BIND_MODULE','Admin');
// 引入ThinkPHP入口文件
define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)));
define('INS_DEBUG', true);

header("Content-type:text/html;charset=utf-8");
$cfp = str_replace(":$_SERVER[SERVER_PORT]", '', "./Common/Conf/Config/$_SERVER[HTTP_HOST].php"); //config_file_path
echo($cfp);
if (file_exists($cfp)) {
    require_once $cfp;
} else {
    exit('网站维护中，请稍后再进行访问。。。。。');
}
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单