<?php
FLEA::loadClass ( 'base_mai_controller' );
class base_mai_userController extends base_mai_controller {
	
	function base_mai_userController(){
		parent::base_mai_controller ();
	}
	
	function _beforeExecute(){
		if(empty($_SESSION['userSession'])){
			js_alert('请先登陆', NULL, url('default','loginTo'));
			exit();
		}
		$this->s_assign('act', $this->_actionName);
		$this->s_assign('con', $this->_controllerName);
	}
	function _afterExecute(){
	}
	
	function setLayout($mainPage){
		$this->s_assign('mainPage', $mainPage);
		$this->s_display('main/user/common/main.html');
	}
}