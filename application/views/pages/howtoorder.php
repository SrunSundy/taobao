<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>How to Order | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/howtoorder.css" />
	</head>


	<body>
		<?php include 'include/loader.php' ?>
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
		<section class="accordian-section section-padding" style="padding-top: 50px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="margin-bottom: 20px;">						
						<p class="favorite-font-amaranth" style="font-size: 32px;  font-weight: 400;color:#333; text-align:center;">How to Order</p>								
					</div>
					
					<div class="col-md-12">
						
						<ul class="order-menu-bar">
							<li class="to-next active"><a class="favorite-font">Copy URL</a></li>
							<li class="to-next"><a class="favorite-font">Paste URL</a></li>
							<li><a class="favorite-font">Purchasing</a></li>
							<!-- <li class="to-next"><a class="favorite-font">Distribution</a></li>
							<li ><a class="favorite-font">Parcel Confirmation</a></li>	 -->					
						</ul>
						
					</div>
					
					<div class="col-md-12" >
						<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                          <!-- Indicators -->
                          <ol class="carousel-indicators" id="slide_num_wrapper">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            
                          </ol>
                        
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" id="all-img-wrapper">
                            <div class="item active img-slide-wrapper">
                              <img src="assets/img/slide/slide_1.jpg" alt="Los Angeles">
                            </div>
                        
                            <div class="item img-slide-wrapper">
                              <img src="assets/img/slide/slide_2.jpg" alt="Chicago">
                            </div>
                        
                            <div class="item img-slide-wrapper">
                              <img src="assets/img/slide/slide_3.jpg" alt="New York">
                            </div>
                            
                           
                            
                          </div>
                        
                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev" id="prev_slide">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next" id="next_slide">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
					</div>
					
					
				</div>
			</div>
		</section><!-- end accordian section -->
	
	
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>

		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		<script src="<?php echo base_url();?>assets/js-view/howtoorder.js"></script>
	</body>
</html>