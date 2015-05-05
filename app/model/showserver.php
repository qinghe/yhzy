<?php
FLEA::loadClass ( 'base_model' );
class model_showserver extends base_model {
	var $tableName = 'showserver';
	
	var $belongsTo = array(
		array(
			'mappingName' => 'ic',
			'tableClass' => 'model_info',
			'foreignKey' => 'ic_id',
		),
	);
}
?>
