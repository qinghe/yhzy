<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admJianbao extends base_adm_controller {
	
	var $view = 'jianbao';
	
	function controller_admJianbao(){
		parent::base_adm_controller ();
		$this->dao = get_model('jianbao' );
	}
	function actionIndex() {
		$this->set_pager($this->dao, NULL, 'createtime desc');
		$this->setLayout ($this->view);
	}
	function actionX(){
		if(!empty($_REQUEST['id'])){
			$ob = $this->dao->find($_REQUEST['id']);
			if($ob != NULL){
				$this->s_assign('ob', $ob);
				$this->setLayout($this->view);
			}
		}
	}
    function actiontoEdit(){
		//if (! empty ( $_REQUEST ['id'] ))
		$jianbao = get_model('jianbaogeshi' );
		$this->s_assign ( 'ob', $jianbao->find ( array('id'=>'1') ) );
		$this->setLayout ( $this->view );
	}
    function actionEdit(){
        if (empty ( $_POST ['name'] ) || strlen ( $_POST ['name'] ) > 255)
			js_alert ('名称不能为空，并且不能超过255字符', NULL, $this->_url('toEdit', array('id' => $_REQUEST['id'], 'ic_id' => $_REQUEST ['ic_id'])));
		else{
			$ob ['us_id'] = h($_POST ['us_id']);
			$ob ['name'] = h($_POST ['name']);
			$ob ['other'] = clear_js($_POST ['other']);
			if (! empty ( $_POST ['createtime'] ))
				$ob ['createtime'] = $_POST ['createtime'];
			cScript ( $this->_url ( 'index', $this->parameter ), $this->dao->save ( $ob ), '编辑' );
		}
	}
    function actiontoUpdate(){
        if(!empty($_REQUEST['id'])){
			$ob = $this->dao->find($_REQUEST['id']);
			if($ob != NULL){
				$this->s_assign('ob', $ob);
				$this->setLayout($this->view);
			}
		}
	}
    function actionUpdate(){
        if(!empty($_REQUEST['id'])){
			$ob = $this->dao->find($_REQUEST['id']);
			if($ob != NULL){
		    	if (empty ( $_POST ['name'] ) || strlen ( $_POST ['name'] ) > 255)
		        	js_alert ('名称不能为空，并且不能超过255字符', NULL, $this->_url('toEdit', array('id' => $_REQUEST['id'], 'ic_id' => $_REQUEST ['ic_id'])));
	         	else{
	         		$ob ['us_id'] = h($_POST ['us_id']);
		        	$ob ['name'] = h($_POST ['name']);
		         	$ob ['other'] = clear_js($_POST ['other']);
		        	if (! empty ( $_POST ['createtime'] ))
		        		$ob ['createtime'] = $_POST ['createtime'];
		        	cScript ( $this->_url ( 'index', $this->parameter ), $this->dao->save ( $ob ), '编辑' );
	         	}
			}
		}
	}
	function actionDel() {
		$this->deletes();
	}
}
?>