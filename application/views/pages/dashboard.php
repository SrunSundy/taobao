<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>My Cart | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/dashboard.css" />
		
		<style>
		 #myNav li:not([disabled]){
            cursor:pointer;
        }
		</style>
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
		<section class="accordian-section section-padding" style="padding-top: 30px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="title-path" style="margin-bottom: 25px;">
							<p style="color: #464646;font-weight:bold;" class="favorite-font"><span class="path-1"><?php echo $this->lang->line('menu_home'); ?></span>
							   <span class="path-split" style="margin: 0 10px 0 10px;font-size: 21px;">></span>
							   <span class="path-2" style="color:#D72320">Dashboard</span>
							</p>
						</div>
						
						
						<div class="col-md-12">
							<div class="row">
							
								<!-- menu -->
								<div class="col-md-3 " >
									<div class="row">
    									<div class="col-md-12 " >
    										<div class="row" style="padding-right: 20px;">
        										<div class="menu-title" style="background: #E4282C;height:50px;border-radius:5px 5px 0 0;text-align:center;color: white;">
        											<p class="favorite-font">My Taobao Outlets</p>
        										</div>
        										
        										<div class="menu-item">
        											
        											<div class="item-title">
        												<a class="item-title-text favorite-font"><strong>My Orders</strong> </a>	
  													</div>
  													
  													<div class="item-title">
        												<a class="item-title-text favorite-font"><strong> Shipping Service</strong></a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> My Forwarding Parcels</a>	
  													</div>
  													
  													<div class="item-title">
        												<a class="item-title-text favorite-font"><strong>My Account</strong> </a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> Add Money</a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> Withdraw Money</a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> My Coupons</a>	
  													</div>
  													
  													
  													<div class="item-title">
        												<a class="item-title-text favorite-font"><strong>Member Settings</strong> </a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> Address Records</a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> Personal Profile</a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> Recommend To Friends</a>	
  													</div>
  													
  													<div class="item-title">
        												<a class="item-title-text favorite-font"><strong> Customer Service</strong></a>	
  													</div>
  													<div class="item-title-child">
        												<a class="item-title-child-text favorite-font"> Report US</a>	
  													</div>
  												
  													
  													
  													
        										</div>
        										
    										</div>
    										
    									</div>
									</div>								
								</div><!-- menu -->
								
								<!-- user content -->
								<div class="col-md-9  " >
									<div class="row">
										<div class="col-md-12 ">
											<div class="row">
    											
    											<div class="left-wrapper col-md-6">
    												<div class="row">
    													
    												</div>
    											</div>
    											
    											<div class="right-wrapper col-md-6">
    												<div class="row">
    												
    												</div>
    											</div>
    											
    											
											</div>
    										
    									</div>
									</div>
    									
								</div>
								<!-- user content -->
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