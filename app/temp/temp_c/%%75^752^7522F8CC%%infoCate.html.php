<?php /* Smarty version 2.6.26, created on 2015-03-30 15:13:48
         compiled from mgr/infoCate.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/infoCate.html', 2, false),array('function', 'editor', 'mgr/infoCate.html', 58, false),array('function', 'submit', 'mgr/infoCate.html', 60, false),array('function', 'reset', 'mgr/infoCate.html', 60, false),array('function', 'calendar', 'mgr/infoCate.html', 120, false),)), $this); ?>
<?php if ($this->_tpl_vars['act'] == '' || $this->_tpl_vars['act'] == 'index'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit'), $this);?>
">录入新分类</a><span>管理中心  - 分类列表</span></div>

<div class="l">
<tr><td colspan="6"></td></tr>
<table cellspacing="1" cellpadding="3">
<tr>
<th width="40px">排序</th>
<th>栏目名称</th>
<th>查看子分类</th>
<th width="60px">增加下级</th>
<th width="60px">是否显示</th>
<th width="30px">修改</th>
<!--<th width="30px">删除</th>-->
</tr>

<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
<td align="center"><?php if ($this->_tpl_vars['item']['hidden'] == '0'): ?><font color="red">是</font><?php else: ?>否<?php endif; ?></td>
<td>
<img src="images/mgr/icon_edit.gif" title="编辑" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toEdit','id' => $this->_tpl_vars['item']['id']), $this);?>
')"/>
</td>
<!--<td>
<img src="images/mgr/icon_drop.gif" title="删除" onclick="isDelete('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del','id' => $this->_tpl_vars['item']['id']), $this);?>
')"/>
</td>-->
</tr>

<?php endforeach; endif; unset($_from); ?>
</table>
</div>

<?php elseif ($this->_tpl_vars['act'] == 'toEdit'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con']), $this);?>
"><?php echo $this->_tpl_vars['title']; ?>
列表</a><span>管理中心  - <?php echo $this->_tpl_vars['title']; ?>
编辑</span></div>
<script type="text/javascript" src="lib/kindeditor/kindeditor.js"></script>
<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'edit','id' => $this->_tpl_vars['ob']['id']), $this);?>
" method="post">
<table>
<tr>
<th>分类名：</th>
<td><input name="name" style="width:300px;" value="<?php echo $this->_tpl_vars['ob']['name']; ?>
"/></td>
</tr>
<tr>
<th>是否显示：</th>
<td>
<select name="hidden">
    <option value="0">是</option>
    <option value="1">否</option>
</select>
</td>
</tr>
<tr><th>说明：</th><td colspan="2"><?php echo $this->_plugins['function']['editor'][0][0]->_wangshizhe_kindeditor(array('value' => $this->_tpl_vars['ob']['other']), $this);?>
</td></tr>
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array(), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>
<?php elseif ($this->_tpl_vars['act'] == 'toLevel' || $this->_tpl_vars['act'] == 'tolevelEdit'): ?>
<div class="t"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'ic_id' => $this->_tpl_vars['ic_id']), $this);?>
"><?php echo $this->_tpl_vars['title']; ?>
列表</a><span>管理中心  - 编辑分类</span></div>
<script type="text/javascript" src="lib/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>


<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'del1','ic_id' => $_GET['id']), $this);?>
" method="post" name="delForm">
<div class="l">

<table cellspacing="1" cellpadding="3">
<tr>
<th width="20px"><img src="images/mgr/icon_drop.gif" onclick="return delSub()"/></th>
<th width="40px">排序</th>
<th>分类名</th>
<th width="60px">增加下级</th>
<th width="40px">编辑</th>

</tr>
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
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
<td align="center">
<img src="images/mgr/icon_add.gif" title="增加下级" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'toLevel','ic_id' => $this->_tpl_vars['item']['id']), $this);?>
')"/>
</td>
<td align="center">
<img src="images/mgr/icon_edit.gif" title="编辑" onclick="url('<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'tolevelEdit','id' => $this->_tpl_vars['item']['id'],'ic_id' => $_GET['ic_id']), $this);?>
')"/></td>

</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "mgr/common/mgr_pager.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->
</div>
</form>

<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'levelAdd'), $this);?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="ids" value="<?php echo $this->_tpl_vars['ob']['id']; ?>
"/>
<input type="hidden" name="ic_id" value="<?php echo $_GET['id']; ?>
"/>
<input type="hidden" name="p_ic_id" value="<?php echo $_GET['ic_id']; ?>
"/>
<table>
<tr>
<th>分类名：</th>
<td><input name="name" type="text" style="width: 400px;" value="<?php echo $this->_tpl_vars['ob']['name']; ?>
"/></td>
</tr>
<tr><th>图片：</th><td><input type="file" name="photo" value="<?php echo $this->_tpl_vars['ob']['photo']; ?>
"/></td></tr>
<tr style="width: 50px; height: 50px;"><th>图片略缩图：</th><td><img src="<?php if ($this->_tpl_vars['ob']['photo'] == 'default.jpg'): ?>images/<?php echo $this->_tpl_vars['ob']['photo']; ?>
<?php else: ?>app/upload/info/<?php echo $this->_tpl_vars['ob']['photo']; ?>
<?php endif; ?>" width="50" height="50" /></td></tr>
<tr><th>信息属性：</th><td>
<select name="sort">
<option value="1" <?php if ($this->_tpl_vars['ob']['sort'] == 1): ?>selected<?php endif; ?>>文章</option>
<option value="2" <?php if ($this->_tpl_vars['ob']['sort'] == 2): ?>selected<?php endif; ?>>图片列表</option>
<option value="3" <?php if ($this->_tpl_vars['ob']['sort'] == 3): ?>selected<?php endif; ?>>文字列表</option>
</select>
</td></tr>
<tr>
<th>发布时间：</th>
<td><?php echo $this->_plugins['function']['calendar'][0][0]->_wangshizhe_calendar(array('name' => 'createtime','value' => $this->_tpl_vars['ob']['createtime']), $this);?>
</td>
</tr>
<tr><td colspan="2"><?php echo $this->_plugins['function']['editor'][0][0]->_wangshizhe_kindeditor(array('value' => $this->_tpl_vars['ob']['other']), $this);?>
</td></tr>
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array(), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>
<?php endif; ?>