<?php
/**
 * TODO wangshizhe
 * 超出省略
 *
 * @param unknown_type $string
 * @param unknown_type $width
 * @return unknown
 */
function smarty_modifier_css_beyond($string, $width)
{
	return "<span style='overflow: hidden; text-overflow: ellipsis; width: {$width}px;'><nobr>{$string}</nobr></span>";
}
?>
