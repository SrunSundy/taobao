<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>My Order | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/myorder.css" />

		
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
							<div>
              <section>
                <div class=" col-md-4">
                    <label>Order Number: </label>
                    <input type="text" value="" id="sycode" />
                </div>
                <div class=" col-md-4">
                    <label>Date Range: </labe>
                    <input type="text" name="datefilter" value="" />
                </div>
                <div class="col-md-4">
                    <button id="search" class="btn btn-sm btn-primary">Search</button>
                </div>
                <br></br>
              </section>
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
    <h3 class="text-center">Your orders</h3>
    <section><!-- start section product -->
    <div class="container">
    <div id="order_display">
							
		</div>
    <div class="col-md-12" style="text-align:center;display:none" id="my_loader">
      <p class="favorite-font" style="z-index:10">Please wait. Loading...</p>
      <img src="<?php echo base_url()?>assets/img/loading.gif" style="    margin-top: -25px;" />
    </div>
      <input type="hidden" id="base_url" value="<?php echo base_url();?>"/>
      </div>
      
    </section><!-- end section product -->
	  <footer>
			<?php include 'include/footer.php' ?>
		</footer>

		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js-view/myorder.js" /> </script>
    <script id="order_result" type="text/x-jQuery-tmpl">
      <div class="row">
        <div class="box">
          <div class="col-sm-12">
              <div class="col-sm-4 "><p><b>ORDER # ${vid}</b>&nbsp;&nbsp;</p> </div>
              <div class="col-sm-4 "><p><b>DATE: ${date}</b></p></div>
              <div class="col-sm-4 "><p><b></b></p></div>
          </div>
          <table  class="table" cellspacing="0" width="100%">
            <tbody> </tbody>
          <thead>
            <tr>
            <th>Color</th><th>Description</th> <th>Size</th><th>Qty</th><th>Price</th><th>Service</th><th>Weight</th><th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr class="info">
              <td data-title="Color"><img style="width:50px; height:50px;" src="${mImage}">&nbsp;</td>
              <td data-title="Product Link"><a href="${mlink}">Product Link</a></td>
              <td data-title="Size">${size}</td>
              <td data-title="Qty">${qty}</td>
              <td data-title="Price">${price}</td>
              <td data-title="Service">${fee}</td>
              <td data-title="Weight">${weight}</td>
              <td data-title="Total">${ytotal}</td>
          
            </tr>
            <tr>
              <th colspan="7" class="text-right"><span style="background:#BDBDBD;padding:5px;color:white" class="pull-right">Estimated Delivery: ${showDeliverDate(deliverDate,synCode,status,arrivall)} </span></th>
            </tr>
          </tbody>						
          </table>
        </div>
      </div><!-- end row-->
      </script>

		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<script>
			$(".btnStatus").click(function () {
				$(".btnStatus").removeClass("btn-primary").addClass("btn-default");
				$(this).removeClass("btn-default").addClass("btn-primary");   
			});
		</script>
		<script type="text/javascript">
    var startDate="";
    var endDate="";
			$(function() {
        $('input[name="datefilter"]').daterangepicker({
            opens: 'left'
          }, function(start, end, label) {
            startDate = start.format('YYYY-MM-DD') 
            endDate = end.format('YYYY-MM-DD')
          });
			});
      $("#search").click(function(){
          if(startDate=="" || endDate=="")
            return 
          var sycode= $("#sycode").val();
          alert(sycode);
          if(sycode=="")
            return
          $("#my_loader").show();
          $("#order_display").children().remove();

          var data = {
            "synCode" : sycode,
            "startdate" : startDate,
            "endDate": endDate
          };
          $("#my_loader").show();
          $.ajax({
                  method : "GET",
                  data : data,
                  url :  $("#base_url").val()+"action/MyOrder/searchOrder",
                  success : function(data){
                    $("#my_loader").hide();
                    if(data.response_code == "200"){
                      if(data.response_data.length <= 0){
                        $("#order_display").html("<p style='text-align:center;font-size: 20px;' class='favorite-font'>No content!</p>");
                      }else{
                        $("#order_result").tmpl(data.response_data).appendTo("#order_display");
                      }  
                    }
                    
                  
                  }
                });
      });
		</script>
	</body>
</html>