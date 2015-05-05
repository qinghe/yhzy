<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admOrder extends base_adm_controller {
	
	var $view = 'mgr/order.html';
	
	function controller_admOrder() {
		parent::base_adm_controller ();
		$this->orderInfo = get_model('orderInfo');	
	}
	
	function actionIndex() {
		$this->set_pager($this->orderInfo, NULL, 'oi_createtime desc');
		$this->s_display ($this->view);
	}
	function actionState() {
		$ob = $this->orderInfo->find ( $_REQUEST ['id'] );
		$ob ['oi_state'] = 1;
		cScript ( $this->_url (), $this->orderInfo->save ($ob), '操作' );
	}
	function actionDetails() {
		$this->s_assign('oi', $this->orderInfo->find ( $_REQUEST ['id'] ));
		$this->s_display($this->view);
	}
}
?>