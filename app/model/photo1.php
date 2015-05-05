<?php
FLEA::loadClass ( 'base_model' );
class model_photo1 extends base_model {
	var $tableName = 'photo1';
	
	var $belongsTo = array(
		array(
			'mappingName' => 'pc',
			'tableClass' => 'model_photoCate',
			'foreignKey' => 'pc_id',
		),
	);
}
?>
