<?php
FLEA::loadClass ( 'base_mai_userController' );
class controller_maiUser extends base_mai_userController {
	
	function controller_maiUser(){
		parent::base_mai_userController();
		$info = get_model('info');
		$this->s_assign('ins1', $info->findAll(array('ic_id' => 1), 'number desc'));
		$this->s_assign('ins2', $info->findAll(array('ic_id' => 2), 'number desc'));
		$this->s_assign('ins3', $info->findAll(array('ic_id' => 3), 'number desc'));
		$this->s_assign('ins5', $info->findAll(array('ic_id' => 5), 'number desc'));
		$photoCate = get_model('photoCate');
		$this->s_assign('pcs', $photoCate->findAll(NULL, 'number desc'));
	
	}
	function actionIndex(){
		$this->setLayout('index');
	}
	//-----------------------个人信息 start-----------------------
	function actionUserEditTo() {
		$this->setLayout('user');
	}
	function actionUserEdit(){
		$ob = $_SESSION['userSession'];
		$ob['realname'] = $_POST['realname'];
		$ob['sex'] = $_POST['sex'];
		$ob['mail'] = $_POST['mail'];
		$ob['phone'] = $_POST['phone'];
		$ob['company'] = $_POST['company'];
		$user = get_model('user');
		$user->update($ob);
		$_SESSION['userSession'] = $ob;
		redirect($this->_url('userEditTo'));
	}
	function actionUserEditPassTo(){
		$this->setLayout('user');
	}
	function actionUserEditPass(){
		if(empty($_POST['oldPass']) || $_POST['oldPass'] != $_SESSION['userSession']['pass'])
			js_alert('原始密码不正确', NULL, $this->_url('userEditPassTo'));
		elseif (empty($_POST['pass']))
			js_alert('密码不能为空', NULL, $this->_url('userEditPassTo'));
		elseif ($_POST['pass'] != $_POST['rePass'])
			js_alert('两次密码不一致', NULL, $this->_url('userEditPassTo'));
		else{
			$user = get_model('user');
			$ob = $_SESSION['userSession'];
			$ob['pass'] = $_POST['pass'];
			$user->update($ob);
			$_SESSION['userSession'] = $ob;
			js_alert('密码修改成功', NULL, $this->_url('userEditPassTo'));
		}
	}
	//-----------------------个人信息 end-------------------------
	//-----------------------简报 start-----------------------
	function actionJianbao(){
		$jianbao = get_model('jianbao');
		$this->set_pager($jianbao, array('us_id' => $_SESSION['userSession']['name']), 'createtime desc');
		$this->setLayout('jianbao');
	}
	function actionJianbaoEditTo(){
		$jianbao = get_model('jianbao');
		if(!empty($_GET['id'])){
			$ob = $jianbao->find($_GET['id']);
			if($ob != NULL){
				if($ob['us_id'] != $_SESSION['userSession']['name'])
					exit();
				else
					$this->s_assign('ob', $ob);
			}
		}
		$this->setLayout('jianbao');
	}
	function actionJianbaoEdit(){
		$jianbao = get_model('jianbao');
		if(!empty($_POST['id'])){
			$ob = $jianbao->find($_POST['id']);
			if($ob == NULL)
				exit();
			else{
				if($ob['us_id'] != $_SESSION['userSession']['id'])
					exit();
			}
		}
		$ob['us_id'] = $_SESSION['userSession']['id'];
		$ob['name'] = $_POST['name'];
		$ob['other'] = $_POST['other'];
		$jianbao->save($ob);
		js_alert('发布成功', NULL, $this->_url('jianbao'));
	}
	//-----------------------简报 end-----------------------
	function actionFile(){
		$file = get_model('file');
		$this->set_pager($file, NULL, 'createtime desc');
		$this->setLayout('file');
	}
}