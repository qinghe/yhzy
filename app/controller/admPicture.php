<?php
/**
 * 网站固定图片替换
 * name 图片文件名
 */
FLEA::loadClass ( 'base_adm_controller' );
class controller_admPicture extends base_adm_controller {
	
	var $view = 'picture';
	
	function controller_admPicture() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'picture' );
		$psp = get_model ( 'picture' );
		if($_REQUEST['ic_id']==7)
		{
		$picSort = get_model ( 'info' );
		$this->s_assign ( 'picSort', $picSort->findAll (array('ic_id' => 3)) );
		}
		else
		{
		$picSort = get_model ( 'info' );
		$this->s_assign ( 'picSort', $picSort->findAll (array('ic_id' => 2)) );
		}
	}
	
	function actionIndex() {
		$this->set_pager ( $this->dao );
		$this->setLayout ( $this->view );
	}
	function actionToEdit() {
		if (! empty ( $_REQUEST ['id'] )) {
			$ob = $this->dao->find ( $_REQUEST ['id'] );
			if ($ob != NULL) {
				$this->s_assign ( 'ob', $ob );
				$this->setLayout ( $this->view );
			}
		}
	}
	function actionEdit() {
		if (! empty ( $_REQUEST ['id'] )) {
			$ob = $this->dao->find ( $_REQUEST ['id'] );
			if ($ob != NULL) {
				FLEA::loadHelper ( 'uploader' );
				$uploader = new FLEA_Helper_FileUploader ( );
				if (! $uploader->isFileExist ( 'photo' )) {
					js_alert ( '请选择要上传的文件', '', $this->_url ( 'toEdit', array ('id' => $_REQUEST ['id'] ) ) );
				} else {
					$photo = $uploader->getFile ( 'photo' );
					$ext = $photo->getExt();
					if($ext == 'gif' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'bmp'){
						$ob ['other'] = clear_js($_POST ['other']);
						$this->dao->save($ob);
						$photo->move ( 'images' . DS . $ob ['file'] );
						redirect($this->_url('index', array ('ic_id' => $_POST ['ic_id'] )));
					}else
						js_alert('文件格式不正确', '', $this->_url ( 'toEdit', array ('id' => $_REQUEST ['id'] ) ));
				}
			}
		}
	}
	function actionToAdd() {
		$this->setLayout ( $this->view );
	}
	function actionAdd() {
	$fileName = r_filename();
			FLEA::loadHelper ( 'uploader' );
			$uploader = new FLEA_Helper_FileUploader ( );
			
		if (empty ( $_POST ['name'] ) )
			js_alert ( '信息不能为空', '', $this->_url ( 'toAdd', array ('ic_id' => $_REQUEST ['ic_id'] ) ) );
		else {
				
				if( $uploader->isFileExist ( 'file1' ))
				{
					$file = $uploader->getFile ( 'file1' );
					$ext = $file->getExt();	
					if($ext != 'gif' && $ext != 'jpg' && $ext != 'png')
					{
					js_alert ( '文件格式不正确', '', $this->_url ( 'toAdd', array ('ic_id' => $_REQUEST ['ic_id'] ) ) );
					}
					else
					{
						$fileName .= '.' . $ext;
						if ($file->move ( 'images' . DS . $fileName ))
						{
						$ob['name'] = $_POST['name'];
						$ob['ic_id'] =$_POST['ic_id'];
						$ob['ic_id_sort']=$_POST['ic_id_sort'];
						$ob['file'] = $fileName;
						$ob ['other'] = clear_js($_POST ['other']);
						$this->dao->save($ob);
						redirect($this->_url('index', array ('ic_id' => $_POST ['ic_id'] )));
						}
						else
						{
						js_alert ( '上传失败', '', $this->_url ( 'toAdd', array ('ic_id' => $_REQUEST ['ic_id'] ) ) );
						}
					}	
				}	
				else
				{
				js_alert ( '文件不存在！', '', $this->_url ( 'toAdd', array ('ic_id' => $_REQUEST ['ic_id'] ) ) );
				}
			}
	}
	function actionDel(){
		$this->deletes($this->_url('index', array ('ic_id' => $_REQUEST ['ic_id'] )));
	}
}
?>