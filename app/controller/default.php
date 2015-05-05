<?php
//error_reporting(0);
FLEA::loadClass ( 'base_mai_controller' );
class controller_default extends base_mai_controller {

	function controller_default() {
		parent::base_mai_controller ();
		$userarray=array();
		if(isset($_SESSION ['userSession']) )
		{
		$this->s_assign('userid',$_SESSION ['userSession']['id']);
		}
        $photo = get_model('photo');
		$url = get_model('url');
		$main = get_model('showmess');
		$cmain = get_model('infoCate');
		$this->s_assign('wmtitle' , $cmain->find(array('id'=>2)));
		$this->s_assign('altitle' , $cmain->find(array('id'=>3)));
		$this->s_assign('dttitle' , $cmain->find(array('id'=>4)));
		$this->s_assign('jrtitle' , $cmain->find(array('id'=>5)));
		$this->s_assign('lxtitle' , $cmain->find(array('id'=>6)));

		$this->s_assign('hdp' , $photo->findAll(array(),"number desc",4));
		$this->s_assign('wm' , $main->find(array("p_ic_id"=>1,"ic_id"=>2),"id asc"));
		$this->s_assign('us' , $main->find(array("p_ic_id"=>1,"ic_id"=>2),"id desc"));
		$this->s_assign('cp' , $main->findAll(array("p_ic_id"=>1,"ic_id"=>3),"id desc"));
		$this->set_pager($main,array("p_ic_id"=>1,"ic_id"=>3),"number desc,id desc",12);
		$this->s_assign('lj' , $url->findAll(array(),"id desc"),4);
		$this->s_assign('dt1' , $main->findAll(array("p_ic_id"=>1,"ic_id"=>4,'hot'=>1),"id desc",3));
		$this->s_assign('dt' , $main->findAll(array("p_ic_id"=>1,"ic_id"=>4),"id desc"));
        
        $this->s_assign('product_categories' , $cmain->findAll(array("p_id"=>11),"id desc"));

		$conf=get_model('config');
		$this->s_assign('config', $conf->findAll());
		
	}
    function actionIndex() {
		$this->setLayout ( 'index');
	}

	/* ------------------------------------文章内容 start------------------------------------- */
	/* 固定信息 p=0首页 以此类推   */
	function actionInfoX() {
	/* ------------------------------------除首页外左则列表 start------------------------------------- */



	/* ------------------------------------除首页外左则列表 over------------------------------------- */

    

	/* ------------------------------------默认右则 start------------------------------------- */
	$cmain = get_model('infoCate');
    $main = get_model('showmess');
    $first = $cmain->find(array('p_id'=>$_GET['p']),"id asc");
		if($_GET['id'] == NULL){
				$_GET['id'] = $first['id'];
		}

	$this->set_pager($main,array('p_ic_id'=>$_GET['p'],'ic_id'=>$_GET['id']),"number desc,id desc",24);

    $this->s_assign('lcatename' , $cmain->find(array('id'=>$_GET['id'])));
   
	$this->s_assign('lcateother' , $main->find(array('p_ic_id'=>$_GET['p'],'ic_id'=>$_GET['id'])));
	
	/* ------------------------------------默认右则 over------------------------------------- */
		if($_REQUEST['key']!=null){
			$showmess = get_model ( 'showmess' );
			$array1 = array ();
			echo array_push($array1, array('other', '%' . $_REQUEST['key'] . '%', 'like'));
			$this->set_pager ( $showmess, $array1, 'id desc', 10);
		}
		$this->setLayout ( 'infoX' );
	}
    function actioncontent(){
        $main = get_model('showmess');
        $content=$main->find(array('id'=>$_GET['id']));
        $this->s_assign('content', $content);
		$this->setLayout ( 'content' );
	}
	
	
	function actionMain() {
		$this->main ();
		$this->s_assign('id', $_GET ['id']);
		$this->setLayout ( 'main' );
	}
	function actionMain1() {
		$this->main ();
		$this->s_assign('id', $_GET ['id']);
		$this->setLayout ( 'main1' );
	}
	/* 信息 */
	function actionInfo() {
		$this->info ();
		$this->setLayout ( 'info' );
	}
	function actionX(){
		if(!empty($_REQUEST['id'])){
			$me = get_model('message' );
			$ob = $me->find($_REQUEST['id']);
			if($ob != NULL){
				$this->s_assign('ob', $ob);
				$this->setLayout('detail');
			}
		}
	}
	
	function actionInfoX1() {
/*		$info = get_model ( 'info' );
		$ob = $info->find ( $_REQUEST ['id'] );
		$this->s_assign ( 'ob', $ob);*/
	// 二级菜单
		$showmess = get_model ( 'showmess' );
		if (!empty($_REQUEST['pp']))
		$array1 ['p_ic_id'] = $_REQUEST ['pp'] ;
		$this->set_pager ( $showmess, $array1, 'id desc', 9);
		$this->setLayout ( 'infoX' );
	}
	function actionInfoXALL() {
/*		$info = get_model ( 'info' );
		$ob = $info->find ( $_REQUEST ['id'] );
		$this->s_assign ( 'ob', $ob);*/
	// 二级菜单
		$showmess = get_model ( 'showmess' );
		$this->set_pager ( $showmess, NULL, 'id desc', 9);
		$this->setLayout ( 'infoX' );
	}
	function actionInfoK() {
		$this->infoK ();
		$this->setLayout ( 'infoX' );
	}
	/* 图片 */
	function actionPhoto() {
		$this->photo ();
		$this->setLayout ( 'photo' );
	}
	function actionPhotoX() {
		$this->photoX ();
		$this->setLayout ( 'photoX' );
	}
	/* 信息 */
	function actionExample() {
		$example = get_model ( 'example' );
		$this->set_pager ( $example, NULL, 'createtime desc', 15 );
		$this->setLayout ( 'example' );
	}
	function actionExampleX() {
		if (! empty ( $_REQUEST ['id'] )) {
			$example = get_model ( 'example' );
			$this->s_assign ( 'ob', $example->find ( $_REQUEST ['id'] ) );
		}
		$this->setLayout ( 'exampleX' );
	}
	//搜索
	function actionsearch(){
		$showme = get_model('showmess');
		if (empty ( $_REQUEST ['name'] ))
			js_alert ( '名称不能为空', NULL, $this->_url ( 'infoX',array('p'=>$_REQUEST['p'])  ) );
		else {
		$array['1']=1;
		array_push($array, array('name', '%' . $_REQUEST['name'] . '%', 'like'));
		$this->set_pager($showme,$array,'id desc',20);
		$this->setLayout ( 'search' );
		}
	}
	/* ------------------------------------文章内容 end------------------------------------- */
	/* ------------------------------------留言板 start------------------------------------- */
	function actionMessage() {
		$message = get_model ( 'message' );
		$this->set_pager ( $message,  NULL,' id desc ', 5);
		$this->setLayout ( 'message' );
	}
	function actionMessageAdd() {
			$message = get_model ( 'message' );
			if($_POST['name']==NULL){echo "<script>alert('主题不能为空');window.history.back(-1);</script>";exit;}
			$me ['name'] = h($_POST ['name']);
			if($_POST['mail']==NULL){echo "<script>alert('邮箱不能为空');window.history.back(-1);</script>";exit;}
			$me ['mail'] = h($_POST ['mail']);
			if($_POST['phone']==NULL){echo "<script>alert('电话不能为空');window.history.back(-1);</script>";exit;}
			$me ['phone'] = h($_POST ['phone']);
			if($_POST['other']==NULL){echo "<script>alert('留言不能为空');window.history.back(-1);</script>";exit;}
			$me ['other'] = h($_POST ['other']);
			$me ['address'] = 1;
			$message->save ( $me );
			js_alert ( '加入成功，我们会尽快和您取得联系', NULL, $this->_url ( 'index') );

	}
    function actionMessageAdd1() {
			$message = get_model ( 'message' );
			if($_POST['name']==NULL){echo "<script>alert('主题不能为空');window.history.back(-1);</script>";exit;}
			$me ['name'] = h($_POST ['name']);
			if($_POST['email']==NULL){echo "<script>alert('邮箱不能为空');window.history.back(-1);</script>";exit;}
			$me ['mail'] = h($_POST ['email']);
			if($_POST['message']==NULL){echo "<script>alert('电话不能为空');window.history.back(-1);</script>";exit;}
			$me ['other'] = h($_POST ['message']);
			$me ['address'] = 2;
			$message->save ( $me );
			js_alert ( '留言成功，我们会尽快和您取得联系', NULL, $this->_url ( 'index' ) );

	}
	/* ------------------------------------留言板 end------------------------------------- */
}
?>