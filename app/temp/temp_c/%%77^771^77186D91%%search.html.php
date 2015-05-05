<?php /* Smarty version 2.6.26, created on 2013-11-12 14:46:18
         compiled from main/search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'main/search.html', 10, false),array('function', 'url', 'main/search.html', 15, false),)), $this); ?>
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
<div class="right_tit">搜索结果</div>
<div class="caiwu_text">
<?php if (count($this->_tpl_vars['obs']) == 0): ?>
<div align="center">没有找到搜索结果</div>
<?php endif; ?>
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

</div>
<div class="clear"></div>
</div>