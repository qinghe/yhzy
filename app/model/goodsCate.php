<?php
FLEA::loadClass ( 'base_model' );
class model_goodsCate extends base_model {
	var $tableName = 'goods_cate';
	
	var $hasMany = array(
		array(
			'mappingName' => 'gcs',
			'tableClass' => 'model_goodsCate',
			'foreignKey' => 'pid',
		),
	);
	//查询父类
	function findSuper() {
		return $this->findAll(array ('pid' => 0 ));
	}
}
?>
