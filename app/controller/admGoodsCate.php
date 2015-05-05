<?php
FLEA::loadClass('base_adm_controller');
class controller_admGoodsCate extends base_adm_controller {
	
	var $view = 'goodsCate';
	
	function controller_admGoodsCate() {
		parent::base_adm_controller();
		$this->dao = get_model( 'goodsCate' );
	}
	function actionIndex() {
		$this->s_assign ( 'obs', $this->dao->findSuper());
		$this->setLayout ( $this->view );
	}
	function actionToEdit() {
		$this->s_assign ( 'obs', $this->dao->findSuper() ); //一级类别
		if (! empty ( $_REQUEST ['id'] )) {
			$ob = $this->dao->find ( $_REQUEST ['id'] );
			if ($ob != NULL)
				$this->s_assign ( 'ob', $ob );
		}
		$this->setLayout ( $this->view );
	}
	function actionEdit() {
		if (empty ( $_POST ['name'] ))
			cScript ( $this->_url ( 'toEdit', array ('id' => $_REQUEST ['id'] ) ), '名称不能为空' );
		elseif(!empty($_REQUEST['id']) && $_REQUEST['id'] == $_POST['pid'])
			js_alert('父类不能选择自己', NULL, $this->_url('toEdit', array ('id' => $_REQUEST ['id'] )));
		else {
			if (! empty ( $_REQUEST ['id'] ))
				$ob = $this->dao->find ( (int)$_REQUEST ['id'] );
			$ob ['name'] = $_POST ['name'];
			$ob ['pid'] = $_POST ['pid'];
			cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
		}
	}
	function actionDel() {
		cScript ( $this->_url (), $this->dao->removeByPkv ( ( int ) $_REQUEST ['id'] ) );
	}
}
?>