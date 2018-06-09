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
		
		table#all_cart td, table#final_items td{
			padding-top: 3px;
			padding-bottom: 3px;
		}
		
		table#all_cart tbody, table#final_items tbody{
			 border-top: 20px solid white !important;
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
		<input type="hidden" id="base_url" value="<?php echo base_url();?>"/>
		<input type="hidden" id="awaiting_payment_hidden" value="<?php echo $awaiting_payment;?>"/>
		<input type="hidden" id="my_balance_hidden" value="<?php echo $my_balance;?>"/>
		<input type="hidden" id="total_payment_hidden" value=""/>
		<section class="accordian-section section-padding" style="padding-top: 30px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					
						<div class="col-md-7">
							<div class="row">
								<div class="title-path">
									<p style="color: #464646;font-weight:bold;" class="favorite-font"><span class="path-1"><?php echo $this->lang->line('menu_home'); ?></span>
									   <span class="path-split" style="margin: 0 10px 0 10px;font-size: 21px;">></span>
									   <span class="path-2" style="color:#D72320"><?php echo $this->lang->line('home_cart'); ?></span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
							
								<?php 
								$cart= @$this->session->userdata['my_cart'];
			
								if(!empty($cart)){
								?>
								<form style="display: hidden" action="scrape" method="GET" id="scrape_url">
                                     <div class="input-group">
                                                 
                                         <input type="text" name="input_url" id="input_url" class="form-control" placeholder="<?php echo $this->lang->line('home_intro'); ?>" style="height:38px;border-radius: 0; border-top: 2px solid #D72320;border-left: 2px solid #D72320;border-bottom: 2px solid #D72320;">
                                         <span class="input-group-btn" style="z-index:10">
                                            <button id="scrape_data" data-has_sess="<?php if(isset($this->session->userdata['user_sess'])){ echo "1"; }else{ echo "";} ?>" class="btn btn-secondary favorite-font" style="color: white;background: #D72320; border: 2px solid #D72320; max-height: 38px;    letter-spacing: 0;" type="button"><i class="fa fa-search" style="margin-top:-4px;display:block;"></i></button>
                                          </span>
                                                
                                      </div>
                                </form>
                                <?php }?>
							</div>
						</div>
						<div style="clear:both"></div>
						
						
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
						<div class="col-md-12" style="margin-top: 25px;">
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
                                                    <p class="list-group-item-text favorite-font">Order Processing</p>
                                                </a>
                                            </li>
                                            <li id="navStep4" class="li-nav disabled" step="#step-4">
                                                <a>
                                                	<span class="step-no favorite-font">4</span>
                                                    <p class="list-group-item-text favorite-font">Received Stuffs & Payment</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                                <div class=" setup-content" id="step-1">
                                    <div class="col-xs-12 row">
										<div style="padding:7px" class="col-md-12 text-center">
										
										<div class="box-body table-responsive no-padding" style="">
                                        <table id="all_cart" width="100%">
										   <thead>
												<tr style="  background-color: #f5f5f5; padding:7px" class= "text-center">
													<td width="10%" class="text-left"> &nbsp;&nbsp;&nbsp;<input class="select_all favorite-font"  checked style="width: 11px;" type="checkbox" /> All</td>
													<td width="10%"></td>
													<td width="30%" class="favorite-font">Items</td>
													<td class="text-left favorite-font" width="10%">Unit Price</td>
													<td width="10%" class="favorite-font">Qty</td>
													<td width="10%" class="favorite-font">Domestic Express</td>
													<td width="10%" class="favorite-font">Total</td>
													<td width="10%" class="favorite-font">Message</td>
												</tr>
											</thead>
											<tbody>
											<?php 
											foreach($cart as $carts){
											?>	
									
												<tr id="row<?=$carts['item_id']?>">
													<td width="10%" style="    text-align: left;" class="check-input favorite-font" >&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input style="margin-left:7px;width: 11px;" type="checkbox" checked class="checkbox"/>
													<input type="hidden" class='items_id' value='<?=$carts['item_id']?>'/>
													<input type="hidden" class='items_price_dollar' value='<?=number_format((float)$carts['item_price_dollar'], 2, '.', '')?>'/>
													<input type="hidden" class='items_price_yaun' value='<?=number_format((float)$carts['item_price'], 2, '.', '')?>'/>
													<input type="hidden" class='item_url' value='<?=$carts['item_url']?>'/>
													<input type="hidden" class='item_color' value='<?=$carts['item_color']?>'/>
													<input type="hidden" class='item_size' value='<?=$carts['item_size']?>'/>
													<input type="hidden" class='item_photo' value='<?=$carts['item_photo']?>'/>
													<input type="hidden" class='item_express_fee' value='<?= number_format((float)$carts['item_domestic']/6, 2, '.', '');?>'/>
													</td>
													
													<td width="10%" class="pro_img"><img src="<?=$carts['item_photo']?>_90x90.jpg"></img></td>
													<td width="30%" class="item_title"><small><a href="<?=$carts['item_url']?>" target="_blank"><?=$carts['item_title']?></a></small></br><small style="color:#E91E63">(<?=$carts['item_color']?>,<?=$carts['item_size']?>)</small></td>
													<td class="price_tb text-center" width="10%">$<?= number_format((float)$carts['item_price_dollar'], 2, '.', '');?></td>
													<td class=" text-center item-qty" width="10%">
													
													<div class="input-append spinner col-lg-8 col-md-8 col-xs-8 " data-trigger="spinner">
														<div class="input-group" style="width:150px;">
															<span class="input-group-addon qtyminus" style="cursor: pointer">
															<a href="javascript:;" class="spin-down spin-control " field='quantity'><i class="glyphicon glyphicon-minus"></i></a>
															</span>
															<input type="text" readonly style="background-color:white" name="product_qty" id="spinner-input" class="form-control qty-input qty_tb" value="<?=$carts['item_qty']?>" /> 

															<span class="input-group-addon qtyplus" style="cursor: pointer">
															
															<a href="javascript:;" class="spin-up spin-control " field='quantity'><i class="glyphicon glyphicon-plus"></i></a>
															</span>

														</div>
													</div> 
													</td>
													
													<td class="express-fee" width="10%">$<?= number_format((float)$carts['item_domestic']/6, 2, '.', '');?></td>
													<td style="color:#E91E63" class="cart_total_price" width="10%"><?= ( ($carts['item_qty'] * $carts['item_price_dollar'])+ $carts['item_domestic'] ) / $carts['item_qty']?></td>
													<td width="10%"  class="item_message_td"><input class="item_message" type="text" value="<?=$carts['item_message'] ?>" /></td>
												</tr>
											<?php 
											}
																						
											?>
											</tbody>
                                            
                                        </table>
                                        </div>
                                        </div>
										<div style="  background-color: #f5f5f5; padding:7px; margin-top: 15px;     overflow: hidden;" class="col-md-12 text-center">
										   
										   
										   <div class="col-md-3">
										   		<div class="row" style="float:left;text-align:left;">
										   		
										   			<div class="total-item-dis favorite-font" style="margin-right: 20px;margin-left: 5px;">
										   				<input class="select_all favorite-font"  checked style="width: 11px;cursor:pointer" type="checkbox" />  Select All
										   			</div>
										   			<div class="total-item-dis favorite-font"  style="margin-right: 5px;">
										   				<a class="delete-item" href="javascript:;" onclick="deleteItems()"> Delete </a>
										   			</div>
										   			<div class="total-item-dis favorite-font">
										   				<img id="delete_item_loading" src="<?php echo base_url()?>assets/img/loading.gif" style="width:40px;display:none;" />
										   			</div>
										   			
										   			
										   						 
										   		</div>
										   </div>
										   
										   <div class="col-md-9">
										   		<div class="row" style="float:right">
										   			
										   			<div class="total-item-dis favorite-font">
										   				Total <b class="total-qty">0</b> qty
										   			</div>
										   			<div class="total-item-dis favorite-font">
										   				My balance <b style="color:#E91E63" id="my_balance">$<?php echo number_format((float)$my_balance, 2, '.', '');?></b>
										   			</div>
										   			<div class="total-item-dis favorite-font">
										   				Awaiting Payment <b style="color:#E91E63" id="awaiting_payment">$<?php echo number_format((float)$awaiting_payment, 2, '.', '');?></b>
										   			</div>
										   			<div class="total-item-dis favorite-font">
										   				Total Payment <b style="color:#E91E63" class="total-pay" >$0</b>
										   			</div>
										   			
										   			<div class="total-item-dis favorite-font" style="margin-right:0">
										   				<button style="letter-spacing: 0; text-transform:none;background: #D72320; height: 40px; padding: 0 25px;" onclick="step1Next()" class="btn pull-right favorite-font " value="Next">Check Out</button>
										   			</div>
										   			
										   		</div>
										   </div>
												
										</div>
										
                                          
                                           
                                        </div>
                                    
                                </div>
                                <div class="setup-content" id="step-2">
								<div class="col-xs-12 row">
										<div style="padding:7px" class="col-md-12 text-center">
										
										<div class="box-body table-responsive no-padding" style="">
                                        <table id="final_items" width="100%">
										   <thead>
												<tr style="  background-color: #f5f5f5; padding:7px" class= "text-center">
													<td width="10%" class="favorite-font"> All</td>
													<td width="10%" class="favorite-font"></td>
													<td width="30%" class="favorite-font">Items</td>
													<td class="text-left favorite-font" width="10%">Unit Price</td>
													<td width="10%" class="favorite-font">Qty</td>
													<td width="10%" class="favorite-font">Domestic Express</td>
													<td width="10%" class="favorite-font">Total</td>
													<td width="10%" class="favorite-font">Message</td>
												</tr>
											</thead>
											<tbody>
											</tbody>
                                        </table>
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-12 agreement-detail" style="margin-top: 15px">
                                        	<div class="row">
                                        		<p style="font-family:khmerFontFreeHand;margin:0;" class=" cls-title">*ការដឹកជញ្ជូនពីប្រទេសចិន មកដល់ ឃ្លាំង ប្រទេសកម្ពុជា</p>
                                        		
                                        		<div style="padding: 10px 25px">
                                        			<input  type="checkbox" disabled checked  /><span style="font-family:khmerFontFreeHand;    padding-left: 10px;">ដឹកជញ្ជូនតាមផ្លូវគោក ( 1kg = $3,  គិតតាមទម្ងន់ជាក់ស្តែង)</span>
                                        		</div>
                                        		
                                        		<p style="font-family:khmerFontFreeHand;margin:0;" class=" cls-title">*ការបង់ប្រាក់</p>
                                        		
                                        		<div style="padding: 10px 25px">
                                        			<input  type="checkbox" disabled checked  /><span style="font-family:khmerFontFreeHand;    padding-left: 10px;">កក់ប្រាក់ 33.33% នៃថ្លៃទំនិញ រួចទូទាត់ទំនិញពេលមកដល់ប្រទេសកម្ពុជា រួមទាំង សេវា និងថ្លៃដឹកជញ្ជូន</span>
                                        		</div>
                                        		
                                        		<p style="font-family:khmerFontFreeHand;margin:0;" class=" cls-title">*អាស័យដ្ឋាន និងលេខទំនាក់ទំនង</p>
                                        		<!-- add address -->
                                        		
                                        		<div class="col-md-12" style="text-align:center;display:none;margin-top:20px;" id="my_loader">
													<p class="favorite-font" style="z-index:10">Please wait. Loading...</p>
													<img src="<?php echo base_url()?>assets/img/loading.gif" style="    margin-top: -25px;" />
												</div>
												
												<div  id="display_content" style="display:none;margin-top:20px;">
													<div id="address_display" class="address-wrapper">
    													
    												</div>
                                        			<div class=" col-md-12 address-item-wrapper">  												
    													<div class="row">
    													<p class="add-address-text ">
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
																					       <label class="checkbox-inline title-input favorite-font"><input id="add_is_default" type="checkbox" checked value="">set as default address</label>
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
                                        		
                                        			<!-- add address -->
                                        		
                                        	</div>
                                        	
                                        </div>
                                        
                                        <div id="order_msg" style="text-align:right; margin-top:15px;color:#D72320;display:none;" class="favorite-font">
                                        	<?php echo $this->lang->line('order_failed_msg'); ?>
                                        </div>
			
										<div style="  background-color: #f5f5f5; padding:7px; margin-top: 15px;     overflow: hidden;" class="col-md-12 text-center">
										   
										   
										   <div class="col-md-1">
										   		<div class="row" style="float:left;text-align:left;">
										   		
										   			
										   			
										   						 
										   		</div>
										   </div>
										   
										   <div class="col-md-11">
										   		<div class="row" style="float:right">
										   			
										   			<div class="total-item-dis favorite-font">
										   				Total <b class="total-qty">0</b> qty
										   			</div>
										   			<div class="total-item-dis favorite-font">
										   				My balance <b style="color:#E91E63" class="my_balance_total">$<?php echo number_format((float)$my_balance, 2, '.', '');?></b>
										   			</div>
										   			<div class="total-item-dis favorite-font">
										   				Awaiting Payment <b style="color:#E91E63" class="awaiting_payment_total">$<?php echo number_format((float)$awaiting_payment, 2, '.', '');?></b>
										   			</div>
										   			<div class="total-item-dis favorite-font">
										   				Total Payment <b style="color:#E91E63" class="total-pay" >$0</b>
										   			</div>
										   			
										   			<div class="total-item-dis favorite-font" style="margin-right:0">
										   				<button style="letter-spacing: 0; text-transform:none;background: #D72320; height: 40px; padding: 0 25px;" onclick="payForOrder()" class="btn pull-right favorite-font " id="pay_my_order" value="Next">Pay</button>
										   			</div>
										   			
										   		</div>
										   </div>
												
										</div>
                                          
                                           
                                     </div>
                                    	
                                </div>
                               
                                <div class="setup-content" id="step-3">
                                    <div class="col-xs-12 row">
                                        <div class="col-md-12 well text-center">
                        
                                           <form>

										   <div class="col-sm-12 form-group">
												<label for="address">Please fill your address:</label>
												<textarea class="form-control" type="textarea" name="address" id="address" placeholder="Please fill your address" maxlength="150" rows="7"></textarea>
											</div>
										   
										   </form> 

                        
                                            <input onclick="prevStep()" class="btn btn-md btn-info" value="Prev">
                                            <input onclick="step3Next()" class="btn btn-md btn-info" value="Next">
                        
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="setup-content" id="step-4">
                                    <div class="col-xs-12 row">
                                        <div class="col-md-12 well text-center">
                        
                                            <div class="invoice-box">
													<table cellpadding="0" cellspacing="0">
														<tr class="top">
															<td colspan="2">
																<table>
																	<tr>
																		<td class="title">
																			<img src="<?php echo base_url()?>/assets/img/logo/logo.png" class="logo logo-scrolled">
																		</td>
		
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr class="information">
															<td colspan="2">
																<table>
																	<tr>
																		<td>
																			Sparksuite, Inc.<br>
																			12345 Sunny Road<br>
																			Sunnyville, CA 12345
																		</td>
																		
																		<td>
																			Acme Corp.<br>
																			John Doe<br>
																			010959905<br>
																			<span class="invoice-address"></span>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														
														<tr class="heading checkout-item">
															<td>
																Item
															</td>
                                                            <td> 
                                                               Qty
															</td>
															<td>
																Price
															</td>
														</tr>
				
														<tr class="total">
															<td></td><td></td>
															<td>
															Total: $<span id="totalcheckout">0</span>
															</td>
														</tr>
													</table>
												</div>
											<br>
							                <input onclick="prevStep()" class="btn btn-md btn-info" value="Prev">
                                            <input class="btn btn-md btn-primary" onClick="checkout()" value="Check Out">
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
		<span id="error_messgage_text"  class="error-message_box favorite-font animated" style="display:none"></span>
		<form method="post" action="order_success" id="redirect-to">
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
		<script src="<?php echo base_url();?>assets/js-view/mycart.js"></script>
		<script id="address_result" type="text/x-jQuery-tmpl">
			<div class="address-item-wrapper {{if is_default == '1' }} default-address  {{/if}}">
        		<input type="hidden" class="address_id" value="{{= addr_id }}" />
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
        				<p class="address-detail location-address favorite-font span-desc"><span class="d-rept-addr">{{= rept_addr }}</span>, <span class="d-rept-city">{{= rept_city }}</span>, <span class="d-rept-country">{{= rept_country }}</span></p>      															
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