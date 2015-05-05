<?php /* Smarty version 2.6.26, created on 2013-11-12 10:18:08
         compiled from main/common/left.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'main/common/left.html', 13, false),)), $this); ?>
<?php $this->assign('p', $_GET['p']); ?>
<?php $this->assign('type', $_GET['type']); ?>
<?php $this->assign('id', $_GET['id']); ?>
<?php $this->assign('ic_id', $_GET['ic_id']); ?>
<?php $this->assign('fid', $_GET['fid']); ?>
<div id="ziye_left">
<div class="list1">
<div class="list_tit">快速链接</div>
<div class="list1_text">
<ul class="ul2">
<?php $_from = $this->_tpl_vars['kslj1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['item']['id'] != 111): ?>
<li class="ql"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => $this->_tpl_vars['item']['p_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['kslj2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['item']['id'] != 112): ?>
<li class="sl"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'infoX','p' => $this->_tpl_vars['item']['p_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>
<?php if ($this->_tpl_vars['p'] == 2 || $this->_tpl_vars['p'] == 3): ?>
<?php if ($this->_tpl_vars['id'] == 111 || $this->_tpl_vars['id'] == 112): ?>
<div class="list1">
<div class="list_tit"><?php echo $this->_tpl_vars['lcatename']['name']; ?>
经营项目</div>
<div class="list1_text">
<ul class="ul3">
<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'content','p' => $this->_tpl_vars['item']['p_ic_id'],'ic_id' => $this->_tpl_vars['item']['ic_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>
<?php elseif ($this->_tpl_vars['a'] != 'content'): ?>
<div class="list1">
<div class="list_tit"><?php echo $this->_tpl_vars['lcatename']['name']; ?>
公示板</div>
<div class="list4_text" style="line-height:28px;margin:0 0 0 5px;">
<?php echo $this->_tpl_vars['lcatename']['other']; ?>

<span style="display:block; text-align:right"><a style="color:#000" href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'gsb','p' => $this->_tpl_vars['p'],'id' => $this->_tpl_vars['id']), $this);?>
">更多>></a></span>
</div>

</div>
<div class="list1">
<div class="list_tit">多慧推荐</div>
<div class="list1_text">
<ul class="ul3">
<?php $_from = $this->_tpl_vars['lefttj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'content','p' => $this->_tpl_vars['item']['p_ic_id'],'ic_id' => $this->_tpl_vars['item']['ic_id'],'id' => $this->_tpl_vars['item']['id']), $this);?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>
<?php endif; ?>
<?php endif; ?>
<div class="list1">
<div class="list_tit">联系我们</div>
<div class="list3_text">
<div class="list_text4">
咨询热线：<?php echo $this->_tpl_vars['inis']['tel']; ?>
<br />
公司注册咨询:<?php echo $this->_tpl_vars['inis']['zczx']; ?>
<br />
地 址:<?php echo $this->_tpl_vars['inis']['address']; ?>
<br />
传 真:<?php echo $this->_tpl_vars['inis']['fax']; ?>
<br />
Email:<?php echo $this->_tpl_vars['inis']['mail']; ?>

</div>
<div><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_tpl_vars['inis']['qq1']; ?>
&site=qq&menu=yes" target="_blank"><img src="images/qq.jpg" width="74" height="23" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_tpl_vars['inis']['qq2']; ?>
&site=qq&menu=yes" target="_blank"><img src="images/qq.jpg" width="74" height="23" /></a></div>
</div>

</div>
</div>