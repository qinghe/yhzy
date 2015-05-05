<?php
FLEA::loadClass ( 'base_controller' );
class base_mai_controller extends base_controller {
	
	function base_mai_controller() {
		parent::base_controller ();
		//初始化系统参数
			
		$config = get_model('config');
		$cos = $config->findAll();
		$ins = array();
		foreach ($cos as $key => $value){
			$ins[$value['name']] = $value['value'];
		}
		$this->s_assign ('inis', $ins);
		
		
		//timingTrigger() 依赖触发
		if($this->timingTrigger($ins['currtime'])){
			$newTimeOb = $config->find(array('name' => 'currtime'));
			$newTimeOb['name'] = 'currtime';
			$newTimeOb['value'] = dbOfDate();
			$config->save($newTimeOb);
		}
		//左侧菜单栏信息
		if(!empty($_REQUEST['p'])){
		$infocate= get_model('infoCate');
		$infocate = $infocate->find ( $_REQUEST ['p'] );
		$this->s_assign ( 'infocate', $infocate);

		$array ['p_id'] = $_REQUEST ['p'] ;
		$info = get_model ( 'infocate' );
		$ob = $info->findAll ($array,'number asc ' );
		$this->s_assign ( 'obcc', $ob);
		}
	}
	
	/* ------------------------------------定时触发器----------------------------------- */
	/**
	 * 如果上次时间不是当日的时候 触发时间
	 * @param $date 时间 2009-8-8
	 */
	function timingTrigger($date){
		if (WSZ_Date::lessDayForNow($date) >= 1){
			#TODO 触发内容
			return true;
		}
		return false;
	}
	
	//行为进入视图层
	function _beforeExecute(){
		$this->s_assign('act', $this->_actionName);
		$this->s_assign('con', $this->_controllerName);
	}

	function _afterExecute(){
		
	}
	
	/* ------------------------------------通用方法------------------------------------- */
	/**
	 * main
	 */
	function main($id = NULL) {
		if($id == NULL)
			$id = $_REQUEST['id'];
		if (! empty ($id)) {
			$main = get_model ( 'main' );
			$ma = $main->find ( $id );
			if ($ma != NULL)
				$this->s_assign ( 'ma', $ma );	
			else
				exit ('用户访问错误');
			$tz = get_model ( 'tzfile' );
		$tzfile = $tz->findAll(array('ic_id' => $_REQUEST ['id']));
		$this->s_assign ( 'files', $tzfile );	
		}
		
	}

	/**
	 * info
	 */
	function info($pageSize = 15, $ic_id = NULL) {
		$array = array ();
		$ic_id = empty($ic_id) ? $_REQUEST ['ic_id'] : $ic_id;
		if (! empty ($ic_id)){
			$array ['ic_id'] = $ic_id;
			$infoCate = get_model('infoCate');
			$this->s_assign('ic', $infoCate->find($ic_id));
		}
		if (!empty($_REQUEST['name']))
			array_push($array, array('name', '%' . $_REQUEST['name'] . '%', 'like'));
			
		$info = get_model ( 'info' );
		$this->set_pager ( $info, $array, 'number desc, createtime desc', $pageSize );
	}
	function infoX() {
			$array = array ();
			$array1 = array ();
			

			
			
			if (! empty ( $_REQUEST ['id'] )) {
			//获取公告
			
				// 二级菜单	
					$showmess = get_model ( 'showmess' );
					if (!empty($_REQUEST['id']))
					$array1 ['ic_id'] = $_REQUEST ['id'] ;
					if ($_REQUEST['p']==4){
						$this->set_pager ( $showmess, $array1, 'id desc', 3);
					} else {
						$this->set_pager ( $showmess, $array1, 'id desc', 10);
					}
			}
			else
			{
				$array1 ['p_ic_id'] = $_REQUEST ['p'] ;
				array_push($array1, array('name', '%' . $_REQUEST['bbname'] . '%', 'like'));

			// 二级菜单	
				$array1 ['ic_id'] = $ob['0']['id'] ;
				$showmess = get_model ( 'showmess' );
				$this->set_pager ( $showmess, $array1, 'id desc', 10);
				
			}
		
	}
	function infoK() {
			$array = array ();
			$array1 = array ();
			if (! empty ( $_REQUEST ['id'] )) {
			//一级菜单
				$array ['ic_id_sort'] = $_REQUEST ['id'] ;
				$info = get_model ( 'info' );
				$ob = $info->find ( $_REQUEST ['id'] );
				$this->s_assign ( 'ob', $ob);
			// 二级菜单	
				
				$showmess = get_model ( 'showserver' );
				if (!empty($_REQUEST['id']))
				$array1 ['ic_id'] = $_REQUEST ['id'] ;
				if(!empty($_REQUEST['ic_sort']))
				array_push($array1, array('ic_sort',  $_REQUEST['ic_sort'] , '='));
				$this->set_pager ( $showmess, $array1, 'id desc', 15);
			}
	}
	/**
	 * photo
	 */
	function photo($pageSize = 12) {
		$photo = get_model ( 'photo' );
		$array = array ();
		if (! empty ( $_REQUEST ['pc_id'] )){
			$array ['pc_id'] = $_REQUEST ['pc_id'];
			$photoCate = get_model('photoCate');
			$this->s_assign('pc', $photoCate->find($_REQUEST['pc_id']));
		}
		if(!empty($_REQUEST['up']))
			$array['up'] = 1;
		if (!empty($_REQUEST['name']))
			array_push($array, array('name', '%' . $_REQUEST['name'] . '%', 'like'));
		$this->set_pager ( $photo, $array, 'number desc, createtime desc', $pageSize );
	}
	function photoX() {
		if (! empty ( $_REQUEST ['id'] )) {
			$photo = get_model ( 'photo' );
			$ob = $photo->find ( $_REQUEST ['id'] );
			$ob['hit']++;
			$photo->update($ob);
			$ob = $photo->find ( $_REQUEST ['id'] );
			$ob['createtime']= substr($ob['createtime'],0,10);
			$this->s_assign ( 'ob', $ob);
		}
	}
	
	/**
	 * 布局管理器
	 * @param $mainPage 内容页面
	 * @param $title 标题
	 * @param $keyword 关键字
	 * @param $description 描述
	 */
	function setLayout($mainPage, $title = '', $keyword = '', $description = ''){
		$this->s_assign('title', $title);
		$this->s_assign('keywords', $keyword);
		$this->s_assign('description', $description);
		$this->s_assign('mainPage', $mainPage);
		$this->s_display('main/common/main.html');
	}
}
?>