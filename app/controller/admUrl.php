<?php
/**
 * 文字链接
 */
FLEA::loadClass ( 'base_adm_crudController' );
class controller_admUrl extends base_adm_crudController {
	
	function controller_admUrl() {
		parent::base_adm_crudController();
		$this->dao = get_model ( 'url' );
		$this->view = 'url';
	}
	
	function actionEdit() {
		if (empty ( $_POST ['url'] ) || empty ( $_POST ['name'] ))
			js_alert ( '请正确填写信息', NULL, $this->_url ( 'toEdit', array ('id' => $_POST ['id'] ) ) );

		FLEA::loadHelper ( 'uploader' );
			$uploader = new FLEA_Helper_FileUploader ( );

			if($uploader->isFileExist ( 'photo' )){
				$file = $uploader->getFile ( 'photo' );
				$ext = $file->getExt();
			}
			$photoName = r_filename () . '.jpg';

			//$photoName = r_filename () .'.'. $ext ;
			if (! empty ( $_POST ['id'] )) {
				
				$ob = $this->dao->find ( $_POST ['id'] );

				if ($ob['photo'] != NULL){
					
					$ob ['photo'] = $photoName;
				}
			} 
			
			$haha= upload_photo ( 'info', $photoName ,'photo');
			
		if (! empty ( $_POST ['id'] ))
			$ob = $this->dao->find ( $_POST ['id'] );
		$ob ['url'] = $_POST ['url'];
		$ob ['name'] = $_POST ['name'];
		$ob ['from'] = $_POST ['from'];
		$ob ['photo'] = $photoName;

		cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
	}
}
?>