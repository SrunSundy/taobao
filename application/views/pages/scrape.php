<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Scrape | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/scrape.css"  />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/input-spinner.css"  />
		
	</head>


	<body>
		<input type="hidden" value="<?php echo $url; ?>"  id="scrape_url" />
		<input type="hidden" value="<?php echo base_url();  ?>" id="base_url" />
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
		</header> <!-- end header -->

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<!-- <section class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="page-breadcrumbd">
							
						</div>
					</div>
				</div>
			</div>
		</section> --><!-- end breadcrumb -->
		<div class="ruler-style">
		</div>
	
	
		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding" style="padding-top: 55px;">
			<div class="container">
					
				
					<div class="col-md-5">
						<div id="for-small-title" style="padding-bottom: 30px;display:none;">
							<div class="box-title div-main">
    							<p class="favorite-font product-title" ></p>
    							
    						</div>
    						<div class="price-wrapper div-main" style="">
    							<p class="product-price favorite-font"><span class="price_currency">CN Â¥ </span><span class="price_amount">0</span></p>
    						</div>
						</div>
						<div class="box-image-display">
							<div class="box-big-image">
								<img class="big-image" id="big_image"  
									src="<?php echo base_url();?>assets/img/default.jpg" />
							</div>
							
							<div class="box-small-image">
								<div class="small-image-wrapper" id="small_image_wrapper">
									<div class="box-small active-box-small">
										<div class="small-image-thumbnail">
											<img class="small-image" src="<?php echo base_url();?>assets/img/default.jpg" />	
										</div>
																			
									</div>
									
									<div class="box-small ">
										<div class="small-image-thumbnail">
											<img class="small-image" src="<?php echo base_url();?>assets/img/default.jpg" />	
										</div>
																			
									</div>
									
									<div class="box-small ">
										<div class="small-image-thumbnail">
											<img class="small-image" src="<?php echo base_url();?>assets/img/default.jpg" />	
										</div>
																			
									</div>
									<div class="box-small ">
										<div class="small-image-thumbnail">
											<img class="small-image" src="<?php echo base_url();?>assets/img/default.jpg" />	
										</div>
																			
									</div>
									<div class="box-small ">
										<div class="small-image-thumbnail">
											<img class="small-image" src="<?php echo base_url();?>assets/img/default.jpg" />	
										</div>
																			
									</div>
									
									
									
									
								</div>
								<div style="clear:both;"></div>
							</div>
						</div>
					</div>
					<div class="col-md-7 scrape-info" >
						<div id="for-big-title">
							<div class="box-title div-main">
    							<p class="favorite-font product-title"></p>
    						</div>
    						<div class="price-wrapper div-main" style="">
    							<p class="product-price favorite-font"><span class="price_currency">CN ¥ </span><span class="price_amount">0</span></p>
    						</div>
						</div>
					
						
						<div class="delivery-fee div-main">
							<p class="favorite-font fee-title" style="color:#b5b5b5">Chinese Domestic Delivery Fee </p>
							<input type="text"  value="CN Â¥ 0" />
							<div class="text-info">
								<p class="exclude favorite-font">Exclude International Delivery</p>
								<p class="estimation favorite-font">Delivery Estimation</p>
								
							</div>
							<div style="clear:both;"></div>
						</div>
						
						<div class="box-size div-main">
							<div style="display:table;float:left">
								<p class="favorite-font  text-title"><?php echo $this->lang->line('scrape_size'); ?></p>
								<p class="favorite-font text-slider">:</p>
								<div style="clear:both;"></div>
							</div>
						
							<div style="display:table" class="size-wrapper" id="size_wrapper">
								
							</div>
							<div style="clear:both;"></div>
						</div>
						
						<div class="box-color div-main">
							
							
							<div style="display:table;float:left">
								<p class="favorite-font text-title"><?php echo $this->lang->line('scrape_color'); ?></p>
								<p class="favorite-font text-slider">:</p>
								<div style="clear:both;"></div>
							</div>
							
							<div class="color-wrapper" style="display:table;" id="color_wrapper">
								
							</div>
							<div style="clear:both;"></div>
						</div>
						
						<div  class="div-main">
							<p class="favorite-font text-title" style="line-height: 35px"><?php echo $this->lang->line('scrape_message'); ?></p>
							<p class="favorite-font text-slider" style="margin-left: 10px;line-height: 35px">:</p>
							<input type="text" class="customer-message"/>
							
							<div style="clear:both;"></div>
							
						</div>
						
						<div  class="div-main">
							<p class="favorite-font text-title" style="line-height: 35px"><?php echo $this->lang->line('scrape_quantity'); ?></p>
							<p class="favorite-font text-slider" style="margin-left: 10px;line-height: 35px">:</p>
							
							<div class="input-group spinner">
                                <input type="text" class="item-quantity favorite-font spinner-input" value="1">
                                <div class="input-group-btn-vertical">
                                  <button class="btn btn-default" type="button" style="box-shadow:none;"><i class="fa fa-caret-up" style="color:black;"></i></button>
                                  <button class="btn btn-default" type="button" style="box-shadow:none;"><i class="fa fa-caret-down" style="color:black;"></i></button>
                                </div>
                              </div>
							<div style="clear:both;"></div>
						</div>
						
						
						<div  class="button-action div-main" style="text-align: center">
							
							<button class="btn event-btn" type="button" style="letter-spacing: 0;">
								<img src="<?php echo base_url();?>assets/img/icon/cart-1.png" style="width: 25px;height:25px;float:left;margin-right: 7px;" /> 
								<p class="favorite-font" style="float:left"><?php echo $this->lang->line('scrape_cart_btn'); ?></p>
							</button>
							<button class="btn event-btn " type="button" style="letter-spacing: 0;">
								<img src="<?php echo base_url();?>assets/img/icon/buy-now.png" style="width: 40px;height:40px;margin-top: -10px;float:left;margin-right: 7px;" />
								<p class="favorite-font"  style="float:left"><?php echo $this->lang->line('scrape_buy_btn'); ?></p>
							</button>
						</div>
						
					</div>
					
					
				
			</div>
		</section><!-- end accordian section -->
	
	
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>

		<?php include 'include/loader.php' ?>

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		
		<script src="<?php echo base_url();?>assets/js/input-spinner.js"></script>
		<script src="<?php echo base_url();?>assets/js-view/scrape.js"></script>
	</body>
</html>