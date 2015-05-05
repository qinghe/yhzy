<?php /* Smarty version 2.6.26, created on 2015-03-30 15:09:08
         compiled from mgr/static/left.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/static/left.html', 19, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="tabbar-div"><p><span id="menu1" class="tab-front" onClick="cmenu('1')">管理</span><span id="menu2" class="tab-back" onClick="cmenu('2')">帮助</span></p></div>

<div id="main-div">
<div id="menu-list">
<ul>
<li class="explode">
网站设置
<ul>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admIndex'), $this);?>
" target="main-frame">系统主页</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admConfig'), $this);?>
" target="main-frame">参数设置</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admPhoto'), $this);?>
" target="main-frame">幻灯片</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMessage'), $this);?>
" target="main-frame">加入</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMessage','a' => 'lianxi'), $this);?>
" target="main-frame">联系</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admUrl'), $this);?>
" target="main-frame">友情链接</a></li>

<!--li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admBaoming'), $this);?>
" target="main-frame">简历</a></li>
<<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admPicture'), $this);?>
" target="main-frame">图片管理器</a></li>>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMessage'), $this);?>
" target="main-frame">留言版</a></li-->
</ul>
</li>
<li class="explode">
网站内容管理
<ul>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admInfoCate'), $this);?>
" target="main-frame">目录</a></li>
<!--li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admInfoCate1'), $this);?>
" target="main-frame">主营产品</a></li-->
<?php $_from = $this->_tpl_vars['cper']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li class="explode">
<?php echo $this->_tpl_vars['item']['name']; ?>

<ul>
<?php $_from = $this->_tpl_vars['cper1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['name1']['iteration']++;
?>
<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['item1']['p_id']): ?>

	<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admshowmess','ic_id' => $this->_tpl_vars['item1']['id'],'p_ic_id' => $this->_tpl_vars['item']['id'],'ic_name' => $this->_tpl_vars['item1']['name']), $this);?>
" target="main-frame"><?php echo $this->_tpl_vars['item1']['name']; ?>
</a></li>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>
</li>
<?php endforeach; endif; unset($_from); ?>


<?php $_from = $this->_tpl_vars['infotitle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li class="explode">
<?php echo $this->_tpl_vars['item']['name']; ?>

<ul>
<?php $_from = $this->_tpl_vars['infoall']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['name1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['name1']['iteration']++;
?>
<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['item1']['p_id']): ?>

	<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admshowmess','ic_id' => $this->_tpl_vars['item1']['id'],'p_ic_id' => $this->_tpl_vars['item']['id'],'ic_name' => $this->_tpl_vars['item1']['name']), $this);?>
" target="main-frame"><?php echo $this->_tpl_vars['item1']['name']; ?>
</a></li>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>
</li>
<?php endforeach; endif; unset($_from); ?>

<!--li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMessage'), $this);?>
" target="main-frame">留言</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admPhoto'), $this);?>
" target="main-frame">幻灯片</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admPhoto1'), $this);?>
" target="main-frame">员工生活幻灯片</a></li-->


<!--<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admInfoC','ic_id' => 5), $this);?>
" target="main-frame">人力资源</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','id' => 101), $this);?>
" target="main-frame">首页集团概况</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admUrl'), $this);?>
" target="main-frame">友情链接</a></li>-->
</ul>
</li>
<!--<li class="explode">
投资者关系
<ul>-->

<!--<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','ic_id' => 2), $this);?>
" target="main-frame">股票报价</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','ic_id' => 3), $this);?>
" target="main-frame">电话会议</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','ic_id' => 4), $this);?>
" target="main-frame">财务报表</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','ic_id' => 5), $this);?>
" target="main-frame">主要财务数据</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','ic_id' => 6), $this);?>
" target="main-frame">美国证监会备案文档</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','ic_id' => 7), $this);?>
" target="main-frame">投资者演示文档</a></li>-->
<!--<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','id' => 8), $this);?>
" target="main-frame">分析师信息</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','id' => 9), $this);?>
" target="main-frame">常见问题</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','id' => 10), $this);?>
" target="main-frame">联系投资者关系部</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','id' => 11), $this);?>
" target="main-frame">职业规范</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admMain','id' => 12), $this);?>
" target="main-frame">风险提示</a></li>-->
<!--</ul>
</li>-->
<!--<li class="explode">
会员专区
<ul>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admUser'), $this);?>
" target="main-frame">会员管理</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admJianbao'), $this);?>
" target="main-frame">项目简报</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admFile'), $this);?>
" target="main-frame">集团内刊</a></li>
</ul>
</li>
--><li class="explode">
管理员管理
<ul>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admAdmin'), $this);?>
" target="main-frame">管理员列表</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admAdmin','a' => 'toAdd'), $this);?>
" target="main-frame">添加管理员</a></li>
</ul>
</li>
</ul>
</div>

<div id="menu-list2" style="display: none;">
<ul>
<li class="explode">
后台使用说明
<ul>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admHelp','a' => 'ward'), $this);?>
" target="main-frame">注意事项</a></li>
</ul>
</li>
<li class="explode">
系统维护
<ul>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admHelp','a' => 'backUpTo'), $this);?>
" target="main-frame">数据库备份</a></li>
<li class="menu-item"><a href="lib/adminer.php" target="main-frame" style="color: red;">数据库管理</a></li>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admHelp','a' => 'upload'), $this);?>
" target="main-frame">清理上传文件</a></li>
</ul>
</li>
<li class="explode">
客户服务
<ul>
<li class="menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admHelp','a' => 'message'), $this);?>
" target="main-frame">意见反馈</a></li>
</ul>
</li>
</ul>
</div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>