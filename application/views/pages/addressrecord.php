<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Address Records | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/dashboard.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/addressrecord.css" />
		
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
		<section class="accordian-section section-padding" style="padding-top: 30px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
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
    												
    												<div class="address-wrapper">
    													
    													<div class="address-item-wrapper">
        													<div class="address-item">
        														<div class="col-left">
        															<p class="recipient-name favorite-font">Sundy Srun</p>
        															<div>
        																<p  style="float:left;margin-right: 30px;" class="user-phone-no address-detail favorite-font">
        																	<span class=" favorite-font span-title">Tel:</span>
        																	<span class="favorite-font span-desc">012456589</span>
        																</p>
        																<p style="float:left" class="address-detail favorite-font">
        																	<span class=" favorite-font span-title">Postcode:</span>
        																	<span class="favorite-font span-desc">8555</span>
        																</p>
        																<div style="clear:both"></div>
        															</div>
        															<p class="address-detail favorite-font span-desc">Terk tla,phnom penh, Cambodia</p>
        															
        														</div>
        														<div class="col-right">
        															<a class="favorite-font text-action" style="padding-right:10px;">Set As Default Address</a>
        															<a class="favorite-font text-action address-edit-btn">Edit</a>
        															<span style="color: #333;">|</span>
        															<a class="favorite-font text-action">Delete</a>
        														</div>		
        													</div>
        													
        													<div class="fill-in-form col-md-12 update-fill-in-form">
    	    														<div class="row">
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
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Tel:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  >
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Country:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer"> </span>Provinces/state</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>City:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    						    														</div>
    						    													</div>
    						    													
    						    													<div class="col-md-6">
    						    														<div class="row add-address-right" style="padding-left: 15px;">
    						    															  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Post code:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Address:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  >
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
    																					       <label class="checkbox-inline title-input favorite-font"><input type="checkbox" value="">set as default address</label>
    																					    </div>
    																					   
    																					  </div>
    																					  <div class="form-group row">
    																					    
    																					    <div class="col-md-12 row">
    																					        <button type="button" class="btn btn-save standard-btn favorite-font">Save</button>
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
    													
    													
    													
    													<div class="address-item-wrapper">
        													<div class="address-item">
        														<div class="col-left">
        															<p class="recipient-name favorite-font">Sundy Srun</p>
        															<div>
        																<p  style="float:left;margin-right: 30px;" class="user-phone-no address-detail favorite-font">
        																	<span class=" favorite-font span-title">Tel:</span>
        																	<span class="favorite-font span-desc">012456589</span>
        																</p>
        																<p style="float:left" class="address-detail favorite-font">
        																	<span class=" favorite-font span-title">Postcode:</span>
        																	<span class="favorite-font span-desc">8555</span>
        																</p>
        																<div style="clear:both"></div>
        															</div>
        															<p class="address-detail favorite-font span-desc">Terk tla,phnom penh, Cambodia</p>
        															
        														</div>
        														<div class="col-right">
        															<a class="favorite-font text-action" style="padding-right:10px;">Set As Default Address</a>
        															<a class="favorite-font text-action address-edit-btn">Edit</a>
        															<span style="color: #333;">|</span>
        															<a class="favorite-font text-action">Delete</a>
        														</div>		
        													</div>
        													
        													<div class="fill-in-form col-md-12 update-fill-in-form">
    	    														<div class="row">
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
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Tel:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  >
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Country:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer"> </span>Provinces/state</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>City:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    						    														</div>
    						    													</div>
    						    													
    						    													<div class="col-md-6">
    						    														<div class="row add-address-right" style="padding-left: 15px;">
    						    															  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Post code:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
    																						    </div>
    																						  </div>
    																						  <div class="form-group row">
    																						    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Address:</label>
    																						    <div class="col-md-8">
    																						      <input type="text" class="form-control favorite-font input-text-form"  >
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
    																					       <label class="checkbox-inline title-input favorite-font"><input type="checkbox" value="">set as default address</label>
    																					    </div>
    																					   
    																					  </div>
    																					  <div class="form-group row">
    																					    
    																					    <div class="col-md-12 row">
    																					        <button type="button" class="btn btn-save standard-btn favorite-font">Save</button>
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
    												
    												<div class=" col-md-12 address-item-wrapper">  												
    													<div class="row">
    													<p class="add-address-text address-item">
    														<span class="favorite-font add-data-btn address-edit-btn">[+] Add New Address</span>
    														<span class="favorite-font add-data-desc">(You had created "2" delivery addresses. Pls notice a maximum of <span style="color:red">5</span> can be created.)</span>													
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
																					      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Tel:</label>
																					    <div class="col-md-8">
																					      <input type="text" class="form-control favorite-font input-text-form"  >
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Country:</label>
																					    <div class="col-md-8">
																					      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer"> </span>Provinces/state</label>
																					    <div class="col-md-8">
																					      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>City:</label>
																					    <div class="col-md-8">
																					      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
					    														</div>
					    													</div>
					    													
					    													<div class="col-md-6">
					    														<div class="row add-address-right" style="padding-left: 15px;">
					    															  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Post code:</label>
																					    <div class="col-md-8">
																					      <input type="text" class="form-control favorite-font input-text-form"  placeholder="">
																					    </div>
																					  </div>
																					  <div class="form-group row">
																					    <label for="inputPassword" class="col-md-4 col-form-label favorite-font title-input"><span class="cls-pointer">*</span>Address:</label>
																					    <div class="col-md-8">
																					      <input type="text" class="form-control favorite-font input-text-form"  >
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
																					       <label class="checkbox-inline title-input favorite-font"><input type="checkbox" value="">set as default address</label>
																					    </div>
																					   
																					  </div>
																					  <div class="form-group row">
																					    
																					    <div class="col-md-12 row">
																					        <button type="button" class="btn btn-save standard-btn favorite-font">Save</button>
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
	</body>
</html>