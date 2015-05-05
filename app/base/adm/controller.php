<?php
FLEA::loadClass ( 'base_controller' );
class base_adm_controller extends base_controller  {

	var $ajax = false;

	function base_adm_controller() {
		parent::base_controller();
		if (empty ( $_SESSION ['adminSession'] )){
			echo '用户操作超时，请退出重新登陆！';
			exit();
		}
	}

	function _beforeExecute(){
		$this->s_assign('act', $this->_actionName);
		$this->s_assign('con', $this->_controllerName);
	}

	/**
	 * 布局管理器
	 * @param $mainPage 内容页面
	 * @param $title 标题
	 * @param $keyword 关键字
	 * @param $description 描述
	 */
	function setLayout($mainPage){
		$this->s_assign('mainPage', $mainPage);
		$this->s_display('mgr/common/main.html');
	}
	//---------------------------SOA-------------------------------
	/**
	 * 处理1,0的逻辑字段
	 * 如果是1改为0,反之
	 */
	function cLogic($updateField, $dao = NULL){
		$dao = ($dao == NULL) ? $this->dao : $dao;
		if(!empty($_GET['id'])){
			$ob = $dao->find($_GET['id']);
			if($ob != NULL){
				$ob[$updateField] = ($ob[$updateField] == 0) ? 1 : 0;
				$dao->update($ob);
				//var_dump($ob);
				echo $ob[$updateField];
			}
		}
	}
	/**
	 * 排序时使用
	 * 更新排序
	 */
	function cNumber($updateField, $dao = NULL){
		$dao = ($dao == NULL) ? $this->dao : $dao;
		if(!empty($_REQUEST['id']) && !empty($_REQUEST['number'])){
			$ob = $dao->find($_REQUEST['id']);
			if($ob != NULL){
				$ob[$updateField] = $_REQUEST['number'];
				$dao->update($ob);
			}
		}
	}
	/**
	 * 批量删除
	 * $array url 参数
	 */
	function deletes($array = NULL) {
		foreach($_POST['id'] as $value){
			if(!is_numeric($value))
				exit('用户操作错误');
			if(!empty($value))
			{
				$this->dao->removeByPkv ($value);
			}
			else
			{
				exit('用户操作错误');
			}
		}
        echo "<script langauge='javascript'>alert('删除成功！');window.history.go(-1);</script>";
		//redirect ( $this->_url ('index', $array));
	}
}
?>