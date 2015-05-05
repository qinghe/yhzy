<?php
/**
 * 管理员管理
 */
FLEA::loadClass ( 'base_adm_controller' );
class controller_admIndex extends base_adm_controller {

	function controller_admAdmin() {
		parent::base_adm_controller ();
	}

	function actionIndex() {
		$admin = get_model('admin');
		$info['rip'] = $_SERVER["REMOTE_ADDR"];
		$info['sip'] = $_SERVER['SERVER_ADDR'];
		$info['os'] = PHP_OS;
		$info['service'] = $_SERVER['SERVER_SOFTWARE'];
		$info['php'] = PHP_VERSION;
		$info['mysql'] = mysql_get_server_info();
		$info['upload'] = ini_get('upload_max_filesize');
		$this->s_assign('info', $info);
		$this->setLayout('static/welcome');
	}
	function actionTop(){
		$config = get_model('config');
		$co = $config->find(array('name' => 'name'));
		$this->s_assign('title', $co['value']);
		$this->s_display('mgr/static/top.html');
	}
	function actionLeft(){
		$showmess = get_model ( 'infoCate1' );
		$this->s_assign ( 'cper', $showmess->findAll (array('p_id' => 'x')) );//产品二级
		$this->s_assign ( 'cper1', $showmess->findAll () );//产品二级
		$showmess = get_model ( 'infoCate2' );
		$this->s_assign ( 'cpera', $showmess->findAll (array('p_id' => 'x')) );//产品二级
		$this->s_assign ( 'cperb', $showmess->findAll () );//产品二级
		$this->s_display('mgr/static/left.html');
	}
}
?>
