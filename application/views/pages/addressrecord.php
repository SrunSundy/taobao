<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Address Records | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/dashboard.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/addressrecord.css" />
		
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
				
					<div class="col-md-12" id="display_content" style="display:none;">
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
    												<p class="favorite-font section-title" style="font-size: 18px;" ><strong>Address Records</strong></p>   																
    											</div>
    											
    											<div class="shipping-wrapper">
    												<p class="ps-shipping-address favorite-font">Shipping Address</p>
    												
    												<div id="address_display" class="address-wrapper">
    													
    												</div>
    												
    												<div class=" col-md-12 address-item-wrapper">  												
    													<div class="row">
    													<p class="add-address-text address-item">
    														<span class="favorite-font add-data-btn address-edit-btn">[+] Add New Address</span>
    														<span class="favorite-font add-data-desc">(You had created "<span id="addr_cnt"></span>" delivery addresses. Pls notice a maximum of <span style="color:red">5</span> can be created.)</span>													
    													</p>
    													
    													<div class="fill-in-form col-md-12">
    														<div class="row">
	    															<div class="section-title-wrapper" style="border-top:0;background: transparent;padding-left:0">
				    													<p class="favorite-font section-title" style="font-size: 16px;" ><strong>Add new address</strong></p>   																
					    											</div>
					    											
					    											<div class="col-md-12 add-address-wrapper">
					    												<div class="row">
					    													
					    													<div class="col-md-6">
					    														<div class="row add-address-left" style="padding-right: 15px;">
					    															 <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input" style="padding-right: 0"><span class="cls-pointer">*</span>Recipient's name:</label>
																					    <div class="col-md-8">
																					      <input type="text" id="add_rept_name" class="rept_name form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Tel:</label>
																					    <div class="col-md-8">
																					      <input id="add_rept_tel" type="text" class="rept_tel form-control favorite-font input-text-form"  >
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Country:</label>
																					    <div class="col-md-8">
																					      <input id="add_rept_country" type="text" class="rept_country form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
																					 <!--  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer"> </span>Provinces/state</label>
																					    <div class="col-md-8">
																					      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div> -->
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>City:</label>
																					    <div class="col-md-8">
																					      <input id="add_rept_city" type="text" class="rept_city form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
					    														</div>
					    													</div>
					    													
					    													<div class="col-md-6">
					    														<div class="row add-address-right" style="padding-left: 15px;">
					    															  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Post code:</label>
																					    <div class="col-md-8">
																					      <input id="add_rept_postcode" type="text" class="rept_postcode form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Address:</label>
																					    <div class="col-md-8">
																					      <input id="add_rept_addr" type="text" class="rept_addr form-control favorite-font input-text-form"  >
																					    </div>
																					  </div>
					    														</div>
					    													</div>
					    													
					    												</div>
					    											</div>
					    											
					    											<div class="col-md-12">
					    												<div class="col-md-6">
					    														<div class="row add-address-left" style="padding-right: 15px;">
					    															 <div class="form-group row">
																					    
																					    <div class="col-md-12 row">
																					       <label class="checkbox-inline title-input favorite-font"><input id="add_is_default" checked type="checkbox" value="">set as default address</label>
																					    </div>
																					   
																					  </div>
																					  <div class="form-group row">
																					    
																					    <div class="col-md-12 row">
																					        <button type="button" id="btn_add_address" class="btn btn-save standard-btn favorite-font">Save
																					        	<i class="fa fa-spinner fa-spin" style="    font-size: 16px;visibility:hidden;color:white;margin-left: 4px;"></i>
																					        </button>
																							<button type="button" class="btn btn-cancel  standard-btn favorite-font">Cancel</button>
																					      	
																					    </div>
																					  </div>
																					  
					    														</div>
					    													</div>
					    													
					    													<div class="col-md-6">
					    														<div class="row add-address-right" style="padding-left: 15px;">
					    															
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
		<script src="<?php echo base_url();?>assets/js-view/addressrecord.js"></script>
		<script id="address_result" type="text/x-jQuery-tmpl">
			<div class="address-item-wrapper {{if is_default == '1' }} default-address  {{/if}}">
        		
				<div class="address-item">
        			<div class="col-left">
        				<p class="recipient-name favorite-font d-rept-name">{{= rept_name }}</p>
        				<div>
        					<p  style="float:left;margin-right: 30px;" class="user-phone-no address-detail favorite-font">
        						<span class=" favorite-font span-title">Tel:</span>
        						<span class="favorite-font span-desc d-rept-tel">{{= rept_tel }}</span>
        					</p>
        					<p style="float:left" class="address-detail favorite-font">
        						<span class=" favorite-font span-title">Postcode:</span>
        						<span class="favorite-font span-desc d-rept-postcode">{{= rept_postcode }}</span>
        					</p>
        					<div style="clear:both"></div>
        				</div>
        				<p class="address-detail favorite-font span-desc"><span class="d-rept-addr">{{= rept_addr }}</span>, <span class="d-rept-city">{{= rept_city }}</span>, <span class="d-rept-country">{{= rept_country }}</span></p>      															
        			</div>
        			<div class="col-right">
        				<a class="favorite-font text-action set-default" style="padding-right:10px;">Set As Default Address</a>
        				<a class="favorite-font text-action address-edit-btn">Edit</a>
        				<span style="color: #333;">|</span>
        				<a class="favorite-font text-action delete-addr">Delete</a>
        			</div>		
        		</div>
        													
        		<div class="fill-in-form col-md-12 update-fill-in-form">
    	    		<div class="row">

						<input type="hidden" class="addr_id" value="{{= addr_id }}"/>
    		    		<div class="section-title-wrapper" style="border-top:0;background: transparent;padding-left:0">
    					    <p class="favorite-font section-title" style="font-size: 16px;" ><strong>Edit address</strong></p>   																
    					</div>
    						    											
    					<div class="col-md-12 add-address-wrapper">
    						<div class="row">  						    													
    						    <div class="col-md-6">
    						    	<div class="row add-address-left" style="padding-right: 15px;">
    						    		 <div class="form-group row">
    										 <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input" style="padding-right: 0"><span class="cls-pointer">*</span>Recipient's name:</label>
    										 <div class="col-md-8">
    										 <div class="row"> </div>
    										 <input type="text" value="{{= rept_name }}" class="rept_name form-control favorite-font input-text-form"  placeholder="">
    									 </div>
    								</div>
    								<div class="form-group row">
    									<label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Tel:</label>
    									<div class="col-md-8">
    										<input type="text" value="{{= rept_tel }}" class="rept_tel form-control favorite-font input-text-form"  >
    									</div>
    								</div>
    								<div class="form-group row">
    									<label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Country:</label>
    									<div class="col-md-8">
    										<input type="text" value="{{= rept_country }}" class="rept_country form-control favorite-font input-text-form"  placeholder="">
    									</div>
    								</div>
    								
    								<div class="form-group row">
    									<label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>City:</label>
    									<div class="col-md-8">
    										<input type="text" value="{{= rept_city }}" class="rept_city form-control favorite-font input-text-form"  placeholder="">
    									</div>
    								</div>
    						    </div>
    						</div>
    						    													
    						<div class="col-md-6">
    						    <div class="row add-address-right" style="padding-left: 15px;">
    						    	<div class="form-group row">
    									<label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Post code:</label>
    									<div class="col-md-8">
    										<input value="{{= rept_postcode }}" type="text" class="rept_postcode form-control favorite-font input-text-form"  placeholder="">
    									</div>
    								</div>
    								<div class="form-group row">
    									<label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Address:</label>
    									<div class="col-md-8">
    										<input value="{{= rept_addr }}" type="text" class="rept_addr form-control favorite-font input-text-form"  >
    									</div>
    								</div>
    						    </div>
    						 </div>
    						    													
    					</div>
    				</div>
    						    											
    				<div class="col-md-12">
    					<div class="col-md-6">
    					    <div class="row add-address-left" style="padding-right: 15px;">
    					    	<div class="form-group row">
    																					    
    								<div class="col-md-12 row">
    									<label class="checkbox-inline title-input favorite-font"><input type="checkbox" {{if is_default == '1' }} checked {{/if}} class="is_default" value="">set as default address</label>
    								</div>
    																					   
    							</div>
    							<div class="form-group row">
    																					    
    								<div class="col-md-12 row">
    									<button type="button" class="btn-save-address btn btn-save standard-btn favorite-font">Save
											<i class="fa fa-spinner fa-spin" style="    font-size: 16px;visibility:hidden;color:white;margin-left: 4px;"></i>
										</button>
    									<button type="button" class="btn btn-cancel  standard-btn favorite-font">Cancel</button>
    																					      	
    								</div>
    							</div>
    																					  
    					    </div>
    					</div>
    					    													
    					<div class="col-md-6">
    					    <div class="row add-address-right" style="padding-left: 15px;">
    					    															
    					    </div>
    					</div>
    				</div>
    				
					<div style="clear:both;" ></div>
							    											
    		    </div> 															    											
    		</div>
    	</div>
   		</script>
	</body>
</html>