<!DOCTYPE html>
<html lang="en">
	<head>
		

		<title>News | taobao outlet</title>
		<?php include 'include/imstyle.php'?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css-customize/listnews.css" />
	</head>


	<body>
	    <input type="hidden" value="<?php echo base_url();  ?>" id="base_url" />
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
				
					<div class="my-box-header">
						<div class="text-header-wrapper">
							<p class="favorite-font" ><?php echo $this->lang->line('home_latestnews'); ?></p>
						</div>
						
						<div class="liner"></div>
					</div>
					
					<div class="news-wrapper" style="margin-top: 35px;">
						<div class="col-md-12" style="text-align:center;display:none" id="my_loader">
							<p class="favorite-font" style="z-index:10">Please wait. Loading...</p>
							<img src="<?php echo base_url()?>assets/img/loading.gif" style="    margin-top: -25px;" />
						</div>
						
						<div id="news_display">
						</div>
					</div>
					
					<div style="clear:both;"></div>
					<div id="pagi-display" class="pagination-display favorite-font" style="padding-left:20px; float:right;padding-right:10px;">	     
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
		<script src="<?php echo base_url();?>assets/js-view/listnews.js"></script>
		<script src="<?php echo base_url();?>assets/plugin/blazy/blazy.min.js"></script>
		 
		<script id="news_result" type="text/x-jQuery-tmpl">
			<div class="col-md-3 col-sm-6 col-xs-12  news-box"  >
				<div class="row">
					<div class="gap-divider">
						<div class="image-thumbnail" onclick="location.href='news_detail?news_id={{= news_id}}'" style="position:relative;cursor:pointer;">
							<img class="b-lazy"
									 src="<?php echo base_url();?>assets/img/load_stuck.png"
									 data-src="<?php echo FILE_PATH; ?>taobao/news/small/{{= thum_photo }}" />
							
							{{if news_format == "1"}}
							<div class="news-format" style="position:absolute;top:0;left:0;width:100%;height: 100%;background:black;opacity:0.1;"></div>
							<div class="news-format" style="position:absolute;top:0;left:0;width:100%;height: 100%;text-align:center;">
								<img src="<?php echo base_url();?>assets/img/play.png" style="width: 60px;height:60px;margin-top: 50px;" />
							</div>
        					{{/if}}
						</div>
						<div style="height: 140px;overflow:hidden">
							<p class="news-title favorite-font " style=" word-wrap: break-word;" >{{= title }}</p>
        					<p class="news-des favorite-font" style=" word-wrap: break-word;">{{= subString(content, 100)}}</p>
						</div>
        				
        				<a class="news-read-more favorite-font" href="news_detail?news_id={{= news_id}}">read more...</a>
					</div>								
				</div>
			</div>
   		</script>	
	</body>
</html>