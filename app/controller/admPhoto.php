<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admPhoto extends base_adm_controller {
	
	var $view = 'photo';
	
	function controller_admPhoto() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'photo' );
		$photoCate = get_model ( 'photoCate' );
		$this->s_assign ( 'pcs', $photoCate->findAll () );
	}
	
	function actionIndex() {
		if(!empty($_REQUEST['pc_id']))
		{
		$array['pc_id'] =$_REQUEST['pc_id'];
		}
		if(!empty($_REQUEST['up']))
		{
		$array['up'] =$_REQUEST['up'];
		}
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
			upload_photo ( 'photo', $photoName );
			$ob ['photo'] = $photoName;
			$ob ['name'] = h($_POST ['name']);
			$ob ['from'] = h($_POST ['from']);
			$ob ['fun'] = $_POST ['fun'];
			$ob ['hit'] = $_POST ['hit'];
			//setxml();
			cScript ( $this->_url ('index',array('pc_id'=>$_REQUEST['pc_id'],'up'=>$_REQUEST['up'])), $this->dao->save ( $ob ), '编辑' );
	}
	function actionDel() {
		$this->deletes();
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
