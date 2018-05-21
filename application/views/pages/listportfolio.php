<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>News | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/listportfolio.css" />
		<link href="<?php echo base_url();?>assets/plugin/magnific-popup/magnific-popup.css" rel="stylesheet">
	</head>


	<body>
		<?php include 'include/loader.php' ?>
		<input type="hidden" value="<?php echo base_url();  ?>" id="base_url" />
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
		</header> <!-- end header -->

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<div class="ruler-style">
		</div>
	
	
	
		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding" style="padding-top: 50px;">
			<div class="container">
				<div class="row">
				
					<div class="my-box-header">
						<div class="text-header-wrapper">
							<p class="favorite-font" ><?php echo $this->lang->line('home_ourportfolio'); ?></p>
						</div>
						
						<div class="liner"></div>
					</div>
					
					<div class="portfolio-wrapper" style="margin-top: 35px;">
						 
						<div class="col-md-12" style="text-align:center;display:none" id="my_loader">
							<p class="favorite-font" style="z-index:10">Please wait. Loading...</p>
							<img src="<?php echo base_url()?>assets/img/loading.gif" style="    margin-top: -25px;" />
						</div>
						
						<div id="portfolio_display">
							
						</div>
						
						<!-- <div id="loading_default">
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 box-item">
								<div class="row">
									<div class="gap-divider">
										<div class="image-thumbnail" >
				        				</div>
									</div>								
								</div>
							</div>
						</div> -->
						
					</div>
					
					<div style="clear:both;"></div>
					<!-- pagination -->
					<div id="pagi-display" class="pagination-display favorite-font" style="padding-left:20px; float:right;padding-right:10px;">	     
			        </div>
					<!-- pagination -->
					
				</div>
			</div>
		</section><!-- end accordian section -->
	
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>

		

		<!-- main jQuery -->
		<script id="portfolio_result" type="text/x-jQuery-tmpl">
			<div class="col-md-3 col-sm-6 col-xs-12 box-item">
				<div class="row">
					<div class="gap-divider">
						<div class="image-thumbnail" >
							<a href="<?php echo FILE_PATH; ?>taobao/portfolio/big/{{= potf_img_name }}" class="portfolio-popup" data-toggle="lightbox" data-gallery="example-gallery">
								<img class="b-lazy"
									 src="<?php echo base_url();?>assets/img/load_stuck.png"
									 data-src="<?php echo FILE_PATH; ?>taobao/portfolio/big/{{= potf_img_name }}" />
							</a>
										
        				</div>
					</div>								
				</div>
			</div>      	
   		</script>		
		
		<?php include 'include/imscript.php' ?>
	    <script src="<?php echo base_url();?>assets/plugin/superfish/superfish.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugin/magnific-popup/magnific-popup.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugin/sticky/sticky.js"></script>
        <script src="<?php echo base_url();?>assets/plugin/blazy/blazy.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js-view/listportfolio.js"></script>
	</body>
</html>