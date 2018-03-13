<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>My Cart | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="assets/css-customize/mycart.css" />
	</head>


	<body>
	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
			
		</header> <!-- end header -->

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<div class="ruler-style">
		</div>
	
	
	
		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding" style="padding-top: 55px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-path">
							<p style="color: #464646;font-weight:bold;" class="favorite-font"><span class="path-1"><?php echo $this->lang->line('menu_home'); ?></span>
							   <span class="path-split" style="margin: 0 10px 0 10px;font-size: 21px;">></span>
							   <span class="path-2" style="color:#D72320"><?php echo $this->lang->line('home_cart'); ?></span>
							</p>
						</div>
						<!-- no records in cart -->
						<div class="no-data col-md-12">
							<div class="row">
							
    							<div class="no-data-title ">
    								<p style="color:white;padding: 10px 0 10px 20px;font-weight:bold;" class="favorite-font"><?php echo $this->lang->line('home_cart'); ?></p>
    							</div>
    							<div class="no-data-des col-md-12" style="text-align: center;padding-top: 40px;padding-bottom: 40px;">
    							
    								<div class="col-md-4">
    								
    								</div>
    								<div class="col-md-4" align="center">
    									<div class="row">
        									<a style="background: #e8e8e8;display:inline-block;padding: 15px;border-radius: 100%;margin-right: 10px;">
            									<img src="assets/img/icon/cart-1.png" style="width: 45px;height:45px;" /> 
            								</a>
            								<p style="display:inline-block;" class="favorite-font">
            									Your cart is empty!
            								</p>
            								 
            								<div class="input-group" style="margin-top: 15px;">
                                              <input type="text" class="form-control" placeholder="Please enter product's name" style="height:35px;border-radius: 30px 0 0 30px; border-top: 1px solid #a0a0a0;border-left: 1px solid #a0a0a0;border-bottom: 1px solid #a0a0a0;">
                                              <span class="input-group-btn">
                                                <button id="scrape_data" class="btn btn-secondary favorite-font" style="    height: 35px;
                                                                                                                            padding-left: 14px;
                                                                                                                            padding-top: 7px;
                                                                                                                            width: 50px;
                                                                                                                            border-radius: 0 30px 30px 0;
                                                                                                                            box-shadow: none;
                                                                                                                            color: white;
                                                                                                                            background: #ffffff;
                                                                                                                            border: 1px solid #d72320;
                                                                                                                            max-height: 50px;
                                                                                                                            letter-spacing: 0;
                                                                                                                            background: #d72320;" type="button">
                                                	<i class="fa fa-search" style="font-size: 18px;"></i>
                                                </button>
                                              </span>
                                            </div>
                                            
                                            <button class="btn event-btn" type="button" style="letter-spacing: 0; text-transform: none; background:#d72320;height:40px;margin-top: 15px; ">
                								<span class="favorite-font">Go Home</span>
                							</button>
    									</div>
    									
            							
    								</div>
    								<div class="col-md-4">
    								
    								</div>
    								
    								
    							</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section><!-- end accordian section -->
	
		
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>

		<?php include 'include/loader.php' ?>

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
	</body>
</html>