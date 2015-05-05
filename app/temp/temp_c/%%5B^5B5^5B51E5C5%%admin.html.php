<?php /* Smarty version 2.6.26, created on 2015-03-30 15:16:55
         compiled from mgr/admin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/admin.html', 3, false),array('function', 'submit', 'mgr/admin.html', 12, false),array('function', 'reset', 'mgr/admin.html', 12, false),)), $this); ?>
<?php if ($this->_tpl_vars['act'] == 'toAdd'): ?>
<!-- 添加管理员 -->
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con']), $this);?>
">管理员列表</a><span>管理中心  - 录入新管理员</span></div>

<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'add'), $this);?>
" method="post">
<table>
<tr><th>登陆名:</th><td><input type="text" name="name" style="width: 150px;"/></td></tr> 
<tr><th>登陆密码:</th><td><input type="password" name="pass" style="width: 150px;"/></td></tr>
<tr><th>确认密码:</th><td><input type="password" name="rePass" style="width: 150px;"/></td></tr>
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array('value' => '添加'), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>

<?php elseif ($this->_tpl_vars['act'] == 'index' || $this->_tpl_vars['act'] == ''): ?>

<!-- 管理员列表 -->
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toAdd'), $this);?>
">录入新管理员</a><span>管理中心  - 管理员列表</span></div>

<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del'), $this);?>
" method="post" name="delForm">
<div class="l"> 
<table cellspacing="1">
<tr>
<th width="20px"><img src="images/mgr/icon_drop.gif" onclick="return delSub()"/></th>
<th>登陆名</th>
<th>上次登陆时间</th>
<th>上次登陆IP</th>
<th>修改密码</th>
</tr>
<?php $_from = $this->_tpl_vars['ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['item']['id'] == $_SESSION['adminSession']['id']): ?>
<?php $this->assign('item', $_SESSION['adminSession']); ?>
<?php endif; ?>
<tr>
<td align="center"><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"/></td>
<td align="center"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['item']['lasttime']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['item']['lastip']; ?>
</td>
<td align="center"><img src="images/mgr/icon_edit.gif" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toUpdatePass','id' => $this->_tpl_vars['item']['id']), $this);?>
')"/></td>
</tr>
<?php endforeach; endif; unset($_from); ?> 
</table> 
</div>
</form>

<?php elseif ($this->_tpl_vars['act'] == 'toUpdatePass'): ?>

<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con']), $this);?>
">管理员列表</a><span>管理中心  - 修改密码</span></div>

<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'updatePass'), $this);?>
" method="post">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['ob']['id']; ?>
"/>
<table>
<tr><th>登陆名:</th><td><input type="text" name="name" style="width: 150px;" value="<?php echo $this->_tpl_vars['ob']['name']; ?>
" readonly="readonly"/></td></tr> 
<tr><th>新密码:</th><td><input type="password" name="pass" style="width: 150px;"/></td></tr>
<tr><th>确认密码:</th><td><input type="password" name="rePass" style="width: 150px;"/></td></tr>
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array('value' => '添加'), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>


<?php endif; ?>