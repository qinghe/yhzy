<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admFile extends base_adm_controller {
	
	var $view = 'file';
	
	function controller_admFile() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'file' );
	}
	
	function actionIndex() {
		$this->set_pager ( $this->dao );
		$this->setLayout ( $this->view );
	}
	function actionToEdit() {
		$this->setLayout ( $this->view );
	}
	function actionEdit() {
		$fileName = r_filename();
		FLEA::loadHelper ( 'uploader' );
		$uploader = new FLEA_Helper_FileUploader ( );
		if ($uploader->isFileExist ( 'file' )) {
			$file = $uploader->getFile ( 'file' );
			$ext = $file->getExt();
			if($ext != 'php' && $ext != 'exe'){
				$fileName .= '.' . $ext;
				if ($file->move ( UPLOAD . 'file' . DS . $fileName )){
					$ob ['file'] = $fileName;
					$ob ['name'] = $_POST ['name'];
					$this->dao->save ( $ob );
					js_alert('编辑成功', NULL, $this->_url ());
				}else
					js_alert ( '上传失败', NULL, $this->_url ( 'toEdit' ) );
			}
		} else
			js_alert ( '请选择上传文件', NULL, $this->_url ( 'toEdit' ) );
	}
	function actionDel() {
		$this->deletes();
	}
}
?>
