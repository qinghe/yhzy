<?php
/**
 * 图文友情链接(单一)
 */
FLEA::loadClass ( 'base_adm_crudController' );
class controller_admUrlP extends base_adm_crudController{
	
	function controller_admUrlP() {
		parent::base_adm_crudController();
		$this->dao = get_model ( 'urlP' );
		$this->view = 'urlP';
	}
	
	function actionEdit() {
		$filename = r_filename () . '.jpg';
		if (! empty ( $_POST ['id'] )) {
			$ob = $this->dao->find ( $_POST ['id'] );
			if ($ob['photo'] != NULL)
				$filename = $ob['photo'];
		}
		upload_photo ( 'urlP', $filename);
		$ob ['photo'] = $filename;
		$ob ['url'] = $_POST ['url'];
		$ob ['name'] = $_POST ['name'];
		cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
	}
	function __beforeExecuteDel(){
		if (! empty ( $_GET ['id'] )) {
			$ob = $this->dao->find ( $_GET ['id'] );
			if ($ob != NULL)
				remove_file ( 'urlP', $ob ['photo'] );
			else
				exit();
		}else
			exit();
	}
}
?>