<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_admBaoming extends base_adm_controller {
	
	var $view = 'baoming';
	
	function controller_admBaoming() {
		parent::base_adm_controller ();
		$this->dao = get_model('baoming' );
	}
	/**
	 * 前台留言
	 */
	function actionIndex() {
		$this->set_pager($this->dao, NULL, 'id desc');
		$this->setLayout ($this->view);
	}
	function actionToRe() {
		$me = $this->dao->find ( array('id'=>$_REQUEST ['id']) );
		if ($me != NULL) {
			$this->s_assign ( 'ob', $me );
			$this->setLayout ($this->view);
		}
	}
	function actionRe() {
		$me = $this->dao->find ( $_REQUEST ['id'] );
		if ($me != NULL) {
			$me ['recontent'] = $_POST ['recontent'];
			cScript ( $this->_url ( 'toRe', array ('id' => $_REQUEST ['id'] ) ), $this->dao->update ( $me ), '回复' );
		}
	}
	function actionX(){
		if(!empty($_REQUEST['id'])){
			$ob = $this->dao->find($_REQUEST['id']);
			if($ob != NULL){
				$this->s_assign('ob', $ob);
				$this->setLayout($this->view);
			}
		}
	}
	function actionbaoming(){
		$showmess = get_model ( 'baoming' );
		if($_POST['id']!=NULL){
			$baoming=$showmess->find($_POST['id']);
			var_dump($baoming);
		}else{
			$baoming=array();
		}if($_POST['name']==NULL){echo "<script>alert('姓名不能为空');window.history.back(-1);</script>";}
		$baoming['name']=h($_POST['name']);
		$baoming['sex']=h($_POST['sex']);
		if($_POST['pid']==NULL){echo "<script>alert('身份证不能为空');window.history.back(-1);</script>";}
		$baoming['pid']=h($_POST['pid']);
		$baoming['add']=h($_POST['add']);
		$baoming['nowadd']=h($_POST['nowadd']);
		if($_POST['tel']==NULL){echo "<script>alert('电话不能为空');window.history.back(-1);</script>";}
		$baoming['tel']=h($_POST['tel']);
		if($_POST['moblie']==NULL){echo "<script>alert('手机不能为空');window.history.back(-1);</script>";}
		$baoming['moblie']=h($_POST['moblie']);
		if($_POST['mail']==NULL){echo "<script>alert('邮箱不能为空');window.history.back(-1);</script>";}
		$baoming['mail']=h($_POST['mail']);
		$baoming['who']=h($_POST['who']);
		$baoming['month']=h($_POST['month']);
		if($_POST['month']==NULL){echo "<script>alert('贷款期限不能为空');window.history.back(-1);</script>";}
		$baoming['money']=h($_POST['money']);
		if($_POST['money']==NULL){echo "<script>alert('贷款金额不能为空');window.history.back(-1);</script>";}
		
		if($_POST['mail']==NULL){echo "<script>alert('电话不能为空');window.history.back(-1);</script>";}
		$baoming['mail']=h($_POST['mail']);
		
		if($_POST['do']==NULL){echo "<script>alert('贷款用途不能为空');window.history.back(-1);</script>";}
		$baoming['do']=h($_POST['do']);
		if($_POST['cuoshi']==NULL){echo "<script>alert('担保措施不能为空');window.history.back(-1);</script>";}
		$baoming['cuoshi']=h($_POST['cuoshi']);
		if($_POST['gb']==NULL){echo "<script>alert('备注不能为空');window.history.back(-1);</script>";}
		$baoming['gb']=h($_POST['gb']);
		if($_POST['some']==NULL){echo "<script>alert('备注不能为空');window.history.back(-1);</script>";}
		$baoming['some']=h($_POST['some']);
		$showmess->save($baoming);
		js_alert ( '操作成功', '', $this->_url ( 'index' ) );
		
	}
	function actionDel() {
		$this->deletes();
	}
}
?>