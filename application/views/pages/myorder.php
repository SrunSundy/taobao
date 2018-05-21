<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>My Order | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/myorder.css" />
	</head>


	<body>
		<?php include 'include/loader.php' ?>
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
			<?php 
			 ##############fix data
			 $sumaryOrder=$sumaryOrder[0];
			 $se_customer="1027761280620309";
			 $se_fullName ="Mengky Chen";
			 $se_phone="010959905";
			 $deposit=10;
			 $total=10;
			 $olwbalance=0;
			 $allOrder=$sumaryOrder->allOrder;
			 $arrival=$sumaryOrder->arrival;
			 $outstock=$sumaryOrder->outstock;
			 $delivery=$sumaryOrder->delivery;
			 ##############close fix data
			
			?>
			
		</header> <!-- end header -->

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<div class="ruler-style">
		</div>
	
	
	
		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding" style="padding-top: 55px;">
			<div class="container">
				 <div class="row">
						<div class="box">
						  <div class="container">
						  <div class="col-sm-12 ">
							<div class="row">
							 
								<div class="col-md-1">
									<!--<img style=" border-radius: 50%; margin-top:10px" width="70" height="70" src="https://graph.facebook.com/1027761280620309/picture?width=70&amp;height=70">-->
									<img style=" border-radius: 50%; margin-top:10px" width="70" height="70" src="https://graph.facebook.com/<?php if (is_numeric($se_customer)){ echo $se_customer ;}else{echo "1551472425103742";}?>/picture?width=70&height=70"/>
						 
								</div>
								<div class="col-md-6">
									<h4><?php echo $se_fullName ?></h4>
									<p><span>Phone :</span> <span style="color:#81a5ce"> <b><?php echo $se_phone?></b></span>&nbsp;&nbsp;&nbsp;&nbsp;
									   <span>Ordered Point : </span><span style="color:#81a5ce"> <b>?</b></span> &nbsp;&nbsp;&nbsp;&nbsp;
									  
									  <span > <i class="glyphicon glyphicon-envelope"></i> Unread Messages : </span><span style="color:#81a5ce"> <b>?</b></span>
									</p>
								</div>
								<div class="col-md-5">
									<div class="col-md-6">
										<p class="text-right">Your Balance : <span style="color:#81a5ce"><b><?php if(isset($deposit)) echo $deposit; else echo "0";?> USD</b></span></p>
										<p class="text-right">Awaiting Payment :<span style="color:#fea977"> <b><?php echo $total;?> USD</b></span></p>
										<h3 class="text-right"><span style="color:#81a5ce"><b><?php echo $olwbalance;?> USD</b></span></h3>
									</div>
									<div class="col-md-6">
										<button class=" pull-right btn btn-primary btn-sm btn-square-m"><b>TOP UP</b></button>
										<p class=" pull-right"></p>
										<button class="  pull-right btn btn-sm btn-square-m">My Couppon</button>
									</div>
								</div>
				
						
							</div>
							<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
								<div class="btn-group" role="group">
									<button type="button" id="allOrder" class="btnStatus btn btn-primary" href="#" ><span><?php echo $allOrder;?></span> 

				
										<p><span class="mobile" >My Orders</span></p>
									</button>
								</div>
							
								<div class="btn-group" role="group">
									<a type="button" id="awaitDeliver" class="btnStatus btn btn-default"><?php echo $arrival;?></span>
										<p><span class="mobile" >Awaiting Delivery</span></p>
									</a>
								</div>
								<div class="btn-group" role="group">
									<button type="button" id="outStock" class="btnStatus btn btn-default"><?php echo $outstock;?></span>
										<p><span class="mobile">Out Stock</span></p>
									</button>
								</div>
								<div class="btn-group" role="group">
									<button type="button" id="sucDeliver" class="btnStatus btn btn-default" href="#" ><?php echo $delivery;?></span>
										<p><span class="mobile"> Delivered</span></p>
									</button>
								</div>
							</div>
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
		<script>
			$(".btnStatus").click(function () {
				$(".btnStatus").removeClass("btn-primary").addClass("btn-default");
				$(this).removeClass("btn-default").addClass("btn-primary");   
			});
		</script>
	</body>
</html>