<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admUser extends base_adm_controller {
	
	var $view = 'user';
	
	function controller_admUser() {
		parent::base_adm_controller ();
		$this->dao = get_model('user');
	}
	
	function actionIndex() {
		$this->set_pager($this->dao, NULL, 'createtime desc');
		$this->setLayout ($this->view);
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
			$ob ['pass'] = h($_POST ['pass']);
			$ob ['realname'] = h($_POST ['realname']);
			$ob ['mail'] = h($_POST ['mail']);
			$ob ['phone'] = h($_POST ['phone']);
			$ob ['number'] = h($_POST ['number']);
			$ob ['company'] = h($_POST ['company']);
			cScript ( $this->_url ( 'index', $this->para ), $this->dao->save ( $ob ), '编辑' );
		}
	}
	
	function actionDel() {
		$this->deletes();
	}
}
?>