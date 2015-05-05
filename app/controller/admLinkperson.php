<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admLinkperson extends base_adm_controller{
		var $view ='linkperson';
		function controller_admlinkperson() {
		parent::base_adm_controller ();
		$this->dao = get_model ( 'linkperson' );
		}
		function actionIndex(){
	
		$this->set_pager ( $this->dao, NULL, 'id desc' );
		$this->setLayout ( $this->view );
		}
		function actionToAdd(){
		
		$array = array ();
	//	$array ['p_ic_id'] = 10;
		$array ['1'] = 1;
		array_push ( $array, array ('p_ic_id', "x", '!=' ) );
		$infos =  get_model('info');
		$this->s_assign('infos',$infos->findAll($array));
		
		if(!empty($_REQUEST['id']))
		{
			$this->s_assign('ob',$this->dao->find(array('id'=>$_REQUEST['id'])));
		}
		
		$this->setLayout ( $this->view );
		}
		
		
		
		
		
		function actionAdd(){
			if (empty ( $_POST ['name'] ) || strlen ( $_POST ['name'] ) > 255)
			js_alert ('名称不能为空，并且不能超过255字符', NULL, $this->_url('toEdit', array('id' => $_REQUEST['id'], 'ic_id' => $_REQUEST ['ic_id'])));
		else{
			if (! empty ( $_REQUEST['id'] ))
				$ob = $this->dao->find ( $_REQUEST ['id'] );

			$ob ['name'] = h($_POST ['name']);
			$ob ['sortid'] = $_REQUEST ['sortid'];			
			$ob ['tel'] = $_POST ['tel'];
			$ob ['mail'] = $_POST ['mail'];
			
			cScript ( $this->_url ( 'index' ), $this->dao->save ( $ob ), '编辑' );
		}
		}
		function actionedit(){
			$ob = $this->dao->find ( $_REQUEST ['id'] );
			$ob ['other'] = clear_js($_POST ['other']);
			cScript ( $this->_url (), $this->dao->save ( $ob ), '编辑' );
		}
		function actionDel() {
		if (! empty ( $_GET ['id'] )) {
			$ob = $this->dao->find ( $_GET ['id'] );
			if ($ob != null) {
				remove_file('linkperson', $ob ['photo']);
				$this->dao->removeByPkv ( $_GET ['id'] );
				redirect ($this->_url ());
			}
		}
	}
}
?>