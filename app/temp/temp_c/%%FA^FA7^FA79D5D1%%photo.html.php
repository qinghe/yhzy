<?php /* Smarty version 2.6.26, created on 2015-03-30 15:10:38
         compiled from mgr/photo.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/photo.html', 6, false),array('function', 'submit', 'mgr/photo.html', 46, false),array('function', 'reset', 'mgr/photo.html', 46, false),)), $this); ?>
<?php $this->assign('title', '幻灯片'); ?>
<?php $this->assign('up', $_GET['up']); ?>
<?php $this->assign('pc_id', $_GET['pc_id']); ?>
<?php if ($this->_tpl_vars['act'] == '' || $this->_tpl_vars['act'] == 'index'): ?>

<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit','pc_id' => $this->_tpl_vars['pc_id'],'up' => $this->_tpl_vars['up']), $this);?>
">录入新<?php echo $this->_tpl_vars['title']; ?>
</a><span>管理中心  - <?php echo $this->_tpl_vars['title']; ?>
列表</span></div>
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del'), $this);?>
" method="post" name="delForm">
<div class="l">
<table cellspacing="1" cellpadding="3">
<tr>
<th width="20px"><img src="images/mgr/icon_drop.gif" onclick="return delSub()"/></th>
<th width="40px">排序</th>
<th><?php echo $this->_tpl_vars['title']; ?>
名称</th>
<th width="40px">推荐</th>
<th width="40px">编辑</th>
</tr>
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['name']['iteration']++;
?>
<tr>
<td align="center"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"/></td>
<td width="40px"><input id="n_<?php echo $this->_tpl_vars['item']['id']; ?>
" type="text" style="width: 40px;" value="<?php echo $this->_tpl_vars['item']['number']; ?>
" onchange="cnumber('<?php echo $this->_tpl_vars['item']['id']; ?>
', '<?php echo $this->_tpl_vars['con']; ?>
')"/></td>
<td><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
<td align="center"><img id="up_<?php echo $this->_tpl_vars['item']['id']; ?>
" src="images/mgr/<?php if ($this->_tpl_vars['item']['up'] == 0): ?>no<?php else: ?>yes<?php endif; ?>.gif" onclick="cLogin('<?php echo $this->_tpl_vars['item']['id']; ?>
', '<?php echo $this->_tpl_vars['con']; ?>
', 'up')"/></td>
<td align="center"><img src="images/mgr/icon_edit.gif" title="编辑" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit','id' => $this->_tpl_vars['item']['id'],'pc_id' => $this->_tpl_vars['pc_id'],'up' => $this->_tpl_vars['up']), $this);?>
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

<?php elseif ($this->_tpl_vars['act'] == 'toEdit'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con']), $this);?>
"><?php echo $this->_tpl_vars['title']; ?>
列表</a><span>管理中心  - 编辑<?php echo $this->_tpl_vars['title']; ?>
</span></div>
<script type="text/javascript" charset="utf-8" src="lib/kindeditor/kindeditor.js"></script>

<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'edit','pc_id' => $this->_tpl_vars['pc_id'],'up' => $this->_tpl_vars['up']), $this);?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['ob']['id']; ?>
"/>
<table>

<tr><th>大名称：</th><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['ob']['name']; ?>
"/></td></tr>
<tr><th>小名称：</th><td><input type="text" name="from" value="<?php echo $this->_tpl_vars['ob']['from']; ?>
"/></td></tr>
<tr><th>图片：</th><td><input type="file" name="photo"/></td></tr>

<tr><th>链接：</th><td><input type="text" name="fun" value="<?php echo $this->_tpl_vars['ob']['fun']; ?>
"/></td></tr>
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array(), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>

<?php endif; ?>