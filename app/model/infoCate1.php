<?php
FLEA::loadClass ( 'base_model' );
class model_infoCate1 extends base_model {
	var $tableName = 'info_cate1';
		var $hasMany = array(
		array(
			'mappingName' => 'pid',
			'tableClass' => 'model_infoCate',
			'foreignKey' => 'p_id',
		),
		
	);
}
?>
