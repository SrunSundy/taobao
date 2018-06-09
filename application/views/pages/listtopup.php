<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Top up | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/dashboard.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/listtopup.css" />
	</head>


	<body>
		<input type="hidden" value="<?php echo base_url();  ?>" id="base_url" />
		<input type="hidden" value="<?php echo $msg ?>" id="is_msg" />
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
											</div>
										</div>
										
										<div class="col-md-12" style="margin-top: 25px;    border-bottom: 1px solid #dfdfdf;    padding-bottom: 15px;">
											<div class="row">
												<p class="favorite-font pull-left" style="float:left; font-size: 15px;">Your account balance: <span id="your-balance" style="color: #E4282C;font-size: 16px;font-weight: 600"><?php echo number_format((float)$my_balance, 2, '.', ''); ?> </span><span style="color: #E4282C;font-size: 16px;font-weight: 600">USD</span></p>
												<button style="letter-spacing: 0; text-transform:none;background: #D72320; height: 40px; padding: 0 25px;" id="top-up-btn" onclick="location.href='topup'" class="btn pull-right favorite-font "  value="Next">Top Up</button>
											</div>
										</div>
										
										<div class="col-md-12">
											<div class="row">
												
												<p class="favorite-font" style="font-weight:600;font-size: 16px;margin: 15px 0;">Top Up Records</p>
												<div class="box-body table-responsive no-padding" style="">
			                                        <table class="my-table"  width="100%">
													   <thead>
															<tr style="  background-color: #f5f5f5; padding:7px" class= "text-center">
																<td width="22%" class="favorite-font">Time</td>
																<td width="22%" class="favorite-font">Serial Number</td>
																<td width="22%" class="favorite-font">Purchase Amount</td>
																<td width="34%" class=" favorite-font" width="10%">Status</td>
															</tr>
														</thead>
														<tbody class="favorite-font" id="div_display">
															
														</tbody>
			                                            
			                                        </table>
			                                     </div>
			                                     
			                                     <div id="pagi-display" class="pagination-display favorite-font" style="padding-top:20px; float:right;">	     
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

		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		<script src="<?php echo base_url();?>assets/js-view/dashboard.js"></script>
		<script src="<?php echo base_url();?>assets/js-view/listtopup.js"></script>
		
		<script id="div_result" type="text/x-jQuery-tmpl">
			<tr >
				<td>{{= created_date }}</td>
				<td>{{= de_id }}</td>
				<td>{{= amount}} USD</td>
				<td>{{= deStatus(de_status) }}</td>
																
			</tr>
   		</script>	
		
	</body>
</html>