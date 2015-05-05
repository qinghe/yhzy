<?php
/**
 * 实现普通的增删改查的父类
 * 子类构造方法中必须给$view $dao属性复制
 */
FLEA::loadClass ( 'base_adm_controller' );
class base_adm_crudController extends base_adm_controller{

	var $view = '';
	var $dao = '';
	
	function base_adm_crudController(){
		parent::base_adm_controller();
	}
	
	
	function actionIndex() {
		$this->set_pager ( $this->dao);
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
	/**
	 * 子类需要实现增改的方法
	 */
	function actionEdit() {
		
	}
	function actionDel() {
		$this->deletes();
	}
	/**
	 * 子类如果在删除之前需要执行算法则覆盖次方法(例如删除图片文件)
	 */
	function __beforeExecuteDel(){}
}
?>