<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admshowmess extends base_adm_controller {
	
	var $view = 'showmess';
	var $parameter;
	
	function controller_admshowmess() {
		parent::base_adm_controller ();
		$this->parameter = array ('ic_id' => $_REQUEST ['ic_id']);
		$this->dao = get_model ( 'showmess' );
		
		$photoCate = get_model ( 'info' );
		$this->s_assign ( 'pcs', $photoCate->findAll (array('ic_id'=>'2')) );
		
	
	}
	
	function actionIndex() {
		$array = array ();
		$array ['ic_id'] = $_REQUEST ['ic_id'];
		$this->set_pager ( $this->dao, array('ic_id' => $_REQUEST ['ic_id'],'p_ic_id'=> $_REQUEST ['p_ic_id']), 'createtime desc' );
		$this->setLayout ( $this->view );
	}
	function actionToEdit() {
		
		if (! empty ( $_REQUEST ['id'] ))
		$this->s_assign ( 'ob', $this->dao->find ( $_REQUEST ['id'] ) );
        //echo $_GET['ic_id'];die;
        $cate = get_model ( 'infoCate' );
        $this->s_assign ( 'cate', $cate->findAll( array('p_id'=>$_GET['ic_id']) ) );
		$this->setLayout ( $this->view );
		
	}
	
	function actionEdit() {
		if (empty ( $_POST ['name'] ) || strlen ( $_POST ['name'] ) > 255)
			js_alert ('名称不能为空，并且不能超过255字符', NULL, $this->_url('toEdit', array('id' => $_REQUEST['id'], 'ic_id' => $_REQUEST ['ic_id'])));
		else{
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
            //echo $photoName;die;
            //echo $ob ['photo'];die;
			 upload_photo ( 'info', $photoName ,'photo');
			if (! empty ( $_POST ['id'] ))
				$ob = $this->dao->find ( $_POST ['id'] );
			$ob ['photo'] = $photoName;	
			$ob ['photo1'] = $photoName1;	
			$ob ['photo2'] = $photoName2;	
			$ob ['f_id'] = $_POST ['f_id'];
			$ob ['zipcode'] = $_POST ['zipcode'];
            $ob ['ic_id'] = $_POST ['ic_id'];
			$ob ['p_ic_id'] = $_POST ['p_ic_id'];
			$ob ['name'] = h($_POST ['name']);
			$ob ['age'] = $_POST ['age'];		
			$ob ['tel'] = h($_POST ['tel']);
            $ob ['phone'] = h($_POST ['phone']);
            $ob ['person'] = $_POST ['person'];	
			$ob ['mail'] = $_POST ['mail'];	
			$ob ['deadline'] = $_POST ['deadline'];
            $ob ['address'] = $_POST ['address'];	
			$ob ['wage'] = $_POST ['wage'];
            $ob ['url'] = h($_POST ['url']);
            $ob ['fax'] = h($_POST ['fax']);
			$ob ['ic_sort'] = h($_POST ['ic_sort']);
            $ob ['other'] = clear_js($_POST ['other']);	
			$ob ['other1'] = clear_js($_POST ['other1']);	
			
			if (! empty ( $_POST ['createtime'] ))
				$ob ['createtime'] = $_POST ['createtime'];
			cScript ( $this->_url ( 'index', array ('ic_id' => $_REQUEST ['ic_id'],'p_ic_id'=>$_REQUEST['p_ic_id'],'ic_name'=>$_REQUEST['ic_name']) ), $this->dao->save ( $ob ), '编辑' );
		}
	}
	function actionDel() {
		$this->deletes($this->parameter);
	}
	function actionCnumber() {
		$this->cNumber('number');
	}
	function actionHot(){
		$this->cLogic('hot');
	}
}
?>