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
                                        
                                        <p class="favorite-font text-desc"><span class="">Shipping to:</span></p>
                                         <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                          </select>
                                          
                                        <p class="favorite-font text-desc"><span class="">Package dimension: </span>(Optional)</p>
                                        <div class="col-md-12">
                                        	<div class="row">
                                        		
                                        		<div class="col-md-4">
                                        			<div class="row" >
                                        				 <div class="input-group">                                        
                                                            <input type="text" class="form-control favorite-font" placeholder="Length">
                                                            <span class="input-group-addon favorite-font">CM</span>
                                                        </div>
                                        			</div>
                                        		</div>
                                        		
                                        		<div class="col-md-4" >
                                        			<div class="row" style="padding: 0 0 0px 5px">
                                        				 <div class="input-group">                                        
                                                            <input type="text" class="form-control favorite-font" placeholder="Width">
                                                            <span class="input-group-addon favorite-font">CM</span>
                                                        </div>
                                        			</div>
                                        		</div>
                                        		
                                        		<div class="col-md-4" >
                                        			<div class="row" style="padding: 0 0 0px 5px">
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
                                        
    									
    								</div>
    							</div>
    						</div>
    					</div>
    					
    					<div class="col-md-8">
    						<div class="row"></div>
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