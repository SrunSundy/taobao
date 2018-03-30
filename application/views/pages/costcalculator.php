<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Cost Calculator | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/costcalculator.css" />
		
	
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
		<section class="accordian-section section-padding" style="padding-top: 55px;">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12" style="margin-bottom: 20px;">						
						<p class="favorite-font-amaranth" style="font-size: 32px;  font-weight: 400;color:#333; text-align:center;">Cost Calculator</p>		
						<p class="favorite-font title-desc">Your estimated costs may differ from final actual costs.Try to input accurate data of item price, shipping weight and dimension to minimize the difference.</p>						
					</div>
    					
    				<div class="col-md-12">
    					
    					<div class="col-md-4">
    						<div class="row">
    							<div class="col-md-12 calculator-box">
    								<div class="row">
    								
    									<p class="sectoin-title favorite-font"> Select Service</p>
    									<label class="radio-inline favorite-font opt-service" style="padding-right: 15px;"><input type="radio" name="optradio">BuyForMe</label>
										<label class="radio-inline favorite-font opt-service"><input type="radio" name="optradio">ShipForMe</label>
    									<div class="my-liner"></div>
    									
    									
                                        <p class="favorite-font text-desc"><span class="">Items price:</span>(Including domestic shipping fee)</p>
                                        <div class="input-group">
                                           
                                            <input type="text" class="form-control" placeholder="Amount">
                                            <span class="input-group-addon favorite-font" style="min-width: 40px;">CNY</span>
                                        </div>
                                        
                                        
                                        <p class="favorite-font text-desc"><span class="" >Estimate shipping weight:</span></p>
                                        <div class="input-group">
                                           
                                            <input type="text" class="form-control" placeholder="Amount">
                                            <span class="input-group-addon favorite-font" style="min-width: 40px;">KG</span>
                                        </div>
                                        
                                       <!--  <p class="favorite-font text-desc"><span class="">Shipping to:</span></p>
                                         <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                          </select> -->
                                          
                                        <p class="favorite-font text-desc"><span class="">Package dimension: </span>(Optional)</p>
                                        <div class="col-md-12">
                                        	<div class="row">
                                        		
                                        		<div class="col-md-4">
                                        			<div class="row" >
                                        				 <div class="input-group" style="padding-top: 5px;">                                        
                                                            <input type="text" class="form-control favorite-font" placeholder="Length">
                                                            <span class="input-group-addon favorite-font">CM</span>
                                                        </div>
                                        			</div>
                                        		</div>
                                        		
                                        		<div class="col-md-4" >
                                        			<div class="row input-measure" style="padding: 5px 0 0px 5px">
                                        				 <div class="input-group">                                        
                                                            <input type="text" class="form-control favorite-font" placeholder="Width">
                                                            <span class="input-group-addon favorite-font">CM</span>
                                                        </div>
                                        			</div>
                                        		</div>
                                        		
                                        		<div class="col-md-4" >
                                        			<div class="row input-measure" style="padding: 5px 0 0px 5px">
                                        				 <div class="input-group">                                        
                                                            <input type="text" class="form-control favorite-font" placeholder="Height">
                                                            <span class="input-group-addon favorite-font">CM</span>
                                                        </div>
                                        			</div>
                                        		</div>
                                        		
                                        		
                                        	</div>
                                        </div>
                                        <div style="clear:both;"></div>
                                        
                                        <div class="my-liner"></div>
                                        
                                        <button class="btn confirm-btn" style="text-transform: none;letter-spacing: 0px; background:#D72320;width: 100%;font-weight: bold;font-size: 18px; ">Confirm</button>
    									
    								</div>
    							</div>
    						</div>
    					</div>
    					
    					<div class="col-md-8">
    						<div class="row result-wrapper" >
    							
    							<!-- loading -->
    							<div class="display-loading col-md-12" style="display:none;">
    								<div class="row" style="text-align:center;padding-top: 80px; padding-bottom: 50px;">
    									<p class="waiting-text favorite-font">Please wait. Caculating...</p>
    									<img src="<?php echo base_url()?>assets/img/loading.gif" style="" />
    								</div>
    							</div>
    							<!-- loading -->
    							
    							
    							<!-- display result of service -->
    							<div class="display-result col-md-12" style="display:none;">
    								<div class="row" >
    								
    									<div class="title-header col-md-12">
    										<div class="row">
    											<p class="favorite-font">Cost estimate</p>
    										</div>
    									</div>
    									
    									<div class="display-content col-md-12">
    										<div class="row" style="padding: 15px 0 15px 0">
    											
    											<div class="display-left col-md-7">
    												<div class="row" style="padding: 0px 0 0px 20px;">
    													
    													<p class="favorite-font my-desc">
    														<span>Items price : </span>
    														$<span>12</span>
    													</p>
    													
    													<p class="favorite-font my-desc">
    														<span>Serivce Fee:</span>
    														$<span>0</span>
    													</p>
    													<p class="favorite-font my-desc">
    														<span>Customs Charge:</span>
    														$<span>0</span>
    													</p>
    												</div>
    											</div>
    											
    											<div class="display-right col-md-5">
    												<div class="row" style="text-align:center;">
    													<p class="inside-title favorite-font">Total Amount</p>
    													
    													<p class="result-of-estimate favorite-font">
    														$<span>100</span>
    													</p>
    												</div>
    											</div>
    											
    										
    										</div>
    									</div>
    									
    								</div>
    							</div>
    							<!-- display result of service -->
    							
    							<!-- display image -->
    							<div class="image-wrapper col-md-12" style="display:none;">
    								<div class="row" >
    									
    								</div>
    							</div>
    							<!-- display image -->
    							
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
	</body>
</html>