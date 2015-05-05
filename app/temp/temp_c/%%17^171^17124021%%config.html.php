<?php /* Smarty version 2.6.26, created on 2015-03-30 15:15:31
         compiled from mgr/config.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/config.html', 6, false),array('function', 'editor', 'mgr/config.html', 17, false),array('function', 'submit', 'mgr/config.html', 19, false),array('function', 'reset', 'mgr/config.html', 19, false),)), $this); ?>
<div class="t"><span>管理中心  - 网站参数修改</span></div>
<style>table input{width: 500px;}</style>
<script type="text/javascript" charset="utf-8" src="lib/kindeditor/kindeditor.js"></script>

<div class="e">
<form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => $this->_tpl_vars['con'],'a' => 'edit'), $this);?>
" method="post">
<table> 
<tr><th>网站名称：</th><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['inis']['name']; ?>
"/></td></tr>
<tr><th>网址：</th><td><input type="text" name="web" value="<?php echo $this->_tpl_vars['inis']['web']; ?>
"/></td></tr>
<tr><th>网站标题：</th><td><input type="text" name="title" value="<?php echo $this->_tpl_vars['inis']['title']; ?>
"/></td></tr>
<tr><th>站点默认关键字：</th><td><input type="text" name="keywords" value="<?php echo $this->_tpl_vars['inis']['keywords']; ?>
"/></td></tr>
<tr><th>站点描述：</th><td><input type="text" name="description" value="<?php echo $this->_tpl_vars['inis']['description']; ?>
"/></td></tr>
<tr><th>地址：</th><td><input type="text" name="address" value="<?php echo $this->_tpl_vars['inis']['address']; ?>
"/></td></tr>
<tr><th>电话：</th><td><input type="text" name="tel" value="<?php echo $this->_tpl_vars['inis']['tel']; ?>
"/></td></tr>
<tr><th>传真：</th><td><input type="text" name="fax" value="<?php echo $this->_tpl_vars['inis']['fax']; ?>
"/></td></tr>
<tr><th>E-mail：</th><td><input type="text" name="mail" value="<?php echo $this->_tpl_vars['inis']['mail']; ?>
"/></td></tr>
<tr><th>网站底部内容：</th><td><?php echo $this->_plugins['function']['editor'][0][0]->_wangshizhe_kindeditor(array('name' => 'down','value' => $this->_tpl_vars['inis']['down']), $this);?>
</td></tr>
</table>
<div class="but"><?php echo $this->_plugins['function']['submit'][0][0]->_wangshizhe_submit(array(), $this);?>
 <?php echo $this->_plugins['function']['reset'][0][0]->_wangshizhe_reset(array(), $this);?>
</div>
</form>
</div>