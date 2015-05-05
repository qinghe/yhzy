<?php
/////////////////////////////////////////////////////////////////////////////
// FleaPHP Framework
//
// Copyright (c) 2005 - 2008 QeeYuan China Inc. (http://www.qeeyuan.com)
//
// 许可协议，请查看源代码中附带的 LICENSE.txt 文件，
// 或者访问 http://www.fleaphp.org/ 获得详细信息。
/////////////////////////////////////////////////////////////////////////////

/**
 * 定义 FLEA_View_SmartyHelper 类
 *
 * @copyright Copyright (c) 2005 - 2008 QeeYuan China Inc. (http://www.qeeyuan.com)
 * @author 起源科技 (www.qeeyuan.com)
 * @package Core
 * @version $Id: SmartyHelper.php 1039 2008-04-25 19:29:53Z qeeyuan $
 */

/**
 * FLEA_View_SmartyHelper 扩展了 Smarty 和 TemplateLite 模版引擎，
 * 提供对 FleaPHP 内置功能的直接支持。
 *
 * @package Core
 * @author 起源科技 (www.qeeyuan.com)
 * @version 1.0
 */
class FLEA_View_SmartyHelper
{
    /**
     * 构造函数
     *
     * @param Smarty $tpl
     *
     * @return FLEA_View_SmartyHelper
     */
    function FLEA_View_SmartyHelper(& $tpl) {
        $tpl->register_function('url',          array(& $this, '_pi_func_url'));
        $tpl->register_function('webcontrol',   array(& $this, '_pi_func_webcontrol'));
        $tpl->register_function('_t',           array(& $this, '_pi_func_t'));
        $tpl->register_function('get_app_inf',  array(& $this, '_pi_func_get_app_inf'));
        $tpl->register_function('dump_ajax_js', array(& $this, '_pi_func_dump_ajax_js'));

        $tpl->register_modifier('parse_str',    array(& $this, '_pi_mod_parse_str'));
        $tpl->register_modifier('to_hashmap',   array(& $this, '_pi_mod_to_hashmap'));
        $tpl->register_modifier('col_values',   array(& $this, '_pi_mod_col_values'));
        
        //王世哲 ext
        $tpl->register_function('submit',       array(& $this, '_wangshizhe_submit'));
        $tpl->register_function('reset',        array(& $this, '_wangshizhe_reset'));
        $tpl->register_function('editor',        array(& $this, '_wangshizhe_kindeditor'));
        $tpl->register_function('calendar',        array(& $this, '_wangshizhe_calendar'));
        $tpl->register_function('flash',        array(& $this, '_wangshizhe_flash'));
    }

    /**
     * 提供对 FleaPHP url() 函数的支持
     */
    function _pi_func_url($params)
    {
    	//TODO wangshizhe update
        $controllerName = isset($params['c']) ? $params['c'] : null;
        unset($params['c']);
        //TODO wangshizhe update
        $actionName = isset($params['a']) ? $params['a'] : null;
        unset($params['a']);
        $anchor = isset($params['anchor']) ? $params['anchor'] : null;
        unset($params['anchor']);

        $options = array('bootstrap' => isset($params['bootstrap']) ? $params['bootstrap'] : null);
        unset($params['bootstrap']);

        $args = array();
        foreach ($params as $key => $value) {
            if (is_array($value)) {
                $args = array_merge($args, $value);
                unset($params[$key]);
            }
        }
        $args = array_merge($args, $params);

        return url($controllerName, $actionName, $args, $anchor, $options);
    }

    /**
     * 提供对 FleaPHP WebControls 的支持
     */
    function _pi_func_webcontrol($params)
    {
        $type = isset($params['type']) ? $params['type'] : 'textbox';
        unset($params['type']);
        $name = isset($params['name']) ? $params['name'] : null;
        unset($params['name']);

        $ui =& FLEA::initWebControls();
        return $ui->control($type, $name, $params, true);
    }

    /**
     * 提供对 FleaPHP _T() 函数的支持
     */
    function _pi_func_t($params)
    {
        return _T($params['key'], isset($params['lang']) ? $params['lang'] : null);
    }

    /**
     * 提供对 FLEA::getAppInf() 方法的支持
     */
    function _pi_func_get_app_inf($params)
    {
        return FLEA::getAppInf($params['key']);
    }

    /**
     * 输出 FLEA_Ajax 生成的脚本
     */
    function _pi_func_dump_ajax_js($params)
    {
        $wrapper = isset($params['wrapper']) ? (bool)$params['wrapper'] : true;
        $ajax =& FLEA::initAjax();
        /* @var $ajax FLEA_Ajax */
        return $ajax->dumpJs(true, $wrapper);
    }

    /**
     * 将字符串分割为数组
     */
    function _pi_mod_parse_str($string)
    {
        $arr = array();
        parse_str(str_replace('|', '&', $string), $arr);
        return $arr;
    }

    /**
     * 将二维数组转换为 hashmap
     */
    function _pi_mod_to_hashmap($data, $f_key, $f_value = '')
    {
        $arr = array();
        if (!is_array($data)) { return $arr; }
        if ($f_value != '') {
            foreach ($data as $row) {
                $arr[$row[$f_key]] = $row[$f_value];
            }
        } else {
            foreach ($data as $row) {
                $arr[$row[$f_key]] = $row;
            }
        }
        return $arr;
    }

    /**
     * 获取二维数组中指定列的数据
     */
    function _pi_mod_col_values($data, $f_value)
    {
        $arr = array();
        if (!is_array($data)) { return $arr; }
        foreach ($data as $row) {
            $arr[] = $row[$f_value];
        }
        return $arr;
    }
    /**
     * 王世哲 EXT
     */
    //---------------------通用方法-------------------------
    function _wangshizhe_submit($data){
    	if(empty($data['value']))
    		$data['value'] = '录入';
    	return "<input type='submit' value=' {$data['value']} ' IsShowProcessBar='True' class='btn1'/>";
    }
	function _wangshizhe_reset($data){
    	if(empty($data['value']))
    		$data['value'] = '重置';
    	return "<input type='reset' value=' {$data['value']} ' class='btn1'/>";
    }
	function _wangshizhe_kindeditor($data){
    	$baseUrl = BASEURL;
    	$height = 400;
    	if($data['model'] == 2)
    		$height = 200;
    	
    	if(empty($data['name']))
    		$data['name'] = 'other';
    	$str = "<script type='text/javascript'>
    	KE.show({id : '{$data['name']}',cssPath : './css/default.css',allowFileManager : true";
    	
    	if($data['model'] == 2){
    		$str .= ",items : [
        	'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
        	'removeformat', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
        	'insertunorderedlist', 'emoticons', 'image', 'link']";
    	}
    	
    	$str .= "});</script>
		<textarea id='{$data['name']}' name='{$data['name']}' style='width:560px;height:{$height}px;visibility:hidden;'>{$data['value']}</textarea>";
    	return $str;
    }
    function _wangshizhe_calendar($data){
    	$value = '';
    	if(!empty($data['value']))
    		$value = substr($data['value'], 0, 10);
    	if(empty($value))
    		$value = date ( 'Y-m-d' );
    	return "<script>
			var c = new Calendar('c');
			document.write(c);
			</script>
			<input type='text' name='{$data['name']}' readonly='readonly' value='{$value}'  onfocus='c.showMoreDay = false;c.show(this);'/>"
		;
    }
    function _wangshizhe_flash($data){
    	return "<embed src='swf/{$data['name']}.swf' type='application/x-shockwave-flash' quality='high' wmode='transparent' width='{$data['width']}px' height='{$data['height']}px'/>";
//    	<EMBED style="LEFT: 35px; POSITION: absolute; TOP: 180px; absolute: " align=right src='swf/point2.swf' width='306px' height="176px" type=application/x-shockwave-flash wmode="transparent" quality="high" wmode="opaque"/>
    }
}