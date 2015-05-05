<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admContact extends base_adm_controller{
		var $view ='contact';
		function controller_admcontact() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'contact' );
		}
		function actionIndex(){
			$main = $this->dao->find( $_REQUEST ['ic_id'] );
			if ($main != null) {
				$this->s_assign ( 'ob', $main );
				}
		$this->setLayout ( $this->view );
		}
		function actionedit(){
			$ob = $this->dao->find ( $_REQUEST ['id'] );
			$ob ['other'] = clear_js($_POST ['other']);
			cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
		}
}
?>