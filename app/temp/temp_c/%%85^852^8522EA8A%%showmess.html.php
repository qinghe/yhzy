<?php /* Smarty version 2.6.26, created on 2015-03-30 15:42:09
         compiled from mgr/showmess.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/showmess.html', 6, false),array('function', 'editor', 'mgr/showmess.html', 63, false),array('function', 'submit', 'mgr/showmess.html', 72, false),array('function', 'reset', 'mgr/showmess.html', 72, false),)), $this); ?>
<?php $this->assign('title', $_GET['ic_name']); ?>
<?php $this->assign('ic_id', $_GET['ic_id']); ?>
<?php $this->assign('p_ic_id', $_GET['p_ic_id']); ?>
<?php if ($this->_tpl_vars['act'] == '' || $this->_tpl_vars['act'] == 'index'): ?>

<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit','ic_id' => $this->_tpl_vars['ic_id'],'p_ic_id' => $this->_tpl_vars['p_ic_id'],'ic_name' => $this->_tpl_vars['title']), $this);?>
 ">录入新<?php echo $this->_tpl_vars['title']; ?>
</a><span>管理中心  - <?php echo $this->_tpl_vars['title']; ?>
列表</span></div>
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del','ic_id' => $this->_tpl_vars['ic_id']), $this);?>
" method="post" name="delForm">
<div class="l">
<table cellspacing="1" cellpadding="3">
<tr>
<th width="20px"><img src="images/mgr/icon_drop.gif" onclick="return delSub()"/></th>
<th width="40px">排序</th>
<th><?php echo $this->_tpl_vars['title']; ?>
名称</th>
<!--<th width="40px">推荐</th>-->
<th width="40px">热门</th>
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
<td align="center"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
<!--<td align="center"><img id="up_<?php echo $this->_tpl_vars['item']['id']; ?>
" src="images/mgr/<?php if ($this->_tpl_vars['item']['up'] == 0): ?>no<?php else: ?>yes<?php endif; ?>.gif" onclick="cLogin('<?php echo $this->_tpl_vars['item']['id']; ?>
', '<?php echo $this->_tpl_vars['con']; ?>
', 'up')"/></td>-->
<td align="center"><img id="hot_<?php echo $this->_tpl_vars['item']['id']; ?>
" src="images/mgr/<?php if ($this->_tpl_vars['item']['hot'] == 0): ?>no<?php else: ?>yes<?php endif; ?>.gif" onclick="cLogin('<?php echo $this->_tpl_vars['item']['id']; ?>
', '<?php echo $this->_tpl_vars['con']; ?>
', 'hot')"/></td>
<td align="center"><img src="images/mgr/icon_edit.gif" title="编辑" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit','id' => $this->_tpl_vars['item']['id'],'ic_id' => $this->_tpl_vars['item']['ic_id'],'p_ic_id' => $this->_tpl_vars['p_ic_id'],'ic_name' => $this->_tpl_vars['title']), $this);?>
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
<?php if ($this->_tpl_vars['act'] == 'toEdit'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'ic_id' => $this->_tpl_vars['ic_id'],'p_ic_id' => $this->_tpl_vars['p_ic_id'],'ic_name' => $this->_tpl_vars['title']), $this);?>
"><?php echo $this->_tpl_vars['title']; ?>
列表</a><span>管理中心  - 编辑<?php echo $this->_tpl_vars['ob']['name']; ?>
</span></div>
<script type="text/javascript" charset="utf-8" src="lib/kindeditor/kindeditor.js"></script>

<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'edit','id' => $this->_tpl_vars['ob']['id'],'ic_id' => $this->_tpl_vars['ic_id'],'p_ic_id' => $this->_tpl_vars['p_ic_id'],'ic_name' => $this->_tpl_vars['title']), $this);?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['ob']['id']; ?>
"/>
<input type="hidden" name="ic_id" value="<?php echo $this->_tpl_vars['ic_id']; ?>
"/>
<input type="hidden" name="p_ic_id" value="<?php echo $this->_tpl_vars['p_ic_id']; ?>
"/>
<table>
<tr><th>标题：</th><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['ob']['name']; ?>
"/></td></tr>


<tr><th>图片：</th><td><input type="file" name="photo" value="<?php echo $this->_tpl_vars['ob']['photo']; ?>
"/></td></tr>
<?php if ($this->_tpl_vars['ob']['photo'] != 'default.jpg' && $this->_tpl_vars['ob']['photo'] != NULL): ?><tr style="width: 50px; height: 50px;">
<th>图片略缩图：</th><td><img src="app/upload/info/<?php echo $this->_tpl_vars['ob']['photo']; ?>
" width="50" height="50" /></td></tr>
<?php endif; ?>

</td></tr>

<!--tr><th>选择分类：</th><td>

<select name="f_id">
	<?php $_from = $this->_tpl_vars['cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['name']['iteration']++;
?>
		<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
" <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['ob']['f_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
</select>

</td></tr-->

<tr><th>说明：</th><td colspan="2"><?php echo $this->_plugins['function']['editor'][0][0]->_wangshizhe_kindeditor(array('value' => $this->_tpl_vars['ob']['other']), $this);?>
</td></tr>

<!--tr><th>相册：</th><td colspan="2">
<script type='text/javascript'>
    	KE.show({id : 'other1',cssPath : './css/default.css',allowFileManager : true});</script>
		<textarea id='other1' name='other1' style='width:560px;height:400px;visibility:hidden;'><?php echo $this->_tpl_vars['ob']['other1']; ?>
</textarea>
</table>
</td></tr-->
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array(), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>
<?php endif; ?>