<?php
//error_reporting(0);
FLEA::loadClass ( 'base_mai_controller' );
class controller_category extends base_mai_controller {

	function controller_category(){
		parent::base_mai_controller ();	
	}

        // params: ic_id
        //        p_ic_id - required
        // data: categories, products
	function actionIndex(){
		$array = array();
		$product = get_model('showmess');
		$category = get_model('infoCate');
		$this->s_assign('categories' , $category->findAll(array("p_id"=>$this->category_root_id),"id asc"));
           if(!empty($_REQUEST['ic_id'])){
                $this->s_assign('products' , $product->findAll(array("ic_id"=>$_REQUEST['ic_id']),"id desc"));
           }
           else{
                $this->s_assign('products' , $product->findAll(array("p_ic_id"=>$this->category_root_id),"id desc"));
           }
           $this->setLayout ( 'category' );
		
	}
	
	function get_category_root(){
		$category = get_model('infoCate');
           	$this->s_assign('category_root' , $category->find(array('id'=>$this->category_root_id)));
        }
}
?>
