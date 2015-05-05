<?php
/**
 * 网站参数配置
 */
FLEA::loadClass ( 'base_adm_controller' );
class controller_admConfig extends base_adm_controller {
	
	function controller_admConfig() {
		parent::base_adm_controller ();
		$this->dao = get_model('config');
	}
	
	function actionIndex() {
		$cos = $this->dao->findAll();
		$ins = array();
		foreach ($cos as $key => $value){
			$ins[$value['name']] = $value['value'];
		}
		$this->s_assign ( 'inis', $ins);
		$this->setLayout ( 'config' );
	}
	function actionEdit() {
		foreach ( $_POST as $key => $value ) {
			$ob = $this->dao->find(array('name' => $key));
			$ob['name'] = $key;
			$ob['value'] = $value;
			$this->dao->save($ob);
		}
		js_alert ( '修改完毕', '', $this->_url () );
	}
}
?>
