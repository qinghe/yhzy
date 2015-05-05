<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admPhotoC extends base_adm_controller {
	
	var $view = 'photoC';
	var $parameter;
	
	function controller_admPhotoC() {
		parent::base_adm_controller ();
		$this->parameter = array ('pc_id' => $_REQUEST ['pc_id'] );
		
		$this->dao = get_model ( 'photo' );
		
		$photoCate = get_model ( 'photoCate' );
		$pc = $photoCate->find ($_REQUEST ['pc_id']);
		if($pc == NULL)
			exit();
		$this->s_assign ( 'pc', $pc );
	}
	
	function actionIndex() {
		$this->set_pager ( $this->dao, array ('pc_id' => $_REQUEST ['pc_id'] ), 'createtime desc' );
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
		upload_photo ( 'photo', $photoName );
		$ob ['pc_id'] = $_REQUEST ['pc_id'];
		$ob ['photo'] = $photoName;
		$ob ['name'] = h($_POST ['name']);
		$ob ['fun'] = $_POST ['fun'];
		$ob ['other'] = clear_js($_POST ['other']);
		cScript ( $this->_url ( 'index', $this->parameter ), $this->dao->save ( $ob ), '编辑' );
	}
	function actionDel() {
		$this->deletes($this->parameter);
	}
	
	//----------AJAX----------
	function actionCnumber() {
		$this->cNumber('number');
	}
	function actionUp(){
		$this->cLogic('up');
	}
}
?>