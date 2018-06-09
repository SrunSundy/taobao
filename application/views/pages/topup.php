<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Top up | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/dashboard.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/topup.css" />
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
		<section class="accordian-section section-padding" style="padding-top: 50px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="text-align:center;display:none" id="my_loader">
						<p class="favorite-font" style="z-index:10">Please wait. Loading...</p>
						<img src="<?php echo base_url()?>assets/img/loading.gif" style="    margin-top: -25px;" />
					</div>
				
					<div class="col-md-12" id="display_content" >
						<div class="title-path">
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
						
										<div class="col-md-12">
											<div class="row">
												<div class="section-title-wrapper" style="border-top:0;background: white;padding-left:0">
    												<p class="favorite-font section-title" style="font-size: 18px;" ><strong>Add Money</strong></p>   																
    											</div>
    											
    											<div class="col-md-12">
    												<div class="row">
    													
    													<p style="font-family:khmerFontFreeHand; font-weight: 600; font-size: 16px; margin-top: 25px;">សូមជ្រីសរើសប្រព័ន្ធបញ្ចូលទឹកប្រាក់របស់លោកអ្នក</p>
    													
    													<div class="col-md-12">
    														<div class="row">
    															
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="Smart Luy" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/smartluy.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="E-Money" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/emoney.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="Wing" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/wing.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="ABA Bank" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/aba.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="Paygo Wallet" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/paygo.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="Asia Wei Luy" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/asia.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="True Money" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/truemoney.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															
    															<div class="col-md-3 top-up-wrapper">
    																<div class="row">
    																	<div class="top-up-item">
    																		<input name="top-up-system" type="radio" value="Acleda Bank" class="radio-input"/>
    																		<img class="radio-img" src="<?php echo base_url()?>assets/img/acleda.png"/>
    																		<div style="clear:both;"></div>
    																	</div>
    																</div>
    															</div>
    															
    															
    															
    														</div>
    													</div>
    													
    													
    													<!-- input data -->
    													<div class="col-md-12" style="margin-top:30px;">
    														<div class="row">
    															<div class="form-group" style="margin-bottom:15px">
																  <label  class="col-md-3 col-form-label favorite-font" style="font-weight:100">Bank  Detail: </label>
																  <div class="col-md-9">
																    <p id="detail_payment" class="favorite-font" style="font-size: 20px;color:black;">  </p>
																  </div>
																  <div style="clear:both;"></div>
																</div>
																
    															<div class="form-group"  style="margin-bottom:15px">
																  <label  class="col-md-3 col-form-label favorite-font" style="font-weight:100">Purchase Amount :</label>
																  <div class="col-md-9">
																    <input class="form-control favorite-font" style="width: 300px;height:40px;" type="text"  id="purchase_amount">
																  </div>
																   <div style="clear:both;"></div>
																</div>
																
																<div class="form-group"  style="margin-bottom:15px">
																  <label  class="col-md-3 col-form-label favorite-font" style="font-weight:100">Payment Receipt :</label>
																  <div class="col-md-9">
																    <input type="file" class="" id="payment-receipt" />
																  </div>
																   <div style="clear:both;"></div>
																</div>
																
																<div class="form-group"  style="margin-bottom:15px">
																  <label class="col-md-3 col-form-label favorite-font" favorite-font style="font-weight:100">Remark :</label>
																  <div class="col-md-9">
																    <textarea id="remark" class="form-control favorite-font" style="width: 300px;overflow:hidden; resize: vertical;"   ></textarea>
																  </div>
																   <div style="clear:both;"></div>
																</div>
																
    														</div>
    													</div>
    													<div class="col-md-12" style="margin-top:30px;">
    														<div class="row">
    															<button style="letter-spacing: 0; text-transform:none;background: #D72320; height: 40px; padding: 0 25px;" id="top-up-btn" class="btn pull-right favorite-font "  value="Next">Confirm</button>
    														</div>
    													</div>
    													
    													<!-- input data -->
    													
    													
    													
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
	
	
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>
		<span id="messgage_text"  class="message_box favorite-font animated" style="display:none"><i class="fa fa-check" style="font-size: 30px;color: green;"></i> Item is added to your cart! </span>
		<span id="error_messgage_text"  class="error-message_box favorite-font animated" style="display:none"></span>
		<form method="post" action="list_topup" id="redirect-to">
			<input type="hidden" value="1" name="msg" />
		</form>
		
		<div id="process_loading" style="display:none;">
			<div class="loading-bg"></div>
			<div class="image-loading">
				<img src="<?php echo base_url()?>assets/img/loading.gif"  style="width: 110px;"/>
			</div>
		</div>
		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		<script src="<?php echo base_url();?>assets/js-view/dashboard.js"></script>
		<script src="<?php echo base_url();?>assets/js-view/topup.js"></script>
	</body>
</html>