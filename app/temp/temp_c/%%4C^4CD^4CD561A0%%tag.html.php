<?php /* Smarty version 2.6.26, created on 2013-11-07 13:55:42
         compiled from mgr/tag.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/tag.html', 4, false),array('function', 'submit', 'mgr/tag.html', 15, false),array('function', 'reset', 'mgr/tag.html', 15, false),)), $this); ?>
<?php $this->assign('title1', '关键字'); ?>
<!-- 添加,修改 -->
<?php if ($this->_tpl_vars['act'] == 'toEdit'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con']), $this);?>
"><?php echo $this->_tpl_vars['title1']; ?>
列表</a><span>管理中心  - 编辑<?php echo $this->_tpl_vars['title1']; ?>
</span></div>

<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'edit'), $this);?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['ob']['id']; ?>
"/>
<table>
<tr><th><?php echo $this->_tpl_vars['title1']; ?>
名称：</th><td><input name="name" type="text" value="<?php echo $this->_tpl_vars['ob']['name']; ?>
"/></td></tr>
<tr><th><?php echo $this->_tpl_vars['title1']; ?>
上传图片：</th><td><input name="photo" type="file"/></td></tr>

<tr><th>网址：</th><td><input type="text" name="url" value="<?php echo $this->_tpl_vars['ob']['url']; ?>
"/></td></tr>
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array(), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>

<!-- 查询 -->
<?php elseif ($this->_tpl_vars['act'] == '' || $this->_tpl_vars['act'] == 'index'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit'), $this);?>
">录入新<?php echo $this->_tpl_vars['title1']; ?>
</a><span>管理中心  - <?php echo $this->_tpl_vars['title1']; ?>
列表</span></div>

<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del'), $this);?>
" method="post" name="delForm">
<div class="l">
<table cellspacing="1" cellpadding="3">
<tr>
<th width="20px"><img src="images/mgr/icon_drop.gif" onclick="return delSub()"/></th>
<th><?php echo $this->_tpl_vars['title']; ?>
名称</th>
<th width="150px">网址</th>
<th width="30px">编辑</th>
</tr>
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr>
<td align="center"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"/></td>
<td><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['item']['url']; ?>
</td>
<td align="center"><img src="images/mgr/icon_edit.gif" title="编辑" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit','id' => $this->_tpl_vars['item']['id'],'from' => 1), $this);?>
')"/></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "mgr/common/mgr_pager.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</form>

<?php endif; ?>