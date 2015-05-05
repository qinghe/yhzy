<?php /* Smarty version 2.6.26, created on 2015-03-30 15:09:08
         compiled from mgr/static/welcome.html */ ?>
<div class="t"><span>网站管理中心</span></div>

<div class="l">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" align="left" style="padding-left: 12px;">系统信息</th>
  </tr>
  <tr>
    <td>开发团队:</td>
    <td><a href="http://www.dlhot.com" target="_blank">大连新生代技术团队</a></td>
    <td>技术负责人:</td>
    <td></td>
  </tr>
  <tr>
    <td>当前用户IP:</td>
    <td><?php echo $this->_tpl_vars['info']['rip']; ?>
</td>
    <td>服务器IP:</td>
    <td><?php echo $this->_tpl_vars['info']['sip']; ?>
</td>
  </tr>
    
  <tr>
    <td width="20%">服务器操作系统:</td>
    <td width="30%"><?php echo $this->_tpl_vars['info']['os']; ?>
</td>
    <td width="20%">Web 服务器:</td>
    <td width="30%"><?php echo $this->_tpl_vars['info']['service']; ?>
</td>
  </tr>
  <tr>
    <td>PHP 版本:</td>
    <td><?php echo $this->_tpl_vars['info']['php']; ?>
</td>
    <td>MySQL 版本:</td>
    <td><?php echo $this->_tpl_vars['info']['mysql']; ?>
</td>
  </tr>
  <tr>
    <td>文件上传的最大大小:</td>
    <td><?php echo $this->_tpl_vars['info']['upload']; ?>
</td>
    <td>编码:</td>
    <td>UTF-8</td>
  </tr>
</table>
</div>