<?php
$count =6;
function get_count(){
	static $count = 0;
	$count++;
	return $count;
}

echo get_count();
echo get_count();
exit();
error_reporting(0);
define('PROJECT_PRE', '');
defined('YII_DEBUG') or define('YII_DEBUG',false); 
defined('SNS_DEBUG') or define('SNS_DEBUG',false);
defined('SNS_LOG_AUTO') or define('SNS_LOG_AUTO',false);

define('IS_LINE', 0);

$baseFile = dirname(__FILE__);

/**
 * 项目配置文件路径
 */
$configs = $baseFile.'/config/main.php';

/**
 * 引入sns初始化文件
 */  
 
$sns = 'framework/sns.php';
require_once($sns);


/**
 * 构造Sns Web应用
 */
Sns::createSnsWebApplication($configs)->run();