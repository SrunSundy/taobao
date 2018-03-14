

$( document ).ready(function() {
  
	$(document).on("click","div.box-small", function(){
		
		
		$("div.box-small").removeClass("active-box-small");
		$(this).addClass("active-box-small");
		
		var showImg = $(this).find("img.small-image").data("real_src");
		var image = new Image();
		image.src = showImg;	
		$("#big_image").attr("src", showImg+"_20x20.jpg");
		image.onload = function () {
			$("#big_image").attr("src", showImg);
		}
		
		
	});
	
	$(document).on("click","div.size-item", function(){
		$("div.size-item").removeClass("active-size-item");
		$(this).addClass("active-size-item");
	});
	
	$(document).on("click","div.box-small-color", function(){
		$("div.box-small-color").removeClass("active-box-small-color");
		$(this).addClass("active-box-small-color");
	});
	
	$(document).on("click","div.color-item", function(){
		$("div.color-item").removeClass("color-item-active");
		$(this).addClass("color-item-active");
	});
	
	
});

loadData();

function loadData(){
	
	$.ajax({
		method : "GET",
		url : $("#base_url").val()+"action/scrapedatacontroller/scrape_data_by_url",
		data : {
			url : $("#scrape_url").val()
		},
		success : function(data){
			
			$(".product-title").html(data.title);
			$(".price_amount").html(data.price);
			
			if(data.image.length > 0){
				$("#big_image").attr("src", data.image[0]);
				
				var imageHtml = "";
				var image = data.image;
				for(var i=0; i<image.length; i++){
					if(i == 0)
						imageHtml += '<div class="box-small active-box-small">';
					else 
						imageHtml += '<div class="box-small">';
					imageHtml += '	<div class="small-image-thumbnail"> ';
					imageHtml += '		<img class="small-image" data-real_src="'+image[i]+'" src="'+image[i]+'_80x80.jpg" />	';
					imageHtml += '	</div>';
					imageHtml += '</div>';
				}
				
				$("#small_image_wrapper").html(imageHtml);
			}
			
			if(data.size.length > 0){
				
				var sizeHtml = "";
				var size = data.size;
				for(var i=0; i<size.length; i++){
				
					sizeHtml += '<div class="size-item">';
					sizeHtml += '<div class="size-item-cover">';
					sizeHtml += '	<span class="favorite-font">'+size[i]+'</span>';
					sizeHtml += '</div>';
					sizeHtml += '</div>';
					
				}
				
				$("#size_wrapper").html(sizeHtml);
			}
			
			var colorHtml = "";
			
			if(data.colorImage.length > 0){
				
				var colorImg = data.colorImage;
				for(var i=0; i <colorImg.length; i++){
					
				
					colorHtml += '<div class="box-small-color ">';
					
					var colorTitle = (data.color[i]) ? data.color[i] : "No title";
					colorHtml += '	<div class="box-small-color-thumbnail">';
					colorHtml += '		<img class="small-color-image" data-real_src="'+data.colorImage[i]+'" src="'+data.colorImage[i]+'_60x60.jpg" title="'+colorTitle+'" />';
					colorHtml += '  </div>';
					colorHtml += '</div>';
				}
				
				
			}else{
				if(data.color.length > 0){
					var color =  data.color;				
					for(var i=0; i<color.length; i++){
						
						colorHtml += '<div class="color-item">';
						colorHtml += '<div class="color-item-cover">';
						colorHtml += '	<span class="favorite-font">'+color[i]+'</span>';
						colorHtml += '</div>';
						colorHtml += '</div>';
					}
					
				}
			}
			
			$("#color_wrapper").html(colorHtml);
			
			
			
		}
		
	});
}
