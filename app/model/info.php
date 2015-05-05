<?php
FLEA::loadClass ( 'base_model' );
class model_info extends base_model {
	var $tableName = 'info';
	
	var $belongsTo = array(
		array(
			'mappingName' => 'ic',
			'tableClass' => 'model_infoCate',
			'foreignKey' => 'ic_id',
		),
	);
}
?>
