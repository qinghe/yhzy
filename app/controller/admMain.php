<?php
/**
 * 固定文章信息
 */
FLEA::loadClass ( 'base_adm_controller' );
class controller_admMain extends base_adm_controller {
	var $view = 'tzfile';
	
	function controller_admMain() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'main' );
		//$this->s_assign ( 'id', $_REQUEST ['id'] );
		if (! empty ( $_REQUEST ['ic_id'] )) {
		$tz = get_model ( 'tzfile' );
		$tzfile = $tz->findAll(array('ic_id' => $_REQUEST ['ic_id']));
		$this->s_assign ( 'files', $tzfile );
		}
	}
	function actionIndex() {
		if (! empty ( $_REQUEST ['ic_id'] )) {
			$main = $this->dao->find ( $_REQUEST ['ic_id'] );
			if ($main != null) {
				$this->s_assign ( 'ob', $main );
			if ($_REQUEST ['ic_id']==3 ||$_REQUEST ['ic_id']==4 ||$_REQUEST ['ic_id']==5 ||$_REQUEST ['ic_id']==6 ||$_REQUEST ['ic_id']==7)
			    $this->setLayout ( 'tzfile' );
			else
			    $this->setLayout ( 'main' );
			}
		}
	}
	function actionEdit() {
		if (! empty ( $_REQUEST ['ic_id'] )) {
			//$ob ['ic_id'] = $_REQUEST ['ic_id'];
			$ob = $this->dao->find($_REQUEST['ic_id']);
			if($_REQUEST ['ic_id']==2)
			   $ob ['other']=$_REQUEST ['img'];
			else
			   $ob ['other'] = clear_js($_POST ['other']);
			cScript ( $this->_url ( 'index', array ('ic_id' => $_REQUEST ['ic_id'] ) ), $this->dao->save ( $ob ), '编辑' );
		}
	}
    function actionTofileEdit() {
    	if (! empty ( $_REQUEST ['id'] )) {
		$tz = get_model ( 'tzfile' );
			$main = $tz->find ( $_REQUEST ['id'] );
			if ($main != null) {
				$this->s_assign ( 'ob', $main );
			}
		}
    	 $this->setLayout ( 'tzfile');
	}
    function actionfile() {
    	 $this->setLayout ( 'tzfile');
	}
    function actionfileEdit() {
		$tz = get_model ( 'tzfile' );
        $fileName = r_filename();
		$fileName2 = $fileName;
		$fileName3 = $fileName;
		FLEA::loadHelper ( 'uploader' );
		$uploader = new FLEA_Helper_FileUploader ( );
		
		if($_REQUEST ['ic_id']==7)
		{
			if($uploader->isFileExist ( 'file3' )){
				$file = $uploader->getFile ( 'file3' );
				$ext = $file->getExt();
				if($ext != 'php' && $ext != 'exe'){
					$fileName3 .= '.' . $ext;
					if ($file->move ( UPLOAD . 'file' . DS . $fileName3 )){
					
						if(! empty ( $_REQUEST['id']))
						{
						$tz = get_model ( 'tzfile' );
						$ob = $tz->find($_REQUEST['id']);
						}
						$ob ['file3'] = $fileName3;
						$ob ['name'] = $_POST ['name'];
						$ob ['sort'] = $_POST ['sort'];
						$ob ['ic_id'] = $_POST['ic_id'];
						//$tz->save ( $ob );
						//js_alert('编辑成功', NULL, $this->_url ('index'));
						cScript ( $this->_url ( 'index', array ('ic_id' => $_REQUEST ['ic_id'] ) ), $tz->save ( $ob ), '编辑' );
					}else
						js_alert ( '上传失败', NULL, $this->_url ( 'TofileEdit', array ('ic_id' => $_REQUEST ['ic_id'] ) ) );
				}
			}else{
				js_alert ( '请选择上传文件', NULL, $this->_url ( 'TofileEdit' , array ('ic_id' => $_REQUEST ['ic_id'] )) );
			}
		
		}
		else
		{
			if(! empty ( $_REQUEST['id']))
			{
			$tz = get_model ( 'tzfile' );
			$ob = $tz->find($_REQUEST['id']);
			}
			if ($uploader->isFileExist ( 'file1' )) {
				$file = $uploader->getFile ( 'file1' );
				$ext = $file->getExt();
				if($ext != 'php' && $ext != 'exe'){
					$fileName .= '.' . $ext;
					if ($file->move ( UPLOAD . 'file' . DS . $fileName )){
						$ob ['file1'] = $fileName;
					}else
						js_alert ( '上传失败', NULL, $this->_url ( 'TofileEdit' ) );
				}
			}else{
				js_alert ( '请选择上传文件1', NULL, $this->_url ( 'TofileEdit' ) );
			}
			if($uploader->isFileExist ( 'file2' )){
				$file = $uploader->getFile ( 'file2' );
				$ext = $file->getExt();
				if($ext != 'php' && $ext != 'exe'){
					$fileName2 .= '.' . $ext;
					if ($file->move ( UPLOAD . 'file' . DS . $fileName2 )){
						$ob ['file2'] = $fileName2;
					}else
						js_alert ( '上传失败', NULL, $this->_url ( 'TofileEdit' ) );
				}
			}else{
				js_alert ( '请选择上传文件2', NULL, $this->_url ( 'TofileEdit' ) );
			}
			if($uploader->isFileExist ( 'file3' )){
				$file = $uploader->getFile ( 'file3' );
				$ext = $file->getExt();
				if($ext != 'php' && $ext != 'exe'){
					$fileName3 .= '.' . $ext;
					if ($file->move ( UPLOAD . 'file' . DS . $fileName3 )){
						$ob ['file3'] = $fileName3;
						$ob ['name'] = $_POST ['name'];
						$ob ['sort'] = $_POST ['sort'];
						$ob ['ic_id'] = $_POST['ic_id'];
						//$tz->save ( $ob );
						//js_alert('编辑成功', NULL, $this->_url ('index'));
						cScript ( $this->_url ( 'index', array ('ic_id' => $_REQUEST ['ic_id'] ) ), $tz->save ( $ob ), '编辑' );
					}else
						js_alert ( '上传失败', NULL, $this->_url ( 'TofileEdit' ) );
				}
			}else{
				js_alert ( '请选择上传文件3', NULL, $this->_url ( 'TofileEdit' ) );
			}
		}
	}
	
	function actionDel() {
		$tz = get_model ( 'tzfile' );
	//	$tzfile = $tz->findAll(array('ic_id' => $_REQUEST ['ic_id']));
		cScript ( $this->_url ( 'index', array ('ic_id' => $_REQUEST ['ic_id'] ) ), $tz->removeByPkv ( ( int ) $_REQUEST ['id'] ) );
	}
		//----------AJAX----------
	function actionCnumber() {
		$this->cNumber('number');
	}	
}
?>
