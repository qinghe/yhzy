<?php /* Smarty version 2.6.26, created on 2015-03-30 15:09:08
         compiled from mgr/static/top.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/static/top.html', 16, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
<style type="text/css">
body {margin: 0px;padding: 0px;color: #192E32;background: #3C7EAE;font: 12px "sans-serif", "Arial", "Verdana";}
#header-div {background: #3C7EAE;border-bottom: 1px solid #FFF;}
#header-div1{color: #ffffff;height: 58px;}
#header-div1 a{color: #FFFFFF;text-decoration: underline;cursor: pointer;}
.t{float: left;font-size: 30px;font-weight: bold;padding-top: 10px;padding-left: 20px;}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	function outUser(){
		if(confirm('您确定要退出系统吗？')){
			top.location.href='<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admin','a' => 'exit'), $this);?>
';
		}
	}
</script>
</head>
<body> 
<div id="header-div"><div id="header-div1">
<div class="t"><?php echo $this->_tpl_vars['title']; ?>
</div> 
<div style="float: right;margin-top: 5px;margin-right: 20px;">
<a onClick="window.open('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'common','a' => 'calc'), $this);?>
', '计算器', 'height=300, width=400, left=300, top=300, toolbar=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, modal=yes')">计算器</a> 
<a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array(), $this);?>
" target="_blank">网站首页</a>
<span id="jnkc"></span>
<br>
<div style="margin-top: 10px;text-align: right;">
<span style="margin-left: 7px;margin-right: 7px;">当前用户：<?php echo $_SESSION['adminSession']['name']; ?>
</span>
<span onClick="outUser()" style="font-weight: bold;cursor: pointer">[退出]</span>
</div>
  </div> 
  <div style="clear: both;"></div>
</div></div>

<script type="text/javascript">
setInterval(function(){var myDate = new Date();$('#jnkc').text(myDate.getFullYear()+'年'+(myDate.getMonth() + 1)+'月'+myDate.getDate()+'日 '+myDate.getHours()+'时'+myDate.getMinutes()+'分'+myDate.getSeconds()+'秒 '+'星期'+'日一二三四五六'.charAt(myDate.getDay())	);} ,1000);
</script>
</body> 
</html>