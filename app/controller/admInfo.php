<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admInfo extends base_adm_controller {
	
	var $view = 'info';
	var $para;
	
	function controller_admInfo() {
		parent::base_adm_controller ();
		$this->para = array ('page' => $_REQUEST ['page'], 'seaname' => $_REQUEST ['seaname'] );
		$this->dao = get_model ( 'info' );
		$infoCate = get_model ( 'infoCate' );
		$this->s_assign ( 'ics', $infoCate->findAll () );
	}
	
	function actionIndex() {
		$array = array ();
		if (! empty ( $_REQUEST ['seaname'] ))
			array_push ( $array, array ("name", "%" . $_REQUEST ['seaname'] . "%", "like" ) );
		$this->set_pager ( $this->dao, $array, 'createtime desc' );
		$this->setLayout ( $this->view );
	}
	
	function actionToEdit() {
		if (! empty ( $_REQUEST ['id'] ))
			$this->s_assign ( 'ob', $this->dao->find ( $_REQUEST ['id'] ) );
		$this->setLayout ( $this->view );
	}
	function actionEdit() {
		if (empty ( $_POST ['name'] ) || strlen ( $_POST ['name'] ) > 255)
			js_alert ('名称不能为空，并且不能超过60字符', NULL, $this->_url('toEdit', array('id' => $_REQUEST['id'])));
		else {
			if (! empty ( $_POST ['id'] ))
				$ob = $this->dao->find ( $_POST ['id'] );
			$ob ['name'] = h($_POST ['name']);
			$ob ['other'] = clear_js($_POST ['other']);
			$ob ['ic_id'] = (int)$_POST ['ic_id'];
			if (! empty ( $_POST ['createtime'] ))
				$ob ['createtime'] = $_POST ['createtime'];
			cScript ( $this->_url ( 'index', $this->para ), $this->dao->save ( $ob ), '编辑' );
		}
	}
	function actionDel() {
		$this->deletes();
	}
	//----------AJAX----------
	function actionCnumber() {
		$this->cNumber('number');
	}
}
?>