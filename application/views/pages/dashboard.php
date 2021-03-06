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
		<input type="hidden" value="<?php echo base_url();  ?>" id="base_url" />
		
		<?php include 'include/loader.php' ?>
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
					
					<div class="col-md-12" style="text-align:center;display:none" id="my_loader">
						<p class="favorite-font" style="z-index:10">Please wait. Loading...</p>
						<img src="<?php echo base_url()?>assets/img/loading.gif" style="    margin-top: -25px;" />
					</div>
					
					<div class="col-md-12 " id="display_content" style="display:none;">
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
    									<?php include "include/dashboardmenu.php"?>
									</div>								
								</div><!-- menu -->
								
								<!-- user content -->
								<div class="col-md-9  " >
									<div class="row">
										<div class="col-md-12 my-content-wrapper">
											<div class="row">
												<!-- first row -->
												<div class="col-md-12">
													<div class="row">
														
														<div class="left-wrapper col-md-6">
															<div class="row">
																<div class="col-md-12 profile-wrapper">
		    														<div class="row" style="margin-top: 13px;
																						    padding-left: 13px;
																						    padding-right: 15px;
																						    padding-bottom: 15px;border-right: 1px solid #e1e1e1;">
		    																															
		    															<img class="item-photo profile-photo" src="https://graph.facebook.com/<?php echo $this->session->userdata['user_sess']["user_id"]; ?>/picture?width=100&height=100" />															
		    															
		    															
		    															<div class="profile-info">
		    																<p class="favorite-font user-name"><strong>Hi, <?php echo $this->session->userdata['user_sess']["user_name"]; ?></strong></p>
		    																<div class="vip-div">
		    																
		    																	<p class="favorite-font " style="font-size: 12px;color: #333;float:left;margin-right:10px;"><strong>VIP</strong></p>
		    																	
		    																	<div style="float: left; width: 130px;margin-right:8px;padding-top:7px;">
		    																		<div class="progress" style="height: 9px;background: #e1e1e1" >
																					  <div class="progress-bar" role="progressbar" aria-valuenow="70"
																					  aria-valuemin="0" aria-valuemax="100" style="width:70%">
																					    <span class="sr-only">70% Complete</span>
																					  </div>
																					</div>
		    																	</div>
		    																	<p  style="float:left;font-size: 12px;color:#bdbdbd" class="favorite-font">0/3000</p>
																				
																				<div style="clear:both;"></div>
																				
		    																</div>
		    																
		    																<div style="float:left;margin-right: 20px;">
			    																<p class="favorite-font profile-desc" > My Balance: <span id="my_balance_amount">0 </span><span> USD</span></p>
			    																<p class="favorite-font profile-desc" > My Points: <span>0 </span><span> USD</span></p>
			    																<p class="favorite-font profile-desc" > My Privilleges: <span>0 </span><span> USD</span></p>
		    																</div>
		    																<div style="float:left">
		    																	<p class="favorite-font profile-desc" > Awaiting Payment: <span id="awaiting_payment_amount">0 </span><span> USD</span></p>
		    																	<p class="favorite-font awaiting-amount" ><span id="total_amount" >0</span>  USD</p>
		    																</div>
		    																<div style="clear:both;"></div>
		    															</div>
		    															<div style="clear:both;"></div>
		    														</div>
		    														
		    													</div>
															</div>
														</div>
														
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-12 news-wrapper">
		    														<div class="row" style="    margin: 13px -15px 10px -15px;padding: 0 8px 0px 15px;">
			    														<p class="favorite-font section-title"><strong>News</strong></p>
				    													<div class="news-list" id="news_display">
				    														
				    														
				    													</div>
		    														</div>
		    													</div>
															</div>
														</div>
														
													</div>
												</div>
												<!-- end first row -->
												
												<!-- second row -->
												<div class="col-md-12">
													<div class="row">
														
														<div class="left-wrapper col-md-6">
															<div class="row">
																<div class="col-md-12 ">
		    														<div class="row">
		    															<div class="section-title-wrapper">
		    																<p class="favorite-font section-title" ><strong>My Orders</strong></p>   																
		    															</div>
		    															
		    															<div class="order-info">
		    																	
		    																<ul class="list-order-menu">
		    																	<li>
		    																		<a class="favorite-font my_order_active" id="my_order_cnt" data-cnt="0" >My Orders</a>
		    																	</li>
		    																	<li>
		    																		<a class="favorite-font" id="awaiting_delivery_cnt" data-cnt="0">Awaiting Delivery</a>
		    																	</li>
		    																	<li>
		    																		<a class="favorite-font" id="out_stock_cnt" data-cnt="0">Out Stock</a>
		    																	</li>
		    																	<li>
		    																		<a class="favorite-font" id="delivered_cnt" data-cnt="0">Delivered</a>
		    																	</li>
		    																</ul>
		    																
		    																<div id="my-order-count" class="my-order-count favorite-font">0</div>
		    																<div id="my-order-count-loading" class="my-order-count favorite-font" style="display:none;padding:0">
		    																	<img src="<?php echo base_url()?>assets/img/loading.gif" style="width: 40px;" />
		    																</div>
		    																	
		    															</div>
		    														</div>
		    													</div>
															</div>
														</div>
														
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-12 ">
		    														<div class="row">
		    															<div class="section-title-wrapper">
		    																<p class="favorite-font section-title" ><strong>Shipping Service</strong></p>
		    															</div>
		    															
		    															<div class="shipping-service-info col-md-12">
		    																<div class="row">
			    																<div class="service-row col-md-12" >
			    																	<div class="row">
			    																		
			    																		<div class="col-md-4">
			    																			<div class="row" style="padding-left: 15px;">
					    																		<p class="favorite-font service-title " style="margin: 0" >
						    																		My Warehouse<span class="warehouse-num">(0)</span>
						    																	</p>
			    																			</div>	
			    																		</div>
			    																		
			    																		<div class="col-md-8">
			    																			<div class="row"  style="padding-left: 15px;padding-right: 10px;">
			    																				<p class="favorite-font service-desc "  style="margin: 0" >
						    																		You can arrange delivery once your name status becomes "Arrived"
						    																	</p>
			    																			</div>	
			    																		</div>
			    																		
				    																	
				    																	
				    																	
			    																	</div>
			    																	
			    																</div>
		    																</div>
		    																
		    																
		    																
		    															</div>
		    														</div>
		    													</div>
															</div>
														</div>
														
													</div>
												</div>
												<!-- end second row -->
    											
    										
    											<!-- close 6 md -->
    											
    											<div class="col-md-12">
    												<div class="row">
    													<div class="section-title-wrapper">
    														<p class="favorite-font section-title" style="float: left" ><strong>My Favorite</strong></p>
    														<a class="favorite-font link-to-favorite">>></a>
    													</div>
    													
    													<div class="favorite-info">
    														<p class="no-favorite favorite-font">No item here go to save your favorite links now!</p>
    													</div>
    												</div>
    											</div>
    											<!-- close 12 md -->
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

		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		<script src="<?php echo base_url();?>assets/js-view/dashboard.js"></script>
		<script src="<?php echo base_url();?>assets/js-view/userdashboard.js"></script>
		
		<script id="news_result" type="text/x-jQuery-tmpl">
			<div class="news-row" onclick="location.href='news_detail?news_id={{= news_id}}'">
				<a class="news-title favorite-font">{{= title }}</a>
				<a class="news-date favorite-font">{{= formatDate(created_date) }}</a>
				<div style="clear:both;"></div>
			</div>
   		</script>
	</body>
</html>