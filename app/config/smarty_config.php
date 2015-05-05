<?php
return array (
'view' => 'FLEA_View_Smarty', 
'viewConfig' => array (
	'smartyDir' => 'lib/Smarty', 
	'template_dir' => APP . 'view', 
	'compile_dir' => APP . 'temp/temp_c', 
	'cache_dir' => APP . 'temp/temp_c/cache',
	'left_delimiter' => '#{',
	'right_delimiter' => '}',
	'caching' => false )
);
?>