<?php /* Smarty version 2.6.26, created on 2015-03-30 15:09:08
         compiled from mgr/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/index.html', 8, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>网站后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<frameset rows="60,*" cols="*" frameborder="no" border="0">
  <frame src="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admIndex','a' => 'top'), $this);?>
" name="top-frame" scrolling="no" noresize="noresize" id="top-frame" title="top-frame" />
  <frameset cols="180,*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admIndex','a' => 'left'), $this);?>
" scrolling="yes" name="left-frame" id="left-frame" title="left-frame"/>
    <frame src="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admIndex'), $this);?>
" name="main-frame" scrolling="auto" id="main-frame" title="main-frame" />
  </frameset>
</frameset><noframes></noframes>
</html>