<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Success | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/aboutus.css" /> -->
	</head>


	<body>
		<?php include 'include/loader.php' ?>
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
		</header> <!-- end header -->

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<div class="ruler-style">
		</div>
	
	
	
		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding" style="padding-top: 90px;">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3">
					
					</div>
					<div class="col-md-6">
						<div class="row">
							<p class="favorite-font" style="font-size:40px;color:black;font-weight:600;"><?php echo $this->lang->line('order_success_title'); ?></p>
							
							<p class="favorite-font" style="margin-top: 30px;font-size: 16px;">
								<img src="<?php echo base_url()?>assets/img/tick.png" style="    width: 35px;margin-right: 15px;"/><?php echo $this->lang->line('order_success_msg'); ?>
							</p>
							<div style="text-align:center;margin-top:30px;" >
								<button onclick="location.href='/'" style="letter-spacing: 0; text-transform:none;background: #D72320; height: 40px; padding: 0 25px;" class="btn  favorite-font " ><?php echo $this->lang->line('order_more'); ?></button>
								<button onclick="location.href='my_order'" style="letter-spacing: 0; text-transform:none; height: 40px; padding: 0 25px; color:black;" class="btn  favorite-font " ><?php echo $this->lang->line('goto_myorder'); ?></button>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
					
					</div>
					<div style="clear:both;"></div>
					
					
					
					
					
				</div>
			</div>
		</section><!-- end accordian section -->
	
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>
		
		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
	</body>
</html>