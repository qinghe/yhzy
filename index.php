<?php
error_reporting(0);
define('ROOT', dirname(__FILE__).'/');
define('APP', ROOT . 'app/');
define('UPLOAD', APP . 'upload/');
require_once 'lib/FLEA/FLEA.php';
require_once APP . 'util/common.php';

//require_once APP . 'util/sqlserver.php';
//FLEA::setAppInf('displayErrors',false);
FLEA::setAppInf('dbTablePrefix', 'my_');
FLEA::loadAppInf(
	array (
          /*
		'dbDSN' => array (
			'driver' => 'mysql',
			'host' => '218.61.194.84 ',
			'login' => 'tuolilu',
			'password' => 'ltQc8H8aIe',
			'database' => 'tuolilu'
            )
            */
				'dbDSN' => array (
			'driver' => 'mysql',
			'host' => 'localhost',
			'login' => 'xiaoxiao',
			'password' => 'xsd2012',
			'database' => 'xiaoxiao'
            )
          )
);
//FLEA::setAppInf('urlMode', URL_REWRITE);
FLEA::setAppInf('controllerAccessor', 'c');
FLEA::setAppInf('actionAccessor', 'a');
FLEA::setAppInf('logEnabled', true);//关闭日志记录
FLEA::loadAppInf(APP.'config/smarty_config.php');
FLEA::import(APP);
FLEA::init();
run();
?>
