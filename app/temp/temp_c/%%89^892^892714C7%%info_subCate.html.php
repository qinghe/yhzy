<?php /* Smarty version 2.6.26, created on 2015-03-30 15:40:06
         compiled from mgr/info_subCate.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/info_subCate.html', 4, false),)), $this); ?>
<?php $this->assign('title', '信息分类'); ?>

<?php if ($this->_tpl_vars['act'] == 'subcate'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit'), $this);?>
">录入新<?php echo $this->_tpl_vars['title']; ?>
</a><span>管理中心  - <?php echo $this->_tpl_vars['title']; ?>
列表</span></div>

<div class="l">
<table cellspacing="1" cellpadding="3">
<tr><td colspan="6">  <a style="color: red; float: right; margin-right: 35px;" href= "javascript:history.go(-1) ">返回上一级</a></td></tr>
<?php if ($this->_tpl_vars['subobs']): ?>
<tr>
<th width="40px">排序</th>
<th>栏目名称</th>
<th>查看子分类</th>
<th width="60px">增加下级</th>
<th width="30px">修改</th>
<th width="30px">删除</th>
</tr>
<?php $_from = $this->_tpl_vars['subobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr>
<td width="40px"><input id="n_<?php echo $this->_tpl_vars['item']['id']; ?>
" type="text" style="width: 40px;" value="<?php echo $this->_tpl_vars['item']['number']; ?>
" onchange="cnumber('<?php echo $this->_tpl_vars['item']['id']; ?>
', '<?php echo $this->_tpl_vars['con']; ?>
')"/></td>
<td><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'subcate','id' => $this->_tpl_vars['item']['id']), $this);?>
">查看子分类</a></td>
<td align="center">
<img src="images/mgr/icon_add.gif" title="增加下级" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toLevel','ic_id' => $this->_tpl_vars['item']['id']), $this);?>
')"/>
</td>
<td>
<img src="images/mgr/icon_edit.gif" title="编辑" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit','id' => $this->_tpl_vars['item']['id']), $this);?>
')"/>
</td>
<td>
<img src="images/mgr/icon_drop.gif" title="删除" onclick="isDelete('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del','id' => $this->_tpl_vars['item']['id']), $this);?>
')"/>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<tr><td style="text-align: center;">暂无相关子分类</td></tr>
<?php endif; ?>
</table>
</div>
<?php endif; ?>