<?php
FLEA::loadClass ( 'base_model' );
class model_photo extends base_model {
	var $tableName = 'photo';
	
	var $belongsTo = array(
		array(
			'mappingName' => 'pc',
			'tableClass' => 'model_photoCate',
			'foreignKey' => 'pc_id',
		),
	);
}
?>
