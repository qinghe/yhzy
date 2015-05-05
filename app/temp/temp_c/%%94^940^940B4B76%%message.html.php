<?php /* Smarty version 2.6.26, created on 2015-03-30 15:16:36
         compiled from mgr/message.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/message.html', 6, false),array('function', 'submit', 'mgr/message.html', 45, false),)), $this); ?>
<?php $this->assign('title', '留言板'); ?>
<?php $this->assign('ic_id', $_GET['ic_id']); ?>
<?php if ($this->_tpl_vars['act'] == '' || $this->_tpl_vars['act'] == 'index' || $this->_tpl_vars['act'] == 'lianxi'): ?>
<div class="t"><span>管理中心  - <?php echo $this->_tpl_vars['title']; ?>
列表</span></div>

<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del'), $this);?>
" method="post" name="delForm">
<div class="l">
<table cellspacing="1" cellpadding="3">
<tr>
<th width="20px"><img src="images/mgr/icon_drop.gif" onclick="return delSub()"/></th>
<th width="50px;" align="center">编号</th>
<th>留言姓名</th>
<th>您的邮箱</th>
<th width="60px">详细</th>
<!-- <th width="50px">回复</th> -->
</tr>
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr>
<td align="center"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"/></td>
<td align="center"><?php echo $this->_tpl_vars['key']+1; ?>
</td>
<td><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
<td><?php echo $this->_tpl_vars['item']['mail']; ?>
</td>
<td align="center"><img src="images/mgr/icon_view.gif" title="详细" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'x','ic_id' => $this->_tpl_vars['ic_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
')"/></td>
<!-- <td align="center"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toRe','id' => $this->_tpl_vars['item']['id']), $this);?>
">回复</a></td> -->
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

<?php elseif ($this->_tpl_vars['act'] == 'toRe'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'ic_id' => $this->_tpl_vars['ic_id']), $this);?>
"><?php echo $this->_tpl_vars['title']; ?>
列表</a><span>管理中心  - <?php echo $this->_tpl_vars['title']; ?>
回复</span></div>

<div class="main-div">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 're'), $this);?>
" method="post">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['ob']['id']; ?>
"/>
<table width="100%" style="font-size: 12px;">
<tr><td class="label">信息标题:</td><td><?php echo $this->_tpl_vars['ob']['name']; ?>
</td></tr>
<tr><td class="label">信息内容:</td><td><?php echo $this->_tpl_vars['ob']['other']; ?>
</td></tr>
<tr>
<td class="label">回复内容:</td>
<td><textarea cols="60" rows="4" name="recontent"><?php echo $this->_tpl_vars['ob']['recontent']; ?>
</textarea></td>
</tr>
<tr><td colspan="2" align="center"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array('value' => '回复'), $this);?>
</td></tr>
</table>
</form>
</div>

<?php elseif ($this->_tpl_vars['act'] == 'x'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'ic_id' => $this->_tpl_vars['ic_id']), $this);?>
">列表</a><span>管理中心  - <?php echo $this->_tpl_vars['title']; ?>
详细</span></div>

<div class="main-div">

<div>姓名：<?php echo $this->_tpl_vars['ob']['name']; ?>
</div>

<div>联系电话：<?php echo $this->_tpl_vars['ob']['phone']; ?>
</div>
<div>邮箱：<?php echo $this->_tpl_vars['ob']['mail']; ?>
</div>
<div><?php if ($this->_tpl_vars['ob']['status'] == '0'): ?>标题：<?php echo $this->_tpl_vars['ob']['youbian']; ?>
<?php endif; ?></div>
<div><?php if ($this->_tpl_vars['ob']['status'] == '0'): ?>详细内容：<?php echo $this->_tpl_vars['ob']['other']; ?>
<?php endif; ?></div>

</div>

<?php endif; ?>