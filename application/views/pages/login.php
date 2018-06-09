<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>Login | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/login.css" />
	</head>


	<body>
		<?php include 'include/loader.php' ?>
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
			
		</header> <!-- end header -->

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
	
	
		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding" style="padding-top:0" >
			<div class="col-md-12" style='background: url("<?php echo base_url();?>assets/img/slider-bg/4.jpg") no-repeat ; max-height: 630px;background-size:cover;height:630px;'>
				<div class="row">
				
				<div class="bg-on"></div>
				<div class="col-md-12">
						<div class="row">			
										<div class="col-md-4"></div>
										<div class="col-md-4"></div>
										<div class="col-md-3">
											<div class="row">
												
												<div class="login-wrapper" class="favorite-font">
													<span class="favorite-font login-header">Sign In</span>
													<p class="favorite-font login-header-detail">
														Your Taobaooutlets Account
													</p>
													
													
	                                               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top: 35px;">
												      <div class="input-group-addon" style="color:#b5b5b5;background:white; ">
												      	<i style="padding: 0 10px;" class="fa fa-user"></i>
												      </div>
												      <input type="text" class="form-control" id="" style="height:40px" placeholder="Username">
												  </div>
												  
												   <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top: 15px;">
												      <div class="input-group-addon" style="color:#b5b5b5;background:white; ">
												      	<i style="padding: 0 8px;" class="fa fa-key"></i>
												      </div>
												      <input type="text" class="form-control" id="" style="height:40px" placeholder="Password">
												  </div>
												  
												  <div class="col-md-12">
												  	<div class="row">
												  	
												  		<div class="col-md-8">
												  			<div class="row">
												  			<label class="checkbox-inline favorite-font" style="margin-top:27px;font-size: 14px;"><input type="checkbox" value="">Remember me</label>
												  			</div>
												  		</div>
												  		<div class="col-md-4">
												  			<div class="row">
												  			 <button type="submit" class="btn btn-primary" style="margin-top:20px; padding: 10px 20px;letter-spacing:0;text-transform:none;float:right;background:#990F0E;">Sign in</button>						                                                
												  			</div>
												  		</div>
												  		
												  		<div style="clear:both;"></div>
												  	</div>
												  </div>
												  
												  
												  
												  <div class="col-md-12" style="position:relative; margin: 30px 0px 20px 0;">
												  	<div class="row">
												  		<div style="border-bottom: 1px solid #ececec;"></div>
												  		<div style="position:absolute;top: -13px; width: 100%;text-align: center;">
												  			<span class="favorite-font" style="color: #b3b3b3;background: white;padding: 0 20px;">or</span>
												  		</div>
												  	</div>
												  </div>
												  
												 <!--  <form method="post" action="<?php echo base_url();  ?>action/FacebookController/fb_login" >
												  	<button type="submit" class="btn btn-primary" style='margin-top:20px; padding: 10px 20px;letter-spacing:0;text-transform:none;float:right;background:#990F0E;'>Facebook Login</button>						  
												  </form> -->
												  
												  <div class="col-md-12" style="position:relative;text-align:center">
<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'chhoun/taobao/application/libraries/Facebook/autoload.php';
	$redirect_url='http://localhost';
	$facebook = new Facebook\Facebook([
				'app_id' => fb_appId,
				'app_secret' => fb_appSecret,
				'default_graph_version' => 'v2.10',
				]);
$helper = $facebook->getRedirectLoginHelper();
$login_url = fb_login_redirect;

echo "<a href=".$helper->getReRequestUrl($login_url)."  class='btn' style='margin-top:20px; padding: 10px 20px;letter-spacing:0;text-transform:none;background:#4267b2;' id='moreappdiv'><i class='fa fa-facebook' style='padding-right: 10px;'></i>Login with facebook</a>";
	?>											</div>
	 
                                                
												</div>
												
												 
												
											</div>
										</div>
										<div class="col-md-1"></div>
									
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
		 <script src="<?php echo base_url();?>assets/js-view/help.js"></script>
	</body>
</html>