<?php /* Smarty version 2.6.26, created on 2013-06-19 06:16:13
         compiled from main/common/top1.html */ ?>
<?php $this->assign('p', $_GET['p']); ?>
<div class="js">
      <div id="index-splash-block" class="index-splash-block">
        <div id="feature-slide-block" class="feature-slide-block">
        <?php $_from = $this->_tpl_vars['hdp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['item']):
?>
          <div class="feature-slide-preview" style="display: none; "> <a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="screenshot"><img src="app/upload/photo/<?php echo $this->_tpl_vars['item']['photo']; ?>
" alt="" width="980" height="300" border="0" /></a> </div>
          <?php endforeach; endif; unset($_from); ?>
          
          <div id="feature-slide-list" class="feature-slide-list"> <a href="#" id="feature-slide-list-previous" class="feature-slide-list-previous"></a>
            <div id="feature-slide-list-items" class="feature-slide-list-items"></div>
            <a href="#" id="feature-slide-list-next" class="feature-slide-list-next"></a> </div>
        </div>
        <script type="text/javascript">
                initFeatureSlide();
            </script>
      </div>
    </div>