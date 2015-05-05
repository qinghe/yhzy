<?php
FLEA::loadClass ( 'base_model' );
class model_photoCate1 extends base_model {
	var $tableName = 'photo_cate1';
	
	var $hasMany = array(
		array(
			'mappingName' => 'pcs',
			'tableClass' => 'model_photoCate1',
			'foreignKey' => 'pid',
		),
		array(
			'mappingName' => 'phs',
			'tableClass' => 'model_photo1',
			'foreignKey' => 'pc_id',
		),
	);
	//查询父类
	function findSuper() {
		return $this->findAll(array ('pid' => 0 ));
	}
}
?>
