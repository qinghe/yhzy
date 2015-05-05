<?php

//验证邮箱
function checkEmail($inAddress) {
	return (ereg ( "^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+", $inAddress ));
}
/**
 * 页面重定向，可以输出是否
 *
 * @param string $url
 * @param booble $b
 * @param string $alert
 */
function cScript($url, $b, $alert = '') {
	if ($b)
		js_alert ( $alert . '成功', NULL, $url );
	else
		js_alert ( $alert . '失败', NULL, $url );
}
/*当前时间，插入数据库时使用*/
function dbOfDate() {
	return date ( 'Y-m-d H:i:s' );
}
/*
* 随机生成文件名
*/
function r_filename() {
	return date ( 'ymdHis' ) . rand ( 100, 999);
}
function delete_htm($scr) {
	$str = '';
	for($i = 0; $i < strlen ( $scr ); $i ++) {
		if (substr ( $scr, $i, 1 ) == "<") {
			while ( substr ( $scr, $i, 1 ) != ">" )
				$i ++;
			$i ++;
		}
		$str = $str . substr ( $scr, $i, 1 );
	}
	return ($str);
}
/* 去除js */
function clear_js($str){
	$str = preg_replace ("'<script[^>]*?>'", '', $str);
	$str = preg_replace ("'</script[^>]*?>'", '', $str);
	return $str;
}

/**
 * 查询目录下所有文件
 */
function showDir($dir){
	$fis = array();
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) { 
			while (($file = readdir($dh)) !== false) { 
				if ($file!="." && $file!="..")
					array_push($fis, $file);
			}
			closedir($dh);
		} 
	}
	return $fis;
}

/**
 * 把任何字符串类型都转化没utf-8
 */
function str_get_utf8($data){
	$encode_arr = array( "ASCII","CP936", "GBK", "GB2312", "BIG5","ISO-8859-1", "JIS", "eucjp-win", "sjis-win", "EUC-JP","UTF-8");
	$encoded = mb_detect_encoding( $data, $encode_arr);
	return mb_convert_encoding( $data, 'utf-8', $encoded );
}

/* --------------------限制与具体架构中的通用函数------------------------ */
/**
 * 获取数据层类
 */
function get_model($ado) {
	return get_singleton ( 'model_' . $ado );
}
/* ------------------------SOA---------------------------- */
/**
 * 图片上传
 * @param string $dir 存储路径
 * @param string $photoName 图片名称
 * @param string $formName 表单获取值
 * @return 成功返回图片名称 失败返回false
 */
function upload_photo($dir, $photoName = null, $formName = 'photo') {
	FLEA::loadHelper ( 'uploader' );
	$uploader = new FLEA_Helper_FileUploader ( );
	$photoName = empty ( $photoName ) ? r_filename () . '.jpg' : $photoName;
	if ($uploader->isFileExist ( $formName )) {
		$photo = $uploader->getFile ( $formName );
		if ($photo->move ( UPLOAD . $dir . DS . $photoName ))
			return $photoName;
		return false;
	}
	return false;
}
/**
 * 删除文件
 * @param string $dir 目录名
 * @param string $file_name 文件名
 */
function remove_file($dir, $file_name){
	unlink ( UPLOAD . $dir . DS . $file_name);
}

class WSZ_Date{
	/**
	 * 根据字符串截取
	 */
	function strGetYear($str){
		return substr($str, 0, 4);
	}
	function strGetMonth($str){
		return substr($str, 5, 2);
	}
	function strGetDay($str){
		return substr($str, 8, 2);
	}
	/**
	 * 与当前时间所差的天数
	 */
	function lessDayForNow($date){
		return (strtotime(date("Y-m-d H:i:s"))-strtotime($date))/86400;
	}
}
//设置flash的xml换图片
function setxml(){
		$showmess = get_model ( 'photo' );		
		$row9 = $showmess->findAll(NULL, 'number desc',8);
		//var_dump($row9);
		 unlink("xml/bcastr.xml");  
		//生成xml文档
		
		$xmlDoc = new DOMDocument(); 
		if(!file_exists("xml/bcastr.xml")){ 
		$xmlstr = "<?xml version='1.0' encoding='utf-8' ?><bcaster autoPlayTime='3'></bcaster>"; 
		$xmlDoc->loadXML($xmlstr); 
		$xmlDoc->save("xml/bcastr.xml"); 
		} else { $xmlDoc->load("xml/bcastr.xml");} 
		
		$Root = $xmlDoc->documentElement; 
		$ii=0;
		for($j=0;$j<count($row9);$j++)
		{
			$ii++;
		$node1 = $xmlDoc->createElement("item".$ii); 
		//$text = $xmlDoc->createTextNode(iconv("GB2312","UTF-8","2222")); 
		//$node1->appendChild($text); 
		
		$price = $xmlDoc->createAttribute("item_url"); 
		$node1->appendChild($price); 
		$priceValue = $xmlDoc->createTextNode("app/upload/photo/".$row9[$j]['photo']); 
		$price->appendChild($priceValue); 

		//$price1 = $xmlDoc->createAttribute("link"); 
		//$node1->appendChild($price1); 
		//$priceValue1 = $xmlDoc->createTextNode("index.php?c=default&a=contact1&id=".$row9[$j]['id']); 
		//$price1->appendChild($priceValue1); 
		
		//$price = $xmlDoc->createAttribute("itemtitle"); 
		//$node1->appendChild($price); 
		//$priceValue = $xmlDoc->createTextNode($row9[$j]['name']); 
		//$price->appendChild($priceValue); 
		$Root->appendChild($node1);
		
		}
		 
		$xmlDoc->save("xml/bcastr.xml"); 	
		
}
function setxml1(){
		$showmess = get_model ( 'photo1' );		
		$row9 = $showmess->findAll(NULL, 'number desc',8);
		//var_dump($row9);
		 unlink("xml/bcastr1.xml");  
		//生成xml文档
		
		$xmlDoc = new DOMDocument(); 
		if(!file_exists("xml/bcastr1.xml")){ 
		$xmlstr = "<?xml version='1.0' encoding='utf-8' ?><bcaster autoPlayTime='3'></bcaster>"; 
		$xmlDoc->loadXML($xmlstr); 
		$xmlDoc->save("xml/bcastr1.xml"); 
		} else { $xmlDoc->load("xml/bcastr1.xml");} 
		
		$Root = $xmlDoc->documentElement; 
		$ii=0;
		for($j=0;$j<count($row9);$j++)
		{
			$ii++;
		$node1 = $xmlDoc->createElement("item".$ii); 
		//$text = $xmlDoc->createTextNode(iconv("GB2312","UTF-8","2222")); 
		//$node1->appendChild($text); 
		
		$price = $xmlDoc->createAttribute("item_url"); 
		$node1->appendChild($price); 
		$priceValue = $xmlDoc->createTextNode("app/upload/photo/".$row9[$j]['photo']); 
		$price->appendChild($priceValue); 

		$price1 = $xmlDoc->createAttribute("link"); 
		$node1->appendChild($price1); 
		$priceValue1 = $xmlDoc->createTextNode("index.php?c=default&a=contact1&id=".$row9[$j]['id']); 
		$price1->appendChild($priceValue1); 
		
		$price = $xmlDoc->createAttribute("itemtitle"); 
		$node1->appendChild($price); 
		$priceValue = $xmlDoc->createTextNode($row9[$j]['name']); 
		$price->appendChild($priceValue); 
		$Root->appendChild($node1);
		}
		 
		$xmlDoc->save("xml/bcastr1.xml"); 	
		
}
?>