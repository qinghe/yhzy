<?php /* Smarty version 2.6.26, created on 2015-03-30 15:08:59
         compiled from mgr/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'mgr/login.html', 29, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DLHOT</title>
<!--<link rel="stylesheet" type="text/css"  href="images/ht/style.css" media="all" />-->

<link rel="stylesheet" type="text/css" href="images1/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="images1/ext-all.css" media="all" />
</head>

<body>



<DIV id=top>
<TABLE height=98 cellSpacing=0 cellPadding=0 width=1000 border=0>
  <TBODY>
  <TR>
    <TD>&nbsp;</TD></TR></TBODY></TABLE></DIV><!--top end--><!--main start-->
<DIV id=main>
<TABLE height=279 cellSpacing=0 cellPadding=0 width=1000 border=0>
  <TBODY>
  <TR>
    <TD width=283>
      <DIV id=main_left></DIV></TD>
    <TD width=438>
      <DIV id=main_con>
       <form action="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'admin','a' => 'login'), $this);?>
" method="post">
      <TABLE cellSpacing=0 cellPadding=0 width=200 border=0>
        <TBODY>
        <TR>
          <TD width=50 height=21>用户名：</TD>
          <TD align=left width=139 height=21><LABEL><INPUT class=yo 
            id=name maxLength=18 name=name> </LABEL></TD></TR>
        <TR>
          <TD width=50 height=21>密&nbsp;&nbsp;&nbsp;&nbsp;码：</TD>
          <TD align=left width=139 height=21><LABEL><INPUT class=yo 
            id=pass type=password maxLength=18 name=pass> </LABEL></TD></TR>
        <TR>
          <TD width=50 height=21>验证码：</TD>
          <TD align=left width=139 height=21>
          <div style="float:left"><INPUT class=ya   id=imgcode maxLength=4 name=imgcode>  </div>
          <div style="float:right; position:relative"><img src="<?php echo $this->_plugins['function']['url'][0][0]->_pi_func_url(array('c' => 'common','a' => 'imgcode'), $this);?>
"/></div></TD></TR>
        <TR>
          <TD colSpan=2 height=30><input class="login_box_rig_an" type="submit" name="Submit" value="登录" />&nbsp;&nbsp;&nbsp;&nbsp;
            <!--  <input name="rememberme" class="login_box_rememberme"   type="checkbox" id="rememberme" value="1" />
记住我-->
<input type="hidden" name="act" value="do_login" /></TD></TR>
<tr>
<td colSpan=2 style="text-align:right; height:25px; line-height:25px;">当前版本：1.0</td>
</tr>
</TBODY></TABLE></DIV></TD>
              </form>
    <TD width=283>
    
      <DIV id=main_right></DIV></TD></TR></TBODY></TABLE></DIV><!--main end--><!--main2 start-->
<DIV id=main2>
<TABLE height=57 cellSpacing=0 cellPadding=0 width=1000 border=0>
  <TBODY>
  <TR>
    <TD width=284>
      <DIV id=main2_left></DIV></TD>
    <TD width=438>
      <DIV id=main2_con>
      <DIV id=main2c_left></DIV>
      <DIV id=main2c_con></DIV></DIV></TD>
    <TD width=282>
      <DIV id=main2_right></DIV></TD></TR></TBODY></TABLE></DIV><!--main2 end--><!--bottom start-->
<DIV id=bottom>
<P>本系统建议使用或IE7以上版本浏览计算机屏幕分辩使用1024*768或以上<BR></P></DIV><!--bottom end-->
<div class="login_top"></div>
 

</body>
</html>