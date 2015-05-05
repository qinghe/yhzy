<?php
FLEA::loadClass('base_model');
class model_linkperson extends base_model{
	var $tableName='linkperson';
	var $belongsTo = array(
		array(
			'mappingName' => 'sort',
			'tableClass' => 'model_info',
			'foreignKey' => 'sortid',
		),
	);
}
?>