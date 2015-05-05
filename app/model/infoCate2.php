<?php
FLEA::loadClass ( 'base_model' );
class model_infoCate2 extends base_model {
	var $tableName = 'info_cate2';
		var $hasMany = array(
		array(
			'mappingName' => 'pid',
			'tableClass' => 'model_infoCate',
			'foreignKey' => 'p_id',
		),
		
	);
}
?>
