<?php /* Smarty version 2.6.26, created on 2013-11-12 10:35:55
         compiled from util/pager.html */ ?>
<?php $this->assign('page_url', 'index.php?'); ?>
<?php $_from = $_GET; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['key'] != 'page'): ?>
<?php $this->assign('page_url', ($this->_tpl_vars['page_url']).($this->_tpl_vars['key'])."=".($this->_tpl_vars['item'])."&"); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if (( $this->_tpl_vars['pager']['currentPageNumber'] != 1 )): ?><a href="<?php echo $this->_tpl_vars['page_url']; ?>
page=<?php echo $this->_tpl_vars['pager']['firstPage']; ?>
">首页</a>&nbsp;<a href="<?php echo $this->_tpl_vars['page_url']; ?>
page=<?php echo $this->_tpl_vars['pager']['prevPage']; ?>
">上一页</a><?php else: ?><a>首页</a>&nbsp;<a>上一页</a><?php endif; ?>&nbsp;<?php if ($this->_tpl_vars['pager']['currentPageNumber'] != $this->_tpl_vars['pager']['pageCount']): ?><a href="<?php echo $this->_tpl_vars['page_url']; ?>
page=<?php echo $this->_tpl_vars['pager']['nextPage']; ?>
">下一页</a>&nbsp;<a href="<?php echo $this->_tpl_vars['page_url']; ?>
page=<?php echo $this->_tpl_vars['pager']['lastPage']; ?>
">尾页</a><?php else: ?><a>下一页</a>&nbsp;<a>尾页</a><?php endif; ?>&nbsp;<a>页数<?php echo $this->_tpl_vars['pager']['currentPageNumber']; ?>
/<?php echo $this->_tpl_vars['pager']['pageCount']; ?>
</a>


<div>
<script type="text/javascript">
function cpage(p){
	location.href='<?php echo $this->_tpl_vars['page_url']; ?>
page='+p;
}
</script>
<!--<select id="page" name="page" onchange="cpage(this.value)">
<?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['pager']['pageCount']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
<option value="<?php echo $this->_sections['loop']['index']; ?>
"><?php echo $this->_sections['loop']['index']+1; ?>
</option>
<?php endfor; endif; ?> 
</select>

<script type="text/javascript">
$("#page option[value='<?php echo $_GET['page']; ?>
']").attr("selected", true);
</script>
-->

</div>