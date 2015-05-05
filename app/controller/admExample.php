<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admExample extends base_adm_controller {
	
	var $view = 'example';
	
	function controller_admExample() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'example' );
		$exampleCate = get_model('exampleCate');
		$this->s_assign('ec', $exampleCate->find($_REQUEST['ec_id']));
	}
	
	function actionIndex() {
		$this->set_pager ( $this->dao, array('ec_id' => $_REQUEST['ec_id']), 'createtime desc' );
		$this->setLayout ( $this->view );
	}
	function actionToEdit() {
		if (! empty ( $_REQUEST ['id'] ))
			$this->s_assign ( 'ob', $this->dao->find ( $_REQUEST ['id'] ) );
		$this->setLayout ( $this->view );
	}
	function actionEdit() {
		$photoName = r_filename () . '.jpg';
		if (! empty ( $_POST ['id'] )) {
			$ob = $this->dao->find ( $_POST ['id'] );
			if ($ob['photo'] != NULL)
				$photoName = $ob ['photo'];
		} 
		upload_photo ( 'example', $photoName );
		$ob ['photo'] = $photoName;
		$ob ['ec_id'] = h($_REQUEST['ec_id']);
		$ob ['name'] = h($_POST ['name']);
		$ob ['other'] = clear_js($_POST ['other']);
		cScript ($this->_url('index', array('ec_id' => $_REQUEST['ec_id'])), $this->dao->save ( $ob ), '编辑' );
	}
	function actionDel() {
		$this->deletes(array('ec_id' => $_REQUEST['ec_id']));
	}
}
?>