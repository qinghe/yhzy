<?php /* Smarty version 2.6.26, created on 2013-11-07 16:29:59
         compiled from main/common/top.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'main/common/top.html', 6, false),)), $this); ?>
<?php $this->assign('p', $_GET['p']); ?>
<!--top-->
<div id="header">
<div class="hea_ttop">
<div class="search">
<form class="" action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'search'), $this);?>
" method="post">
<input name="name" type="text" class="input1" /><input type="image" src="images/btn.jpg" value="按钮" class="input2" />
</div>
</div>
<div class="hea_top">
<img src="images/hea_img12.jpg" width="985" height="48" border="0" usemap="#Map" />
<map name="Map" id="Map">
	<area shape="rect" coords="298,24,364,44" href="index.php" />
	<area shape="rect" coords="389,24,446,43" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => 1), $this);?>
" />
	<area shape="rect" coords="473,23,532,45" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => 2), $this);?>
" />
	<area shape="rect" coords="559,25,622,41" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => 3), $this);?>
" />
	<area shape="rect" coords="643,24,708,42" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => 4), $this);?>
" />
	<area shape="rect" coords="729,24,796,44" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => 5), $this);?>
" />
	<area shape="rect" coords="814,21,876,43" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => 6), $this);?>
" />
	<area shape="rect" coords="900,22,967,43" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => 7), $this);?>
" />
</map>
</div>
<div class="hea_left">
<?php echo $this->_tpl_vars['inis']['gonggao']; ?>

</div>
<div class="hea_right"><img src="images/banner_06.jpg" width="760" height="257" /></div>
<div class="clear"></div>
</div>