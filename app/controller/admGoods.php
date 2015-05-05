<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admGoods extends base_adm_controller {
	
	var $view = 'goods';
	var $para;
	
	function controller_admGoods() {
		parent::base_adm_controller ();
		$this->para = array('page' => $_REQUEST['page'], 'gc_idsea' => $_REQUEST['gc_idsea']);
		
		$this->dao = get_model ( 'goods' );
		$goodsCate = get_model ( 'goodsCate' );
		$this->s_assign ( 'gcs', $goodsCate->findSuper() );
	}
	
	function actionIndex() {
		$array = array();
		if(!empty($_REQUEST['gc_idsea']))
			$array['gc_id'] = $_REQUEST['gc_idsea'];
		$this->set_pager ( $this->dao, $array, 'createtime desc' );
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
			if ($ob ['photo'] != NULL)
				$photoName = $ob ['photo'];
		}
		upload_photo ( 'goods', $photoName );
		$ob ['gc_id'] = $_POST ['gc_id'];
		$ob ['name'] = h($_POST ['name']);
		$ob ['photo'] = $photoName;
		$ob ['model'] = h($_POST ['model']);
		$ob ['price'] = h($_POST ['price']);
		$ob ['other'] = clear_js($_POST ['other']);
		cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
	}
	function actionDel() {
		$this->deletes($this->para);
	}
	//----------AJAX----------
	function actionCnumber() {
		$this->cNumber('number');
	}
	function actionUp(){
		$this->cLogic('up');
	}
	function actionIlock(){
		$this->cLogic('ilock');
	}
	function actionNew(){
		$this->cLogic('new');
	}
	function actionHot(){
		$this->cLogic('hot');
	}
}
?>
