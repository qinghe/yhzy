<?php /* Smarty version 2.6.26, created on 2013-11-12 14:51:29
         compiled from main/infoX.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'main/infoX.html', 13, false),array('modifier', 'truncate', 'main/infoX.html', 22, false),)), $this); ?>
<?php $this->assign('p', $_GET['p']); ?>
<?php $this->assign('id', $_GET['id']); ?>
<?php $this->assign('type', $_GET['type']); ?>
<?php $this->assign('sname', $_GET['sname']); ?>
<div id="ziye">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'main/common/left.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="ziye_right">
<div class="right_tit"><?php if ($this->_tpl_vars['p'] == 7 && $this->_tpl_vars['id'] == NULL): ?><?php $_from = $this->_tpl_vars['topnav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['p']): ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php elseif ($this->_tpl_vars['p'] == 7 && $this->_tpl_vars['id'] != NULL): ?><?php echo $this->_tpl_vars['lcatename']['name']; ?>
案例<?php else: ?><?php echo $this->_tpl_vars['lcatename']['name']; ?>
<?php endif; ?></div>
<?php if ($this->_tpl_vars['p'] == 7 && $this->_tpl_vars['id'] == NULL): ?>
<div class="case_text">
<?php $_from = $this->_tpl_vars['casenav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<div class="case_<?php if ($this->_tpl_vars['key'] == 0): ?>left<?php else: ?>right<?php endif; ?>">
<div class="case_tit1"><div class="tit_left"><?php echo $this->_tpl_vars['item']['name']; ?>
案例</div><div class="tit_right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => $this->_tpl_vars['item']['p_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
" style="color:#000000;">更多>></a></div>
<div class="clear"></div></div>
<ul class="ul5">
<?php if ($this->_tpl_vars['key'] == 0): ?>
<?php $_from = $this->_tpl_vars['case1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
<li>
<div class="ul5_left"><img src="app/upload/info/<?php echo $this->_tpl_vars['item1']['photo']; ?>
" width="102" height="72" /></div>
<div class="ul5_right">
<div class="ul5_tit"><?php echo $this->_tpl_vars['item1']['name']; ?>
</div>
<div class="ul5_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['other'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
...<b><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'content','p' => $this->_tpl_vars['item1']['p_ic_id'],'id' => $this->_tpl_vars['item1']['id']), $this);?>
" style="color:#000000;">[更多]</a></b></div>
</div>
<div class="clear"></div>
</li>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<?php $_from = $this->_tpl_vars['case2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item2']):
?>
<li>
<div class="ul5_left"><img src="app/upload/info/<?php echo $this->_tpl_vars['item2']['photo']; ?>
" width="102" height="72" /></div>
<div class="ul5_right">
<div class="ul5_tit"><?php echo $this->_tpl_vars['item2']['name']; ?>
</div>
<div class="ul5_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['other'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
...<b><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'content','p' => $this->_tpl_vars['item2']['p_ic_id'],'id' => $this->_tpl_vars['item2']['id']), $this);?>
" style="color:#000000;">[更多]</a></b></div>
</div>
<div class="clear"></div>
</li>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
</ul>

</div>
<?php endforeach; endif; unset($_from); ?>
<div class="clear"></div>

</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['lcatename']['sort'] == 1): ?>
<div class="gc_text">
<?php if ($this->_tpl_vars['lcatename']['id'] == 111 || $this->_tpl_vars['lcatename']['id'] == 112): ?>
<?php echo $this->_tpl_vars['lcatename']['other']; ?>

<?php else: ?>
<?php echo $this->_tpl_vars['gsjj7']['other']; ?>

<?php endif; ?>
<div class="clear"></div>

</div>
<?php elseif ($this->_tpl_vars['lcatename']['sort'] == 2): ?>
<?php if ($this->_tpl_vars['p'] == 7): ?>
<div class="case_text">
<ul class="ul6">
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li>
<div class="ul6_left"><img src="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" width="102" height="72" /></div>
<div class="ul6_right">
<div class="ul6_tit"><?php echo $this->_tpl_vars['item']['name']; ?>
</div>
<div class="ul6_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['other'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 120) : smarty_modifier_truncate($_tmp, 120)); ?>
...<b><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'content','p' => $this->_tpl_vars['item']['p_ic_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
" style="color:#000000;">[更多]</a></b></div>
</div>
<div class="clear"></div>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<div class="clear"></div>

</div>
<div class="fenye"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'util/pager.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php elseif ($this->_tpl_vars['p'] == 5): ?>
<div class="case_text">
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
  <TABLE id="senfe" cellSpacing=0 cellPadding=0 width="430px" border=0>
  <TBODY>

  <TR>
    <TD rowspan="4" align="center" style="width:156"><img src="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" width="156" height="100" /></TD>
    <TD>招聘人数：</TD>
    <TD><?php echo $this->_tpl_vars['item']['person']; ?>
</TD>
    <TD>学历:</TD>
    <TD colspan="2"><?php echo $this->_tpl_vars['item']['address']; ?>
</TD>
    </TR>
	  <TR>
	    <TD>工作经验：</TD>
    <TD><?php echo $this->_tpl_vars['item']['age']; ?>
</TD>
    <TD>性别：</TD>
    <TD colspan="2"><?php echo $this->_tpl_vars['item']['mail']; ?>
</TD>
    </TR>
	  <TR>
	    <TD>工资待遇：</TD>
    <TD><?php echo $this->_tpl_vars['item']['wage']; ?>
</TD>
    <TD>结束时间：</TD>
    <TD colspan="2"><?php echo $this->_tpl_vars['item']['deadline']; ?>
</TD>
    </TR>
	  <TR>
    <TD colspan="5">其他说明：<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['other'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)); ?>
...</TD>
    </TR>
  </TBODY></TABLE>
<?php endforeach; endif; unset($_from); ?>
<div class="clear"></div>

</div>
<div class="fenye"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'util/pager.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php endif; ?>
<?php elseif ($this->_tpl_vars['lcatename']['sort'] == 3): ?>
<div class="caiwu_text">

<ul class="ul4">
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><span style="float:right;">阅读<?php if ($this->_tpl_vars['num'][$this->_tpl_vars['item']['id']] == NULL): ?>0<?php else: ?><?php echo $this->_tpl_vars['num'][$this->_tpl_vars['item']['id']]; ?>
<?php endif; ?>次</span><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'content','p' => $this->_tpl_vars['item']['p_ic_id'],'ic_id' => $this->_tpl_vars['item']['ic_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>

</div>
<div class="fenye"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'util/pager.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php endif; ?>
</div>
<div class="clear"></div>
</div>