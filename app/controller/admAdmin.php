<?php
/**
 * 管理员管理
 */
FLEA::loadClass ( 'base_adm_controller' );
class controller_admAdmin extends base_adm_controller {
	
	var $view = 'admin';
	
	function controller_admAdmin() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'admin' );
	}
	
	function actionIndex() {
		$this->s_assign ( 'ads', $this->dao->findAll () );
		$this->setLayout ($this->view);
	}
	function actionToAdd() {
		$this->setLayout($this->view);
	}
	function actionAdd() {
		if (empty ( $_POST ['name'] ) || strlen ( $_POST ['name'] ) > 20)
			js_alert ( '用户名为空或过长', '', $this->_url ( 'toAdd' ) );
		elseif (empty ( $_POST ['pass'] ) || strlen ( $_POST ['pass'] ) > 20)
			js_alert ( '密码为空或过长', '', $this->_url ( 'toAdd' ) );
		elseif ($_POST ['pass'] != $_POST ['rePass'])
			js_alert ( '两次密码不一致', '', $this->_url ( 'toAdd' ) );
		elseif ($this->dao->find ( array ('name' => $_POST ['name'] ) ) != NULL)
			js_alert ( '登陆名已存在', '', $this->_url ( 'toAdd' ) );
		else {
			$array = array ('name' => $_POST ['name'], 'pass' => md5 ( $_POST ['pass'] ) );
			cScript ( $this->_url (), $this->dao->save ( $array ), '添加' );
		}
	}
	function actionToUpdatePass(){
		if(!empty($_REQUEST['id'])){
			$ob = $this->dao->find($_REQUEST['id']);
			if($ob != null){
				$this->s_assign('ob', $ob);
				$this->setLayout($this->view);
			}
		}
	}
	function actionUpdatePass(){
		if(empty($_POST['pass']))
			js_alert('密码不能为空', NULL, $this->_url('toUpdatePass', array('id' => $_REQUEST['id'])));
		elseif ($_POST['pass'] != $_POST['rePass'])
			js_alert('两次密码不一致', NULL, $this->_url('toUpdatePass', array('id' => $_REQUEST['id'])));
		else{
			if(!empty($_REQUEST['id'])){
				$ob = $this->dao->find($_REQUEST['id']);
				if($ob != null){
					$ob['pass'] = md5 ($_POST['pass']);
					$this->dao->update($ob);
					js_alert('修改成功', NULL, $this->_url());
				}
			}
		}
	}
	function actionDel() {
		$this->deletes();
	}
}
?>
