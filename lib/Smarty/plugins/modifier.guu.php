<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty truncate modifier plugin
 *
 * Type:     modifier<br>
 * Name:     truncate<br>
 * Purpose:  Truncate a string to a certain length if necessary,
 *           optionally splitting in the middle of a word, and
 *           appending the $etc string or inserting $etc into the middle.
 * @link http://smarty.php.net/manual/en/language.modifier.truncate.php
 *          truncate (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @param integer
 * @param string
 * @param boolean
 * @param boolean
 * @return string
 * #TODO wangshizhe update 中文处理
 */
function smarty_modifier_guu($string) {
	//return iconv("gb2312",   "utf-8", $string);
	$year = date('Y');
	$yy = substr($string,0,4);
	$v = $year-$yy;
	return $v;
}
/* vim: set expandtab: */

?>
