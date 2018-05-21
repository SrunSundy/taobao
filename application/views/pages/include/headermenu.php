<style>

</style>
<!-- start top bar -->

<!-- Start Navigation -->
<div class="header-top-fake">
	<div class="header-top-area" style="position:fixed; width: 100%;z-index:101;">
	<div class="container">
		<div class="row">
			<div class="col-sm-0 hidden-xs">
				<!-- <div class="contact">
					<p>
						<i class="fa fa-phone"></i> <a style="margin-right: 8px;color:#3f4b5a" href="tel:010 666 520">010 666 520</a> | <a style="margin-left: 8px;color:#3f4b5a" href="tel:070 2013 85">070 201 385</a>
					</p> 
					<p>
						<i class="fa fa-envelope"></i> <a href="#">24hrsuport@domain.com</a>
					</p> 
				</div>-->
				
			</div>
			<!-- /.col-sm-8 -->

			<div class="col-sm-12">
				<!-- <div class="social-icon">
					<ul>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						
					</ul>
				</div> -->
				<div class="social-icon">
					<div class="row">
    					<ul>
    					    <li style="margin-right: 15px;display:none; " class="small-phone" >
    							<a class="" href="tel:010 666 520"  style="background:#790000; border: 0;border-radius: 5px;height: auto; width: auto;line-height: 18px;padding: 2px 6px;color:white;margin-left:0;margin-top: 3px;
    font-size: 11px;">
    								<i class="fa fa-phone"></i>
    							</a>
    						</li>
    						<li class="header-font padded" style="border-right: 1px solid #d8d8d8;">
    							<span class="hover favorite-font" style=""><?php echo $this->lang->line('home_signin'); ?> </span>
    						</li>
    						<li  class="header-font padded" style="border-right: 1px solid #d8d8d8;">
    							<span class="hover favorite-font" ><?php echo $this->lang->line('home_register'); ?></span>
    						
    						</li>
    					
    						<li class=" header-font padded" id="goto_cart">
    							<span class="hover favorite-font" style="text-transform: uppercase"> <?php echo $this->lang->line('home_cart'); ?><span style="font-weight:bold;">(<span id="my_cart_num" ><?php if(isset($this->session->userdata['my_cart']))echo count($this->session->userdata['my_cart']); else echo "0";?></span>)</span></span>
    						</li>
    						
    						<li class="header-font" style="text-align: center;   ">
    							
    							<select  id="pickLanguage" class="pick-language favorite-font" style="width:100px;background:transparent;" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;" >
    								<option class="favorite-font"  value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>><?php echo $this->lang->line('home_lan_en'); ?></option>
    								<option class="favorite-font" value="khmer" <?php if($this->session->userdata('site_lang') == 'khmer') echo 'selected="selected"'; ?>><?php echo $this->lang->line('home_lan_kh'); ?></option>
    							</select>
    						</li>
    						<li class="big-phone">
    							 <p style="float:left" class="favorite-font"><?php echo $this->lang->line('home_call_us'); ?> :</p>
    							 <a class="favorite-font" style="margin:0; padding: 0 10px 0 10px;color:#3f4b5a; width: auto;float:left;line-height:24px;border-right: 1px solid #d8d8d8;" href="tel:010 666 520">010 666 520</a> 
    							 <a class="favorite-font" style="margin:0;padding: 0 10px 0 10px;color:#3f4b5a; width: auto;float:left;line-height: 24px;" href="tel:070 201 385">070 201 385</a> 
    							<div style="clear:both;"></div>
    						</li>
    						
    						
    						
    					</ul>
					</div>
				</div>
				<!-- /.social-icon -->
			</div>
			<!-- /.col-sm-4 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
<!-- end top bar -->
</div>


<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-sticky bootsnav this-fix" style="position:absolute;width:100%">
	<!-- Start Top Search -->
	<div class="top-search">
		<div class="container">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-search"></i></span>
				<input type="text" class="form-control" placeholder="Search"> <span
					class="input-group-addon close-search"><i class="fa fa-times"></i></span>
			</div>
		</div>
	</div>
	<!-- End Top Search -->

	<div class="container myheader" style="padding-top: 30px;padding-bottom: 30px;">
		<!-- Start Atribute Navigation -->
		<div class="attr-nav">
			<ul>
				<!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
				
				
			</ul>
		</div>
		<!-- End Atribute Navigation -->

		<!-- Start Header Navigation -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#navbar-menu">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand display-logo" href="home"
				style="margin-top: 0 !important; width: 150px"><img
				src="<?php echo base_url();?>assets/img/logo/logo.png" class="logo logo-scrolled"
				style="margin-top: -10px;" alt=""></a>
		</div>
		<!-- End Header Navigation -->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-menu">
			<ul class="nav navbar-nav navbar-right" data-in="" data-out="">
				<li class="active header-menu my-menu"><a href="home" class="favorite-font"><?php echo $this->lang->line('menu_home'); ?></a></li>
				<li class="header-menu my-menu" ><a href="about_us" class="favorite-font"><?php echo $this->lang->line('menu_aboutus'); ?></a></li>
				<li class="header-menu my-menu"><a href="how_to_order" class="favorite-font"><?php echo $this->lang->line('menu_howtoorder'); ?></a></li>
				<li class="header-menu my-menu"><a href="cost_calculator" class="favorite-font"><?php echo $this->lang->line('menu_costcalculator'); ?></a></li>
				<li class="header-menu my-menu"><a href="my_order" class="favorite-font"><?php echo $this->lang->line('menu_myorder'); ?></a></li>
				<!-- <li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown">Works</a>
					<ul class="dropdown-menu">
						<li><a href="portfolio.html">Work Showcase</a></li>
						<li><a href="portfolio-details.html">Work Details</a></li>
					</ul></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown">Press &amp; News</a>
					<ul class="dropdown-menu">
						<li><a href="blog.html">News Standard</a></li>
						<li><a href="blog-details.html">News Details</a></li>
						<li><a href="typography.html">Typography</a></li>
					</ul></li> -->
				<li class="header-menu my-menu"><a href="help" class="favorite-font"><?php echo $this->lang->line('menu_help'); ?></a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
</nav>
<!-- End Navigation -->
<div class="clearfix"></div>