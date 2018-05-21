<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>News | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/newsdetail.css" />
	</head>


	<body>
	
		<input type="hidden" value="<?php echo base_url();  ?>" id="base_url" />
		<input type="hidden" value="<?php echo $news_id;  ?>" id="news_id" />
		
		<?php include 'include/loader.php' ?>
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<header>
			<?php include 'include/headermenu.php' ?>
		</header> <!-- end header -->

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<div class="ruler-style">
		</div>
	
	
	
		<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding" style="padding-top: 50px;">
			<div class="container">
				<div class="row">
				
					<div id="display_data" style="display: none">
						<div class="col-md-8" style="padding-bottom: 20px;">
							
							<p class="favorite-font news_title" id="news-title">
								
							</p>
							<div class="news_info">
								<p class="favorite-font news_creating_info" style="float:left;">
									By <span id="creator_name"></span>
									- <span id="created_date"></span>
								</p>
								
								<p class="favorite-font news_detail"  style="float:right;margin-right: 10px;">
									<i class="fa fa-eye"></i>
									<span style="margin-left: 5px;" id="view_cnt"></span>
								</p>
								
								<div style="clear:both;"></div>
							</div>
							
							<div class="favorite-font news_content" id="news-content">
								
							</div>
							
						</div>
						<div class="col-md-4">
							
							<div class="my-box-header">
								<div class="text-header-wrapper">
									<p class="favorite-font"  style="font-size: 18px;"  ><?php echo $this->lang->line('home_latestnews'); ?></p>
								</div>
								
								<div class="liner"></div>
							</div>
							
							<div id="news_display" style="    overflow: hidden;" >
								
							</div>
							
							<div class="my-box-header" style="margin-top: 20px;">
								<div class="text-header-wrapper">
									<p class="favorite-font"  style="font-size: 18px;"  >Follow us</p>
								</div>
								
								<div class="liner"></div>
							</div>
							
							<div class="follow-us-wrapper">
							
								<div onclick="location.href=''" class="td-social-box" style="background:#417096; cursor:pointer;">
									
									<div class="social-logo"><i class="fa fa-instagram"></i></div>
									<span class="td_social_info favorite-font-amaranth txt">Instagram</span>
									<span class="td_social_info td_social_button" style="float:right;margin-top: 4px;margin-right:10px;">
										<a class="td_social_info" href="http://instagram.com/mediaawarekh#">>></a>
									</span>
								</div>
								
								<div onclick="location.href=''" class="td-social-box" style="background:#516eab; cursor:pointer;">
									
									<div class="social-logo" style="padding-left: 14px;padding-right: 14px;"><i class="fa fa-facebook"></i></div>
									<span class="td_social_info favorite-font-amaranth txt">Facebook</span>
									<span class="td_social_info td_social_button" style="float:right;margin-top: 4px;margin-right:10px;">
										<a class="td_social_info" href="http://instagram.com/mediaawarekh#">>></a>
									</span>
								</div>
								
								<div onclick="location.href=''" class="td-social-box" style="background:#29c5f6; cursor:pointer;">
									
									<div class="social-logo"><i class="fa fa-twitter"></i></div>
									<span class="td_social_info favorite-font-amaranth txt">Twitter</span>
									<span class="td_social_info td_social_button" style="float:right;margin-top: 4px;margin-right:10px;">
										<a class="td_social_info" href="http://instagram.com/mediaawarekh#">>></a>
									</span>
								</div>
								
								<div onclick="location.href=''" class="td-social-box" style="background:#e14e42; cursor:pointer;">
									
									<div class="social-logo"><i class="fa fa-youtube"></i></div>
									<span class="td_social_info favorite-font-amaranth txt">Youtube</span>
									<span class="td_social_info td_social_button" style="float:right;margin-top: 4px;margin-right:10px;">
										<a class="td_social_info" href="http://instagram.com/mediaawarekh#">>></a>
									</span>
								</div>
								
								<div onclick="location.href=''" class="td-social-box" style="background:#00b900; cursor:pointer;">
									
									<div class="social-logo"><i class="fa fa-whatsapp"></i></div>
									<span class="td_social_info favorite-font-amaranth txt">Whatsapp</span>
									<span class="td_social_info td_social_button" style="float:right;margin-top: 4px;margin-right:10px;">
										<a class="td_social_info" href="http://instagram.com/mediaawarekh#">>></a>
									</span>
								</div>
								
								<div onclick="location.href=''" class="td-social-box" style="background:#0077b5; cursor:pointer;">
									
									<div class="social-logo"><i class="fa fa-linkedin"></i></div>
									<span class="td_social_info favorite-font-amaranth txt">LinkedIn</span>
									<span class="td_social_info td_social_button" style="float:right;margin-top: 4px;margin-right:10px;">
										<a class="td_social_info" href="http://instagram.com/mediaawarekh#">>></a>
									</span>
								</div>
							
							</div>
							
						</div>
					</div>
					
					<div class="col-md-12" style="text-align:center;display:none" id="my_loader">
						<p class="favorite-font" style="z-index:10">Please wait. Loading...</p>
						<img src="<?php echo base_url()?>assets/img/loading.gif" style="    margin-top: -25px;" />
					</div>
					
					
					
				</div>
			</div>
		</section><!-- end accordian section -->
	
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	     <footer>
			<?php include 'include/footer.php' ?>
		</footer>

		

		<!-- main jQuery -->
		<?php include 'include/imscript.php' ?>
		<script src="<?php echo base_url();?>assets/js-view/newsdetail.js"></script>
		<script src="<?php echo base_url();?>assets/plugin/blazy/blazy.min.js"></script>
		
		<script id="news_result" type="text/x-jQuery-tmpl">
			<div class="news-wrapper col-md-12" style="cursor:pointer">
				<div class="row">
									
					<div class="thumnail-image col-md-4 col-xs-4"  onclick="location.href='news_detail?news_id={{= news_id}}'" style="position:relative;">
						<div class="row">
							<img  class="b-lazy"
									 src="<?php echo base_url();?>assets/img/load_stuck.png"
									 data-src="<?php echo FILE_PATH; ?>taobao/news/small/{{= thum_photo }}"/>
							
							{{if news_format == "1"}}	
							<div class="news-format" style="position:absolute;top:0;left:0;width:100%;height: 100%;background:black;opacity:0.1;"></div>
							<div class="news-format" style="position:absolute;top:0;left:0;width:100%;height: 100%;text-align:center;">
								<img src="<?php echo base_url();?>assets/img/play.png" style="width: 30px;height:30px;margin-top: 25px;" />
							</div>
							{{/if}}
						</div>
									
					</div>
									
					<div  class="col-md-8 col-xs-8" style="">
						<div class="row" style="padding-left: 10px;">
							<p class="favorite-font news_title_small">{{= title }}</p>
							<p class="favorite-font news_created_date" style="color:#a9a9a9;font-size:12px;margin-top:5px;    margin-bottom: 0;" id="news_small_created_date">{{= dateFormat(created_date) }}</p>
						</div>
										
					</div>
					<div style="clear:both;"></div>	
				</div>
			</div>
   		</script>
	</body>
</html>