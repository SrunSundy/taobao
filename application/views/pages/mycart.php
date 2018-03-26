<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>My Cart | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/mycart.css" />
		
		<style>
		 #myNav li:not([disabled]){
            cursor:pointer;
        }
		</style>
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
							   <span class="path-2" style="color:#D72320"><?php echo $this->lang->line('home_cart'); ?></span>
							</p>
						</div>
						
						
						
						<!-- no records in cart -->
						<div class="no-data col-md-12" style="display:none;">
							<div class="row">
							
    							<div class="no-data-title ">
    								<p style="color:white;padding: 10px 0 10px 20px;font-weight:bold;" class="favorite-font"><?php echo $this->lang->line('home_cart'); ?></p>
    							</div>
    							<div class="no-data-des col-md-12" style="text-align: center;padding-top: 40px;padding-bottom: 40px;">
    							
    								<div class="col-md-4">
    								
    								</div>
    								<div class="col-md-4" align="center">
    									<div class="row">
        									<a style="background: #e8e8e8;display:inline-block;padding: 15px;border-radius: 100%;margin-right: 10px;">
            									<img src="<?php echo base_url();?>assets/img/icon/cart-1.png" style="width: 45px;height:45px;" /> 
            								</a>
            								<p style="display:inline-block;font-weight:bold;" class="favorite-font">
            									<?php echo $this->lang->line('my_cart_empty'); ?>
            								</p>
            								 
            								<div class="input-group" style="margin-top: 15px;">
                                              <input type="text" class="form-control" placeholder="Please enter product's name" style="height:35px;border-radius: 30px 0 0 30px; border-top: 1px solid #a0a0a0;border-left: 1px solid #a0a0a0;border-bottom: 1px solid #a0a0a0;">
                                              <span class="input-group-btn">
                                                <button id="scrape_data" class="btn btn-secondary favorite-font" style="    height: 35px;
                                                                                                                            padding-left: 14px;
                                                                                                                            padding-top: 7px;
                                                                                                                            width: 50px;
                                                                                                                            border-radius: 0 30px 30px 0;
                                                                                                                            box-shadow: none;
                                                                                                                            color: white;
                                                                                                                            background: #ffffff;
                                                                                                                            border: 1px solid #d72320;
                                                                                                                            max-height: 50px;
                                                                                                                            letter-spacing: 0;
                                                                                                                            background: #d72320;" type="button">
                                                	<i class="fa fa-search" style="font-size: 18px;"></i>
                                                </button>
                                              </span>
                                            </div>
                                            
                                            <button onclick="location.href='<?php echo base_url(); ?>/home'" class="btn event-btn" type="button" style="letter-spacing: 0; text-transform: none; background:#d72320;height:40px;margin-top: 15px; ">
                								<p class="favorite-font" style="margin-top: -5px;font-weight:bold;"><?php echo $this->lang->line('my_cart_go_home'); ?></p>
                							</button>
    									</div>
								</div>
    								<div class="col-md-4">   								
    								</div>   								    								
    							</div>
							</div>							
						</div>
						<!-- no records in cart -->
						
						
						<!-- have records in cart -->
						<div class="col-md-12" style="margin-top: 12px;">
							<div class="row">
								<div class="form-group">
                                    <div class="col-xs-12 row">
                                        <ul class="nav nav-pills nav-justified thumbnail setup-panel my-ul" id="myNav" >
                                            <li id="navStep1" class="li-nav active" step="#step-1">
                                                <a>
                                                	<span class="step-no favorite-font">1</span>
                                                    <p class="list-group-item-text favorite-font">Search URL</p>
                                                </a>
                                            </li>
                                            <li id="navStep2" class="li-nav disabled" step="#step-2">
                                                <a>
                                                	<span class="step-no favorite-font">2</span>
                                                    <p class="list-group-item-text favorite-font">Submit Purchasing</p>
                                                </a>
                                            </li>
                                            <li id="navStep3" class="li-nav disabled" step="#step-3">
                                                <a>
                                                	<span class="step-no favorite-font">3</span>
                                                    <p class="list-group-item-text favorite-font">Shipping Address</p>
                                                </a>
                                            </li>
                                            <li id="navStep4" class="li-nav disabled" step="#step-4">
                                                <a>
                                                	<span class="step-no favorite-font">4</span>
                                                    <p class="list-group-item-text favorite-font">Confirm Reception</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                                <div class=" setup-content" id="step-1">
                                    <div class="col-xs-12 row">
                                        <div class="col-md-12 well text-center">
                                            <h1> STEP 1</h1>
                                            <!-- <form> -->
                        
                                            <div class="container col-xs-12">
                                                <input />
                                            </div>
                                            <input onclick="step1Next()" class="btn btn-md btn-info" value="Next">
                        
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="setup-content" id="step-2">
                                    <div class="col-xs-12 row">
                                        <div class="col-md-12 well text-center">
                                            <h1 class="text-center"> STEP 2</h1>
                        
                                            <!--<form>-->
                                            <div class="container col-xs-12">
                                                <input />
                                                <input />
                                            </div>
                                            <!--</form> -->
                        
                                            <input onclick="prevStep()" class="btn btn-md btn-info" value="Prev">
                                            <input onclick="step2Next()" class="btn btn-md btn-info" value="Next">
                        
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="setup-content" id="step-3">
                                    <div class="col-xs-12 row">
                                        <div class="col-md-12 well text-center">
                                            <h1 class="text-center"> STEP 3</h1>
                        
                                            <!--<form></form> -->
                        
                                            <input onclick="prevStep()" class="btn btn-md btn-info" value="Prev">
                                            <input onclick="step3Next()" class="btn btn-md btn-info" value="Next">
                        
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="setup-content" id="step-4">
                                    <div class="col-xs-12 row">
                                        <div class="col-md-12 well text-center">
                                            <h1 class="text-center"> STEP 4</h1>
                        
                                            <!--<form></form> -->
                                            <input onclick="prevStep()" class="btn btn-md btn-info" value="Prev">
                                            <input class="btn btn-md btn-primary" value="Send">
                                        </div>
                                    </div>
                                </div>
                                
                                
							</div>
						</div>
						
						<!-- have records in cart -->
						
					</div>
				</div>
			</div>
		</section><!-- end accordian section -->
	
		
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>

		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		<script src="<?php echo base_url();?>assets/js-view/mycart.js"></script>
		
	</body>
</html>