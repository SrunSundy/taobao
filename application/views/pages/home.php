<!DOCTYPE html>
<html lang="en">
	<head>

		<title><?php echo $this->lang->line('menu_home'); ?> | taobao outlet</title>
        <?php include 'include/imstyle.php'?>
        
       	<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/home.css" />
       	
  <link href="<?php echo base_url();?>assets/plugin/magnific-popup/magnific-popup.css" rel="stylesheet">
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"/> -->	
	</head>


	<body>
		<?php include 'include/loader.php' ?>
		<input type="hidden" value="<?php echo base_url();  ?>" id="base_url" />
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
		</header> <!-- end header -->
	
		<div class="homepage-slider slider-bg1" style='background: url("<?php echo base_url();?>assets/img/slider-bg/4.jpg") no-repeat ; max-height: 720px;background-size:cover '>
			<div class="display-table">
				
				<div class="display-table-cell" style="height: 100%;">
					<div style="height:65%;"></div>
					<div style="height:35%;" >
    					<div class="container">
    						<div class="row">
    							<div class="col-sm-2"></div>
    							<div class="col-sm-8">
    								<div class="slider-content">
    									
    										
    										<p class="favorite-font-amaranth" style="margin-bottom: 15px; "   ><?php echo $this->lang->line('home_intro'); ?></p>
    										<form style="display: hidden" action="scrape" method="GET" id="scrape_url">
                                                <div class="input-group">
                                                 
                                                      <input type="text" name="input_url" id="input_url" class="form-control" placeholder="https://item.taobao.com/item.htm?id=541239586337" style="border-radius: 0; border-top: 3px solid #c23000;border-left: 3px solid #c23000;border-bottom: 3px solid #c23000;">
                                                      <span class="input-group-btn" style="z-index:10">
                                                        <button id="scrape_data" data-has_sess="<?php if(isset($this->session->userdata['user_sess'])){ echo "1"; }else{ echo "";} ?>" class="btn btn-secondary favorite-font" style="color: #212121;background: #ffffff; border: 3px solid #c23000; max-height: 50px;    letter-spacing: 0;" type="button"><?php echo $this->lang->line('home_search'); ?></button>
                                                      </span>
                                                
                                                </div>
                                            </form>
                                       
    								</div>
    							</div>
    							<div class="col-sm-2"></div>
    						</div>
    					</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<!-- <section class="slider-area">
		
			
			<div class="homepage-slider slider-bg1">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1>Prepare for the future with our advisors</h1>
										<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
										<a href="#">Meet Experts <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="homepage-slider slider-bg3">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1>Prepare for the future with our advisors</h1>
										<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
										<a href="#">Meet Experts <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			 -->
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg" style="padding-top: 70px;background: #ffffff;" >
			<div class="container" ">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2  class="favorite-font how-to-order" style="font-size: 50px;font-weight:bold;color:#313131;<?php if($this->session->userdata('site_lang') == 'english') echo 'margin-bottom:10px'; else echo 'margin-bottom:35px;';?>"><?php echo $this->lang->line('home_howtoorder'); ?></h2>
							
							<p class="favorite-font how-to-order-detail" style="font-size:22px;color:#7F7F7F;line-height: 30px;"><?php echo $this->lang->line('home_howtoorder_desc'); ?></p>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="box-wrapper">
							<div class="box-image">
								<img src="<?php echo base_url();?>assets/img/icon/url.png" style="width:110px"/>
							</div>
							<p class="favorite-font  how-to-order-detail">1.Submit Order & Deposit</p>
						</div>
					</div>
					
					<div class="col-md-3 col-xs-6">
						<div class="box-wrapper">
							<div class="box-image">
								<img src="<?php echo base_url();?>assets/img/icon/purchase.png" style="width:110px"/>
							</div>
							<p class="favorite-font  how-to-order-detail">2.Taobao Outlet Purchasing</p>
						</div>
					</div>
					
					<div class="col-md-3 col-xs-6">
						<div class="box-wrapper">
							<div class="box-image">
								<img src="<?php echo base_url();?>assets/img/icon/delivery.png" style="width:110px"/>
							</div>
							<p class="favorite-font  how-to-order-detail">3.Taobao Outlet Delivery</p>
						</div>
					</div>
					
					<div class="col-md-3 col-xs-6">
						<div class="box-wrapper">
							<div class="box-image">
								<img src="<?php echo base_url();?>assets/img/icon/payment.png" style="width:110px"/>
							</div>
							<p class="favorite-font  how-to-order-detail">4. Received Your Order and Payment</p>
						</div>
					</div>
					<!-- single intro -->
					<!--<div class="col-md-4">
						<div class="single-intro">
							<div class="intro-img intro-bg1"></div>
							<div class="intro-details text-center">
								<h3>About Business</h3>
								<p>Seamlessly envisioneer extensive interfaces and back wardcompatible applications. Proactively promote timely best.</p>
							</div>
						</div>
					</div>-->
					
				</div>
				
				<div class="row">
					<div class="col-md-12" style="margin-top:30px;padding-left: 20px;padding-right: 20px;">
						<div style="width: 100%;text-align:center;height: 50px;border: 1px solid #E5E5E5;">
							<p class="favorite-font" style="line-height: 50px;font-size: 24px;color: #333;">Service Fee</p>
						</div>
						<div class="box-body table-responsive no-padding" style="">
                          	<table class="table table-hover">
        	                  <thead>
        	                    <tr class="service-fee">
        	                      <th class="favorite-font cls-tbl">Membership Level</th>
        	                      <th class="favorite-font cls-tbl" >Member</th>
        	                      <th class="favorite-font cls-tbl">VIP</th>
        	                      <th class="favorite-font cls-tbl" >SVIP</th>                                       
        	                      <th class="favorite-font cls-tbl" style="color: #f60">Merchant</th>
        	                    
        	                    </tr>
                           	   </thead>
                           	   <tbody >
                           	   	 <tr class="service-fee">
        	                      <td class="favorite-font cls-tbl-detail">Service Fee</td>
        	                      <td class="favorite-font cls-tbl-detail" >10%</td>
        	                      <td class="favorite-font cls-tbl-detail">10%</td>
        	                      <td class="favorite-font cls-tbl-detail" >8%</td>                                       
        	                      <td class="favorite-font cls-tbl-detail" style="color: #f60">coming soon</td>
        	                    
        	                     </tr>
                           	   </tbody>
                              </table>
                         </div>
					</div>
				</div>
				
				<div class="row" style="margin-top: 30px;">
					<div class="button-wrapper" style="text-align:center;">
						<button class="btn" onclick="location.href='how_to_order'" ><p class="favorite-font how-it-work" style="    margin-bottom: 0;"><?php echo $this->lang->line('home_howitwork'); ?></p></button>
					</div>
					
				</div>
			</div>
		</section><!-- intro area end -->
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding"  style="padding-top: 0px;padding-bottom: 60px;">
			<div class="container">
				<div class="row">
					<div class="my-box-header">
						<div class="text-header-wrapper">
							<p class="favorite-font"  style="font-size: 18px;"  ><?php echo $this->lang->line('home_latestnews'); ?></p>
							<a href="<?php echo base_url(); ?>list_news" class="see-more favorite-font" ><?php echo $this->lang->line('home_seemore'); ?></a>
						</div>
						
						<div class="liner"></div>
					</div>
					
					<div class="news-wrapper" style="margin-top: 35px;">
						
						<div id="news_display">
						
							<div class="col-md-3 col-sm-6 col-xs-12  news-box"  >
								<div class="row">
									<div class="gap-divider">
										<div class="">
											<img src="<?php echo base_url();?>assets/img/load_stuck_1.png" />
	        							</div>
	        							
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12  news-box"  >
								<div class="row">
									<div class="gap-divider">
										<div class="">
											<img src="<?php echo base_url();?>assets/img/load_stuck_1.png" />
	        							</div>
	        							
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12  news-box"  >
								<div class="row">
									<div class="gap-divider">
										<div class="">
											<img src="<?php echo base_url();?>assets/img/load_stuck_1.png" />
	        							</div>
	        							
									</div>								
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12  news-box"  >
								<div class="row">
									<div class="gap-divider">
										<div class="">
											<img src="<?php echo base_url();?>assets/img/load_stuck_1.png" />
	        							</div>
	        							
									</div>								
								</div>
							</div>
						
						</div>
						
						
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		
		<section class="section-padding"  style="padding-top: 0px;padding-bottom: 60px;">
			<div class="container">
				<div class="row">
					<div class="my-box-header">
						<div class="text-header-wrapper">
							<p class="favorite-font" style="font-size: 18px;"><?php echo $this->lang->line('home_ourportfolio'); ?></p>
							<a href="<?php echo base_url(); ?>list_portfolio" class="see-more favorite-font" ><?php echo $this->lang->line('home_seemore'); ?></a>
						</div>
						
						<div class="liner"></div>
					</div>
					
					<div class="portfolio-wrapper" style="margin-top: 35px;">
						 
						<div id="portfolio_display">
						
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
							 
							 
						</div>
						
					</div>
					
					
				</div>
			</div>
		</section><!-- block area end -->
		
		<section class="section-padding"  style="padding-top: 0px;padding-bottom: 60px;">
			<div class="container">
				<div class="row">
					<div class="icon-wrapper" style="text-align:center;">
						<a><i class="fa fa-instagram"></i></a>
						<a><i class="fa fa-facebook"></i></a>
						<a><i class="fa fa-twitter"></i></a>
						<a><i class="fa fa-youtube"></i></a>
						<a><i class="fa fa-whatsapp"></i></a>
						<a><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		
		<section class="section-padding"  style="padding-top: 0px;background:#7f7f7f;min-height: 450px;display:none;" >
			<div class="container">
				<div class="row">
					<div class="header-text">
						<p class="favorite-font team-member"><?php echo $this->lang->line('home_teammember'); ?></p>
					</div>
					
					<div class="member-wrapper" style="margin-top: 55px;">
						
						
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/CHHoun.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Mr. Chhoun</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Bobo.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Mr. Bobo</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Eim.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Ms. Eim</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Chanra.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Ms. Chanra</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Mary.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Ms. Mary</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Smey.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Mr. Smey</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Sopheamen.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Mr. men</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Mengky.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Mr. Mengky</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6">
							<div class="box-wrapper-member">
								<div class="box-member">
									<img src="assets/img/team/Sundy.jpg" class="img-circle" />
								</div>
								<p class="favorite-font member-name">Mr. Sundy</p>
								<!-- <p class="favorite-font member-des">Founder of The Fashion</p> -->
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</section><!-- block area end -->
	
	
	

	
		<footer>
			<?php include 'include/footer.php' ?>
		</footer>
		
		<!-- Modal -->
		<button type="button" class="btn btn-primary" style="display:none" id="callModalAlert" data-toggle="modal" data-target="#exampleModal">
		  Launch demo modal
		</button>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		
		  <script src="<?php echo base_url();?>assets/js-view/home.js"></script>
          <script src="<?php echo base_url();?>assets/plugin/superfish/superfish.min.js"></script>
          <script src="<?php echo base_url();?>assets/plugin/magnific-popup/magnific-popup.min.js"></script>
          <script src="<?php echo base_url();?>assets/plugin/sticky/sticky.js"></script>
		  <script src="<?php echo base_url();?>assets/plugin/blazy/blazy.min.js"></script>
		
		<script>
		
		/*$(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });*/
		</script>
		<script id="portfolio_result" type="text/x-jQuery-tmpl">
			<div class="col-md-3 col-sm-6 col-xs-12 box-item">
				<div class="row">
					<div class="gap-divider">
						<div class="image-thumbnail" >
							<a href="<?php echo FILE_PATH; ?>taobao/portfolio/big/{{= potf_img_name }}" class="portfolio-popup" data-toggle="lightbox" data-gallery="example-gallery">
								<img  
									 src="<?php echo FILE_PATH; ?>taobao/portfolio/big/{{= potf_img_name }}"/>
							</a>
										
        				</div>
					</div>								
				</div>
			</div>      	
   		</script>	
   		
   		<script id="news_result" type="text/x-jQuery-tmpl">
			<div class="col-md-3 col-sm-6 col-xs-12  news-box"  >
				<div class="row">
					<div class="gap-divider">
						<div class="image-thumbnail" onclick="location.href='news_detail?news_id={{= news_id}}'" style="position:relative;cursor:pointer;">
							<img 
									 src="<?php echo base_url();?>assets/img/load_stuck.png" />
							
							{{if news_format == "1"}}
							<div class="news-format" style="position:absolute;top:0;left:0;width:100%;height: 100%;background:black;opacity:0.1;"></div>
							<div class="news-format" style="position:absolute;top:0;left:0;width:100%;height: 100%;text-align:center;">
								<img src="<?php echo base_url();?>assets/img/play.png" style="width: 60px;height:60px;margin-top: 50px;" />
							</div>
        					{{/if}}
						</div>
						<div style="height: 140px;overflow:hidden">
							<p class="news-title favorite-font " style=" word-wrap: break-word;" >{{= title }}</p>
        					<p class="news-des favorite-font" style=" word-wrap: break-word;">{{= subString(content, 100)}}</p>
						</div>
        				
        				<a class="news-read-more favorite-font" href="news_detail?news_id={{= news_id}}">read more...</a>
					</div>								
				</div>
			</div>
   		</script>	
	</body>
</html>