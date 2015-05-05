<?php
define('ROOT', dirname(__FILE__).'/');
define('APP', ROOT . 'app/');
define('UPLOAD', APP . 'upload/');
require_once 'lib/FLEA/FLEA.php';
require_once APP . 'util/common.php';
//require_once APP . 'util/sqlserver.php';
//FLEA::setAppInf('displayErrors',false);
FLEA::setAppInf('dbTablePrefix', 'my_');
FLEA::loadAppInf(
/*	array (
		'dbDSN' => array (
			'driver' => 'mysql',
			'host' => '127.0.0.1',
			'login' => 'dien_f',
			'password' => 'dien',
			'database' => 'dien'
		)
	)*/
	array (
		'dbDSN' => array (
			'driver' => 'mysql',
			'host' => '122.102.12.52',
			'login' => 'dlhaicheng',
			'password' => 'QeNHT9C5iy',
			'database' => 'dlhaicheng'
            )
          )
);
//FLEA::setAppInf('urlMode', URL_REWRITE);
FLEA::setAppInf('controllerAccessor', 'c');
FLEA::setAppInf('actionAccessor', 'a');
FLEA::setAppInf('logEnabled', false);//关闭日志记录
FLEA::loadAppInf(APP.'config/smarty_config.php');
FLEA::import(APP);
FLEA::init();
run();
?>
