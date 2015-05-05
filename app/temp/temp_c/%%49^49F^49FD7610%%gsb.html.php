<?php /* Smarty version 2.6.26, created on 2013-11-12 09:50:56
         compiled from main/gsb.html */ ?>
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
<div class="right_tit"><?php echo $this->_tpl_vars['lcatename']['name']; ?>
公示板</div>

<div class="gc_text">
<?php echo $this->_tpl_vars['lcatename']['other']; ?>

<div class="clear"></div>

</div>
</div>
<div class="clear"></div>
</div>