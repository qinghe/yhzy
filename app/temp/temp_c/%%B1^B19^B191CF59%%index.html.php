<?php /* Smarty version 2.6.26, created on 2015-03-30 15:04:46
         compiled from main/index.html */ ?>
<!doctype html>
<html lang="en"><head>
 <meta charset="utf-8">
 <title><?php if ($this->_tpl_vars['title'] == NULL): ?><?php echo $this->_tpl_vars['inis']['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['title']; ?>
<?php endif; ?></title>
 <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
 
 
 <!-- CSS -->
 <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="css/style.css"> 
 <link rel="stylesheet" href="css/nivo-slider.css"> 
 <link rel="stylesheet" href="css/validation.css">   
 <!-- Jquery magic -->
 <script src="js/jquery-1.6.4.min.js"></script> 
 <script src="js/jquery.easing.1.3.js"></script>
 <script src="js/jquery.nivo.slider.pack.js"></script> 
 <script src="js/jquery.scrollTo-min.js"></script> 
 <script src="js/zoombox.js"></script> 
 <script src='js/main.js'></script>
</head>

<body>

  <!-- Show loading gif image while page loads -->
  <div class="loading"></div>
  
  <!-- Top dark bar -->
  <header id="banner">
   <div class="center-wrap">
    <div id="logo">
     <h1><a href="#"><img src="images/logo.png" alt="Kallan" /></a></h1>
    </div>
  
    <nav id="menu"><ul>
     <li class="current"><a href="#">首 页</a></li>
     <li><a href="#about">我 们</a></li>
     <li><a href="#portfolio">案 例</a></li>
     <li><a href="#features">动 态</a></li> 
     <li><a href="#join">加 入</a></li>  
     <li><a href="#contact">联 系</a></li>          
    </ul></nav>
   </div>	
  </header>
  
  <!-- Home section -->
  <section id="home">
   <!-- Change slider images here -->
   <div id="slider" class="nivoSlider">
   <?php $_from = $this->_tpl_vars['hdp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<img src="app/upload/photo/<?php echo $this->_tpl_vars['item']['photo']; ?>
" alt="sliderImg1" title="<p><?php echo $this->_tpl_vars['item']['name']; ?>
</p> <span><?php echo $this->_tpl_vars['item']['from']; ?>
</span>" />
   <?php endforeach; endif; unset($_from); ?>
   </div>
   <div id="shadow"></div>
	  
   <div class="padding">

	<?php $_from = $this->_tpl_vars['dt1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<div class="one-third">
		 <a href="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" class="zoombox">
		  <img src="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" alt="Showcase like never before" style="width:279px;height:126px;" />
		  <div class="zoomHome">
		   <img src="images/zoomHome.png" alt="zoom icon" />
		  </div> 
		 </a>
		 <a href="portfolio/p3.html" class="zoomboxP"> <h2><?php echo $this->_tpl_vars['item']['name']; ?>
</h2> </a>
		 <p>
			<?php echo $this->_tpl_vars['item']['other']; ?>

		 </p>
		</div>
	<?php endforeach; endif; unset($_from); ?>

   </div> 

  
   
   <div class="next-section margin"><a href="#about" class="scrollTo">
    <img src="images/down.png" title="Scroll to next section" alt="scroll" />
   </a></div>	  
  </section>
 
  <!-- About Section -->
  <section id="about">
   <div class="intro-section">
    <div class="padding">
	 <div class="one-third1 sep half-tiny-margin">
	  <h2><span>我 们</span></h2>
	 </div>
	 <div class="two-third">
	  <p><?php echo $this->_tpl_vars['wmtitle']['other']; ?>
</p>
	 </div>
	</div>   
   </div>
   
   <div class="half-margin padding">
    <div class="two-third">
     <img class="left" src="app/upload/info/<?php echo $this->_tpl_vars['wm']['photo']; ?>
" alt="about" />
     <h2><span><?php echo $this->_tpl_vars['wm']['name']; ?>
</span></h2>
     <?php echo $this->_tpl_vars['wm']['other']; ?>

    </div>
    <div class="one-third">
		 <h2><?php echo $this->_tpl_vars['us']['name']; ?>
</h2><br/>
		 <?php echo $this->_tpl_vars['us']['other']; ?>

    </div>
   </div>	
   
   <div class="next-section margin"><a href="#portfolio" class="scrollTo">
    <img src="images/down.png" title="Scroll to next section" alt="scroll" />
   </a></div>
  </section>
  
  <!-- Portfolio Section -->
  <section id="portfolio">
   <div class="intro-section">
    <div class="padding">
	 <div class="one-third1 sep half-tiny-margin">
	  <h2><span>案 例</span></h2>
	 </div>
	 <div class="two-third">
	  <p><?php echo $this->_tpl_vars['altitle']['other']; ?>
</p>
	 </div>
	</div>   
   </div>
   <div class="tiny-margin padding">  
	<?php $this->assign('page_url', 'index.php?'); ?>
	<?php $_from = $_GET; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
	<?php if ($this->_tpl_vars['key'] != 'page'): ?>
	<?php $this->assign('page_url', ($this->_tpl_vars['page_url']).($this->_tpl_vars['key'])."=".($this->_tpl_vars['item'])."&"); ?>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<li style="float:left;width:5%;padding-top:180px;list-style-type:none">
		<div style="float:left;width:5%;"><?php if (( $this->_tpl_vars['pager']['currentPageNumber'] != 1 )): ?>
		<a href="<?php echo $this->_tpl_vars['page_url']; ?>
page=<?php echo $this->_tpl_vars['pager']['prevPage']; ?>
#portfolio" style="color:#000"><img src="images/arrow-left.png"></a><?php else: ?><img src="images/arrow-left.png"><?php endif; ?></div></li>
	<li style="float:left;width:88%;list-style-type:none"><div class="full-width">
		 <ul class="portHolder">
			<?php $_from = $this->_tpl_vars['obs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			  <li class="port">
			   <a href="index.php?c=default&a=content&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="zoomboxP">
				<img src="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" alt="item3" style="width:185px;height:126px;" />
				<div class="zoomHomeP">
				 <img src="images/121.png" alt="zoom icon" />
				</div>
			   </a>
			  </li> 
			 <?php endforeach; endif; unset($_from); ?>
		 </ul>
		</div>
   </li>
   <li  style="float:left;width:5%;padding-top:180px;list-style-type:none"><div style="float:right;width:5%;">
   <?php if ($this->_tpl_vars['pager']['currentPageNumber'] != $this->_tpl_vars['pager']['pageCount']): ?><a href="<?php echo $this->_tpl_vars['page_url']; ?>
page=<?php echo $this->_tpl_vars['pager']['nextPage']; ?>
#portfolio"  style="color:#000"><img src="images/arrow-right.png"></a><?php else: ?><img src="images/arrow-right.png"><?php endif; ?></div></li>
   </div>	
   <div class="next-section"><a href="#features" class="scrollTo">
    <img src="images/down.png" title="Scroll to next section" alt="scroll" />
   </a></div>
  </section>
  
  <!-- Features Section -->
  <section id="features">
   <div class="intro-section">
    <div class="padding">
	 <div class="one-third1 sep half-tiny-margin">
	  <h2><span>动 态</span></h2>
	 </div>
	 <div class="two-third">
	  <p><?php echo $this->_tpl_vars['dttitle']['other']; ?>
</p>
	 </div>
	</div>   
   </div>
  <div id="top"></div>
  <div class="padding">
	<?php $_from = $this->_tpl_vars['dt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<div class="one-third">
			 <a href="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" class="zoombox">
			  <img src="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" alt="Showcase like never before" style="width:279px;height:126px;" />
			  <div class="zoomHome">
			   <img src="images/zoomHome.png" alt="zoom icon" />
			  </div> 
			 </a>
			 <a href="portfolio/p3.html" class="zoomboxP"> <h2><?php echo $this->_tpl_vars['item']['name']; ?>
</h2> </a>
			 <p>
				<?php echo $this->_tpl_vars['item']['other']; ?>

			 </p>
			</div>

	<?php endforeach; endif; unset($_from); ?>
   </div> 
   <div class="next-section"><a href="#join" class="scrollTo">
    <img src="images/down.png" title="Scroll to next section" alt="scroll" />
   </a></div>
  </section>
  
  
    <!-- Contact Section -->
  <section id="join">
   <div class="intro-section">
    <div class="padding">
	 <div class="one-third1 sep half-tiny-margin">
	  <h2><span>加 入</span></h2>
	 </div>
	 <div class="two-third">
	  
      <p><?php echo $this->_tpl_vars['jrtitle']['other']; ?>
</p>
	 </div>
	</div>   
   </div>
   <div class="margin padding">
    <div class="two-third">
     <div id="contact-form" class="clearfix">
     <h2>填写下面的联系表与我们取得联系！</h2>
	  <p id="success">Thanks for your message! We will get back to you ASAP!</p>
      <form action="index.php?c=default&a=MessageAdd" class="half-tiny-margin" method="post" name="form" >
       <label for="name">姓名: </label>
       <input type="text" id="name" name="name" value="" placeholder="艺海朝阳设计" class="required" />

       <label for="mail">邮箱: </label>
       <input type="text" id="mail" name="mail" value="" placeholder="yhzy@example.com" class="isemail" />

		<label for="phone">电话: </label>
       <input type="text" id="phone" name="phone" value="" placeholder="13998660771" class="required" />
       <label for="other">简介: </label>
       <textarea id="other" name="other" placeholder="Your message" class="required"></textarea>

       <span id="loading"></span>
	    <br />
      <input class="button-red submit" type="submit" value="确定!" />
      </form>
     </div>
    </div>
    
   </div>


   <div class="next-section"><a href="#contact" class="scrollTo">
    <img src="images/down.png" title="Scroll to next section" alt="scroll" />
   </a></div> 
  </section>
  
  
  <!-- Contact Section -->
  <section id="contact">
   <div class="intro-section">
    <div class="padding">
	 <div class="one-third1 sep half-tiny-margin">
	  <h2><span>联 系</span></h2>
	 </div>
	 <div class="two-third">
	  
      <p><?php echo $this->_tpl_vars['lxtitle']['other']; ?>
</p>
	 </div>
	</div>   
   </div>
   <div class="margin padding">
    <div class="two-third">
     <div id="contact-form" class="clearfix">
     <h2>填写下面的联系表与我们取得联系！</h2>
	  <p id="success">Thanks for your message! We will get back to you ASAP!</p>
      <form class="half-tiny-margin" method="post" name="form1" action="index.php?c=default&a=MessageAdd1">
       <label for="name">姓名: </label>
       <input type="text" id="name" name="name" value="" placeholder="艺海朝阳设计" class="required" />

       <label for="email">邮箱: </label>
       <input type="text" id="email" name="email" value="" placeholder="yhzy@example.com" class="isemail" />

       <label for="message">信息: </label>
       <textarea id="message" name="message" placeholder="Your message" class="required"></textarea>

       <span id="loading"></span>
	    <br />
       <input class="button-red submit" type="submit" value="确定!" />
      </form>
     </div>
    </div>
    <div class="one-third">
	<!-- Edit these lines to your info -->
     <h3>更多信息</h3>
     <ul class="contact-info">
	  <li class="address"><?php echo $this->_tpl_vars['inis']['address']; ?>
</li>
      <li class="tel"><?php echo $this->_tpl_vars['inis']['tel']; ?>
</li>
      <li class="print"><?php echo $this->_tpl_vars['inis']['fax']; ?>
</li>
	  <li class="email"><?php echo $this->_tpl_vars['inis']['mail']; ?>
</li>
	 </ul>
	 <h3>友情连接</h3>
	 <ul class="social">
	  <!-- Replace the "http://www.facebook.com/" with your own social network links -->
	  <?php $_from = $this->_tpl_vars['lj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<li><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" target="_balnk"  target="_blank" ><img src="app/upload/info/<?php echo $this->_tpl_vars['item']['photo']; ?>
" alt="<?php echo $this->_tpl_vars['item']['name']; ?>
" style="width:24px;height:24px;"/></a></li>
	  <?php endforeach; endif; unset($_from); ?>
    
     </ul>
    <!-- End Edit -->	 
    </div>
   </div> 
  </section>
  
  

  
  <!-- Footer -->
  <footer>
   <div class="center-wrap">
    <p class="left"><?php echo $this->_tpl_vars['inis']['down']; ?>
</p>
    <a class="right" href="#"><img src="images/pointer.png" alt="top" /></a>
   </div>
  </footer>
  
</body>
</html>