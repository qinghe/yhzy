<?php
FLEA::loadClass ( 'base_adm_controller' );
class controller_hehe extends base_adm_controller {
	var $view = 'haha.html';
	function controller_hehe(){
		parent::base_adm_controller ();
		//$this->dao = get_model ( 'haha' );
		
	}
	/*function actionindex(){
	
		$haha = get_model('haha');//content_db
		//$haha_str="I am haha!!!!!!aaaaaaaaaaaaaaaaaaaa";
		//$haha_str=array('a'=>'aaaa','b'=>'bbbbb');
		//$this->s_assign('haha_dis',$haha_dis);
		//$this->s_assign('haha_dis',$haha_str['a']);//string
		//$this->s_assign('haha_str',$haha_str);//array
		$this->s_assign('haha_array',$haha->findAll());//db
		$this->setLayout ( $this->view );
		
	}*/
	function actionhehe(){
		$haha_str="I am haha!!!!!!aaaaaaaaaaaaaaaaaaaa";
		$haha_array=array('a'=>'aaaa','b'=>'bbbbb');
		$haha = get_model('haha');//content_db


		$this->s_assign('haha_str',$haha_str);
		$this->s_assign('haha_array',$haha_array);
		$this->s_assign('haha_db',$haha->findAll());//db
		//$this->s_display($this->view);
		$this->s_display('main\\'.$this->view);
	}
	
}
?>