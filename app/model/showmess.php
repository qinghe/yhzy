<?php
FLEA::loadClass ( 'base_model' );
class model_showmess extends base_model {
	var $tableName = 'showmess';
	
	var $belongsTo = array(
		array(
			'mappingName' => 'ic',
			'tableClass' => 'model_infoCate',
			'foreignKey' => 'ic_id',
		),
		array(
			'mappingName' => 'icsort',
			'tableClass' => 'model_infoCate',
			'foreignKey' => 'ic_sort',
		),
	);
}
?>
