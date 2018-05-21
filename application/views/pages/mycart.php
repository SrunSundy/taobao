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
		input[type=checkbox]{
		  /* Double-sized Checkboxes */
		  -ms-transform: scale(1.5); /* IE */
		  -moz-transform: scale(1.5); /* FF */
		  -webkit-transform: scale(1.5); /* Safari and Chrome */
		  -o-transform: scale(1.5); /* Opera */
		  padding: 2px;
		  margin-right: 3px;
		}
		.spin-control {
			font-size: 0.7em;
		}

		#spinner-input {
		  
		   height: 100%;

		   text-align:center;
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
						
						
						<?php 
						$cart= @$this->session->userdata['my_cart'];
						if(empty($cart)){
						?>
						<!-- no records in cart -->
						<div class="no-data col-md-12" style="display:block;">
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
											<form action="scrape" method="GET" id="scrape_url">
            								<div class="input-group" style="margin-top: 15px;">
											 
                                              <input type="text" name="input_url" class="form-control" placeholder="Please enter product's name" style="height:35px;border-radius: 30px 0 0 30px; border-top: 1px solid #a0a0a0;border-left: 1px solid #a0a0a0;border-bottom: 1px solid #a0a0a0;">
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
                                            </form>
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
						<?php }
						else{?>
						
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
                                        <div class="col-md-12">
                                        <table width="100%">
                                         
											
                                            
                                        </table>
                                        </div>
										<div style="padding:7px" class="col-md-12 text-center">
                                        <table width="100%">
										   <thead>
												<tr style="  background-color: #f5f5f5; padding:7px" class= "text-center">
													<td width="10%" class="text-left"> &nbsp;&nbsp;&nbsp;<input class="select_all" type="checkbox" /> All</td>
													<td width="10%"></td>
													<td width="30%">Items</td>
													<td class="text-left" width="10%">Unit Price</td>
													<td width="10%">Qty</td>
													<td width="10%">Domestic Express</td>
													<td width="10%">Total</td>
													<td width="10%">Message</td>
												</tr>
											</thead>
											<tbody>
											<?php 
											
											foreach($cart as $carts){?>
												<tr >
													<td width="10%">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" class="checkbox"/></td>
													
													<td width="10%"><img src="<?=$carts['item_photo']?>_90x90.jpg"></img></td>
													<td width="30%"><small><?=$carts['item_title']?></small></br><small style="color:#E91E63">(<?=$carts['item_color']?>,<?=$carts['item_size']?>)</small></td>
													<td class="price_tb text-center" width="10%"><?=$carts['item_price_dollar']?></td>
													<td class=" text-center" width="10%">
													
													<div class="input-append spinner col-lg-8 col-md-8 col-xs-8" data-trigger="spinner">
														<div class="input-group" style="width:150px;">
															<span class="input-group-addon">
															<a href="javascript:;" class="spin-down spin-control qtyminus" field='quantity'><i class="glyphicon glyphicon-minus"></i></a>
															</span>
															<input type="text" readonly style="background-color:white" name="product_qty" id="spinner-input" class="form-control qty-input qty_tb" value="<?=$carts['item_qty']?>" /> 

															<span class="input-group-addon">
															
															<a href="javascript:;" class="spin-up spin-control qtyplus" field='quantity'><i class="glyphicon glyphicon-plus"></i></a>
															</span>

														</div>
													</div> 
													</td>
													
													<td width="10%"><?=$carts['item_domestic']?></td>
													<td style="color:#E91E63" class="cart_total_price" width="10%"><?=$carts['item_qty'] * $carts['item_price_dollar']?></td>
													<td width="10%"><input type="text" value="<?=$carts['item_message'] ?>" /></td>
												</tr>
											<?php }
																						
											?>
											</tbody>
                                            
                                        </table>
                                        </div>
										<div style="  background-color: #f5f5f5; padding:7px" class="col-md-12 text-center">
										   <table width="100%">
												<tr>
												 <td width="12%" class="text-left"> <a href="<?php echo base_url();?>/empty_cart">Delete</a>
												 
												 </td>
												 <td width="12%"></td>
												 <td width="12%" class="text-right">Total <b class="total-qty">0</b> qty</td>
												 <td width="12%" class="text-right">My balance <b style="color:#E91E63">$0</b></td>
												 <td width="15%" class="text-center">Awaiting Payment <b style="color:#E91E63">$0</b></td>
												 <td width="14%" class="text-right">Total Panyment <b style="color:#E91E63" class="total-pay" >$0</b></td>
												 <td width="6%"><input onclick="step1Next()" class="btn  btn-danger btn-sm pull-right " value="Pay"></td>
												</tr>
										   </table>
												
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
					<?php }?>
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