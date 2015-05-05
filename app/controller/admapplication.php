<?php
FLEA::loadClass ( 'base_adm_crudController' );
class controller_admapplication extends base_adm_crudController{
	
	function controller_admapplication() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'application' );
		$this->view = 'application';
	}
	function actionEdit() {
		if (! empty ( $_POST ['id'] ))
			$ob = $this->dao->find ( $_POST ['id'] );
		$ob ['name'] = $_POST ['name'];
		$ob ['number'] = $_POST ['number'];
		$ob ['educ'] = $_POST ['educ'];
		$ob ['job'] = $_POST ['job'];
		$ob ['sex'] = $_POST ['sex'];
		$ob ['money'] = $_POST ['money'];
		$ob ['other'] = $_POST ['other'];
		$ob ['endtime'] = $_POST ['endtime'];
		cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
	}
	
	function actionischeck(){
		$this->cLogic('ischeck');
	}
}
?>