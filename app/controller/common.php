<?php
class controller_common extends FLEA_Controller_Action {
	
	function controller_common() {
		$this->smarty = &$this->_getView ();
	}
	
	function actionIndex() {
	}
	//生成随即验证码
	function actionImgcode() {
		$imgcode = FLEA::getSingleton ( 'FLEA_Helper_ImgCode' );
		$imgcode->image ();
	}
	//计算器
	function actionCalc(){
		$this->smarty->display('util/calc.html');
	}
	/**
	 * jtip显示通用调用图片
	 */
	function actionJipImg(){
		if(!empty($_GET['pathf']))
			$path = $_GET['pathf'] . DS . $_GET['path'];
		else
			$path = 'app'  . DS . 'upload' . DS . $_GET['type'] . DS . $_GET['path'];
		$r = r_filename();
		echo "<img src='{$path}?r={$r}' width='225'/>";
	}
}
?>
