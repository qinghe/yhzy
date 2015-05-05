<?php
/**
 * 管理员操作
 */
FLEA::loadClass ( 'base_controller' );
class controller_admin extends base_controller {
	
	function controller_admin() {
		parent::base_controller();
		$this->dao = get_model('admin');
	}
	
	function actionIndex() {
		$config = get_model('config');
		$co = $config->find(array('name' => 'name'));
		$this->s_assign('title', $co['value']);
		$this->s_display ( 'mgr/login.html' );
	}
	
	//管理员登陆
	function actionLogin() {
		$imgcode = FLEA::getSingleton ( 'FLEA_Helper_ImgCode' );
		if (empty ( $_POST ['name'] ) || empty ( $_POST ['pass'] ))
			js_alert ( '用户名密码不能为空', '', $this->_url () );
		//elseif (! $imgcode->check ( $_POST ['imgcode'] ))
		//	js_alert ( '验证码不正确', '', $this->_url () );
		else {
			$admin = $this->dao->find ( array ('name' => $_POST ['name'], 'pass' => md5 ( $_POST ['pass'] )) );
			if ($admin == NULL)
				js_alert ( '用户名密码不正确', '', $this->_url () );
			else {
				$_SESSION ['adminSession'] = $admin;
				$admin['lasttime'] = dbOfDate();
				$admin['lastip'] = $_SERVER["REMOTE_ADDR"];
				$this->dao->update($admin);
				$this->s_display ( 'mgr/index.html' );
			}
		}
	}
	function actionExit(){
		if(isset($_SESSION['adminSession']))
			unset($_SESSION['adminSession']);
		redirect($this->_url());
	}
}
?>
