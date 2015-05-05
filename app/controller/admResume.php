<?php
FLEA::loadClass('base_adm_controller');
class controller_admResume extends base_adm_controller{
	
	var $view = 'resume';
	
	function controller_admResume() {
		parent::base_adm_controller();
		$this->dao= get_model('resume');
	}
	function actionIndex() {
		$this->set_pager($this->dao, null, 'createtime desc');
		$this->setLayout ($this->view);
	}
	function actionX(){
		$this->s_assign('re', $this->dao->find((int)$_GET['id']));
		$this->setLayout($this->view);
	}
	
	function actionDel() {
		$this->deletes();
	}
}
?>
