<?php
FLEA::loadClass ( 'base_model' );
class model_photoCate extends base_model {
	var $tableName = 'photo_cate';
	
	var $hasMany = array(
		array(
			'mappingName' => 'pcs',
			'tableClass' => 'model_photoCate',
			'foreignKey' => 'pid',
		),
		array(
			'mappingName' => 'phs',
			'tableClass' => 'model_photo',
			'foreignKey' => 'pc_id',
		),
	);
	//查询父类
	function findSuper() {
		return $this->findAll(array ('pid' => 0 ));
	}
}
?>
