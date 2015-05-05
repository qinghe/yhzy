<?php
/**
 * 管理员管理
 */
FLEA::loadClass ( 'base_adm_controller' );
class controller_admHelp extends base_adm_controller {

	function controller_admHelp() {
		parent::base_adm_controller ();
	}

	function actionIndex() {
	}
	//注意事项
	function actionWard(){
		$this->setLayout('help/warn');
	}
	/**
	 * 备份数据库
	 */
	//进入数据库备份
	function actionBackUpTo(){
		$this->s_assign('fis', showDir(APP . 'backup'));
		$this->setLayout('help/dbBackup');
	}
	//数据库备份
	function actionBackUp(){
		$dbBackup = get_model('dbBackup');
		cScript($this->_url('backUpTo'), $dbBackup->backupDB(), '数据库备份');
	}
	//删除备份文件
	function actionBackUpDel(){
		if(!empty($_REQUEST['name']))
			unlink(APP . 'backup' . DS . $_REQUEST['name'] . '.php');
		redirect($this->_url('backUpTo'));
	}
	/**
	 * 上传文件清理
	 */
	//上传文件列表
	function actionUpload(){
		$dir = ROOT . 'lib' . DS . 'kindeditor' . DS . 'attached';
		$fis = showDir($dir);
		$res = array();
		foreach ($fis as $value){
			$file['type'] = substr($value, -3);
			$file['name'] = substr($value, 0, -4);
			$file['size'] = ceil(filesize($dir . DS . $value) / 1024) . 'KB';
			$file['fulname'] = $value;
			array_push($res, $file);
		}
		$this->s_assign('fis', $res);
		$this->setLayout('help/upload');
	}
	//删除上传文件
	function actionUploadDel(){
		if(!empty($_GET['fulname'])){
			unlink(ROOT . 'lib' . DS . 'kindeditor' . DS . 'attached' . DS . $_GET['fulname']);
			redirect($this->_url('upload'));
		}
	}
	/**
	 * 意见反馈
	 */
	function actionMessage(){
		$config = get_model('config');
		$cos = $config->findAll();
		$ins = array();
		foreach ($cos as $key => $value){
			$ins[$value['co_name']] = $value['co_value'];
		}
		$this->s_assign ( 'inis', $ins);
		$this->s_assign('fwd', 'http://' . $_SERVER ['HTTP_HOST'] . $this->_url('message'));
		$this->setLayout('help/message');
	}
}
?>
