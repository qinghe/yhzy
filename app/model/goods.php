<?php
FLEA::loadClass ( 'base_model' );
class model_goods extends base_model {
	var $tableName = 'goods';
	
	var $belongsTo = array(
		array(
			'mappingName' => 'gc',
			'tableClass' => 'model_goodsCate',
			'foreignKey' => 'gc_id',
		),
	);
}
?>
