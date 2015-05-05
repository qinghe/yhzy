<?php
FLEA::loadClass ( 'base_model' );
class model_example extends base_model {
	var $tableName = 'example';
	
	var $belongsTo = array(
		array(
			'mappingName' => 'ec',
			'tableClass' => 'model_exampleCate',
			'foreignKey' => 'ec_id',
		),
	);
}
?>
