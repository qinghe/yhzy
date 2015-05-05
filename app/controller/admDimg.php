<?php
/**
 * 幻灯片图片管理
 */
FLEA::loadClass ( 'base_adm_controller' );
class controller_admDimg extends base_adm_controller {
	
	var $view = 'dimg';
	
	function controller_admDimg() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'dimg' );
	}
	
	function actionIndex() {
		$this->set_pager ( $this->dao );
		$this->setLayout ( $this->view );
	}
	function actionToAdd() {
		$this->setLayout ( $this->view );
	}
	function actionAdd() {
		$upload = upload_photo ( 'dimg' );
		if ($upload) {
			$di ['name'] = $_POST ['name'];
			$di ['url'] = $_POST ['url'];
			$di ['photo'] = $upload;
			cScript ( $this->_url (), $this->dao->save ( $di ), '添加' );
		} else
			js_alert ( '图片上传失败', null, $this->_url() );
	}
	function actionDel() {
		if (! empty ( $_GET ['id'] )) {
			$ob = $this->dao->find ( $_GET ['id'] );
			if ($ob != null) {
				remove_file('dimg', $ob ['photo']);
				$this->dao->removeByPkv ( $_GET ['id'] );
				redirect ($this->_url ());
			}
		}
	}
}
?>
