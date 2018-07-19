<?php
/**
 * 版本编号：1.0
 * 修改日期：2018-02-24
 * 修改人员：乔小兰
 */

define('CONF', [
    /*Mysql configuration*/
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
//	'DB_HOST' => '192.168.1.5',
    'DB_USER' => 'root',
    'DB_PWD' => '',
//	'DB_NAME' => '20160905',
	'DB_NAME' => 'ftw818',
//	'DB_NAME' => 'runningdb_reorg',
    'DB_PORT' => 3306,
    'DB_CHARSET' => 'utf8',
    'DB_PREFIX' => 'ig_',
    /*Memcache configuration*/
    'DATA_CACHE_TYPE' => 'Memcache',
    'PERSISTENTID' => 'mlm_cache',
    'MEMCACHED_HOST' => '127.0.0.1',
    'MEMCACHED_PORT' => '11211',
    'MEMECACHED_WEIGHT' => 0,
    'DATA_CACHE_TIMEOUT' => 3600,
    /*WeChat configuration*/
    'WE_CHAT' => ['AppID', 'AppSecret', 'Token', 'EncodingAESKey'],
	'GUID_SALT' => 'liuhaonigeerhuo',
		
]);
const DB_OPR = [
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_USER' => 'root',
    'DB_PWD' => 'root',
    'DB_NAME' => 'cron',
    'DB_PORT' => 3306,
    'DB_CHARSET' => 'utf8',
];