<style>

</style>
<!-- start top bar -->
<div class="header-top-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 hidden-xs">
				<div class="contact">
					<p>
						<i class="fa fa-phone"></i> <a style="margin-right: 8px" href="tel:010 666 520">010 666 520</a> | <a style="margin-left: 8px" href="tel:070 2013 85">070 201 385</a>
					</p>
					<p>
						<i class="fa fa-envelope"></i> <a href="#">24hrsuport@domain.com</a>
					</p>
				</div>
				<!-- /.contact -->
			</div>
			<!-- /.col-sm-8 -->

			<div class="col-sm-6">
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
					<ul>
					    <li style="margin-right: 25px;display:none;" class="small-phone" >
							<a class="" href="tel:010 666 520"  style="background:#790000; border: 0;border-radius: 5px;height: 29px; width: 29px;color:white;">
								<i class="fa fa-phone"></i>
							</a>
						</li>
						<li style="margin-top: 2px">
							<span class="hover favorite-font" ><?php echo $this->lang->line('home_register'); ?></span><span style="margin: 0 10px 0 10px">|</span><span class="hover favorite-font" style=""><?php echo $this->lang->line('home_signin'); ?> </span>
						
						</li>
						
						<li style="text-align: center;    margin-top: 2px;">
							
							<select id="pickLanguage" class="pick-language" style="width:100px;background:transparent;" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;" >
								<option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>ENG</option>
								<option value="khmer" <?php if($this->session->userdata('site_lang') == 'khmer') echo 'selected="selected"'; ?>>KHM</option>
							</select>
						</li>
						
						
						
					</ul>
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

<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-sticky bootsnav">
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

	<div class="container">
		<!-- Start Atribute Navigation -->
		<div class="attr-nav">
			<ul>
				<!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
				
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> <i class="fa fa-shopping-bag"></i> <span
						class="badge">2</span>
				</a>
					<!-- <ul class="dropdown-menu cart-list ">
						<li><a href="#" class="photo"><img src="assets/img/cart-1.jpg"
								class="cart-thumb" alt="" /></a>
							<h2>
								<a href="#">Denim SlimFit Shirt </a>
							</h2>
							<p>
								2x - <span class="price">$19.99</span>
							</p></li>
						<li><a href="#" class="photo"><img src="assets/img/cart-3.jpg"
								class="cart-thumb" alt="" /></a>
							<h2>
								<a href="#">Denim Polo Shirt</a>
							</h2>
							<p>
								2x - <span class="price">$12.99</span>
							</p></li>
						<li class="total"><span class="pull-right"><strong>Total</strong>:
								$320.00</span> <a href="#"
							class="btn btn-primary btn-sm btn-cart">Cart</a></li>
					</ul> --></li>
					
					<li class=""><a class="profile-photo" href="#" style="padding: 23px 15px;"><img src="https://yt3.ggpht.com/-2xcCX3vpr7s/AAAAAAAAAAI/AAAAAAAAAAA/BkZog3sJFEY/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" style="width:35px;height:35px;border-radius:100%;" /></a></li>
					
			</ul>
		</div>
		<!-- End Atribute Navigation -->

		<!-- Start Header Navigation -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#navbar-menu">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand display-logo" href="index.html"
				style="margin-top: 0 !important; width: 150px"><img
				src="assets/img/logo/logo.png" class="logo logo-scrolled"
				style="margin-top: -10px;" alt=""></a>
		</div>
		<!-- End Header Navigation -->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-menu">
			<ul class="nav navbar-nav navbar-right" data-in="" data-out="">
				<li class="active header-menu"><a href="home" class="favorite-font"><?php echo $this->lang->line('menu_home'); ?></a></li>
				<li class="header-menu" ><a href="aboutus" class="favorite-font"><?php echo $this->lang->line('menu_aboutus'); ?></a></li>
				<li class="header-menu"><a href="services.html" class="favorite-font"><?php echo $this->lang->line('menu_howtoorder'); ?></a></li>
				<li class="header-menu"><a href="services.html" class="favorite-font"><?php echo $this->lang->line('menu_costcalculator'); ?></a></li>
				<li class="header-menu"><a href="services.html" class="favorite-font"><?php echo $this->lang->line('menu_myorder'); ?></a></li>
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
				<li class="header-menu"><a href="contact.html" class="favorite-font"><?php echo $this->lang->line('menu_help'); ?></a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
</nav>
<!-- End Navigation -->
<div class="clearfix"></div>