<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admInfoCate extends base_adm_controller {
	
	var $view = 'infoCate';
    var $subview = 'info_subCate';
	
	function controller_admInfoCate() {
		parent::base_adm_controller();
		$this->dao = get_model('infoCate');
	}
	
	function actionIndex() {
	    $cate = $this->dao->findAll(array('p_id'=>'x','hidden'=>'0'));
		$this->s_assign ( 'obs', $cate );
		$this->setLayout ( $this->view );
	}
    function actionsubcate(){
        $subcate = $this->dao->findAll(array('p_id'=>$_REQUEST ['id']),'number desc');
        $this->s_assign ( 'subobs', $subcate);
        $this->setLayout ( $this->subview );
    }
	function actiontolevelEdit(){
		$le = get_model('infoCate');
		$this->set_pager ( $le, array('p_id'=>$_REQUEST['ic_id']), 'id desc' );
			$infolevel = get_model('infoCate');
			$ob = $infolevel->find ( $_REQUEST ['id'] );
			$this->s_assign ( 'ob', $ob );
			$this->setLayout ( $this->view );
	}	
	function actionToEdit() {
		if (! empty ( $_REQUEST ['id'] )) {
			$ob = $this->dao->find ( $_REQUEST ['id'] );
			if ($ob != NULL)
				$this->s_assign ( 'ob', $ob );
		}
		$this->setLayout ( $this->view );
	}
	function actionEdit() {
		if (empty ( $_POST ['name'] ))
			js_alert ('名称不能为空', NULL, $this->_url ( 'toEdit', array ('id' => $_REQUEST ['id'] ) ));
		else {
			if (! empty ( $_REQUEST ['id'] ))
				$ob = $this->dao->find ( (int)$_REQUEST ['id'] );
			$ob ['name'] = $_POST ['name'];
            $ob ['hidden'] = $_POST ['hidden'];
			$ob ['other'] = $_POST ['other'];
			cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
		}
	}
	//二级菜单
	function actiontoLevel(){
		if(!empty( $_REQUEST['ic_id'] ))
		{
		$le = get_model('infoCate');
		$this->set_pager ( $le, array('p_id'=>$_REQUEST['ic_id']), 'id desc' );
		$this->setLayout($this->view);
		}
	}
	
	function actionlevelAdd(){
		if(!empty( $_POST['p_ic_id']))
		{
            FLEA::loadHelper ( 'uploader' );
			$uploader = new FLEA_Helper_FileUploader ( );

			if($uploader->isFileExist ( 'photo' )){
				$file = $uploader->getFile ( 'photo' );
				$ext = $file->getExt();
                $photoName = r_filename () .'.'. $ext ;
			}elseif(! empty ( $_POST ['id'] )){
			     $ob = $this->dao->find ( $_POST ['id'] );
				if ($ob['photo'] != NULL){
					$photoName = $ob ['photo'];
				}
			}else{
			     $photoName = 'default.jpg';
			}
			if($_FILES['photo']['name']!=NULL){
				upload_photo ( 'info', $photoName );
			}
			
			$infolevel = get_model('infoCate');
			if(!empty($_POST['ids']))
			$ob = $infolevel->find ( $_POST ['ids'] );
		
			$infolevel = get_model('infoCate');
			$ob ['p_id'] = $_POST ['p_ic_id'];
			$ob ['name'] = $_POST ['name'];
			$ob ['other'] = $_POST ['other'];
			$ob ['sort'] = $_POST ['sort'];
			if($_FILES['photo']['name']!=NULL){
			$ob ['photo'] = $photoName;	
			}
            $ob ['hidden'] = $_POST ['hidden'];
			cScript ( $this->_url ( 'toLevel', array('ic_id'=>$_POST ['p_ic_id']) ), $infolevel->save ( $ob ), '编辑' );
		}
	}
	
	
	function actionDel() {
		cScript ( $this->_url (), $this->dao->removeByPkv ( ( int ) $_REQUEST ['id'] ) );
	}
	function actionDel1() {
		$this->deletes(array('id' => $_REQUEST['ic_id']));
	}
	//----------AJAX----------
	function actionCnumber() {
		$this->cNumber('number');
	}
	
}
?>
