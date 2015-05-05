<?php
FLEA::loadClass ( 'base_model' );
class model_orderInfo extends base_model {
	var $tableName = 'order_info';
	
		var $belongsTo = array(
		array(
			'mappingName' => 'us',
			'tableClass' => 'model_user',
			'foreignKey' => 'us_id',
		),
	);
	
	var $hasMany = array(
		array(
			'mappingName' => 'ogs',
			'tableClass' => 'model_orderGoods',
			'foreignKey' => 'oi_id',
		),
	);
}
?>
