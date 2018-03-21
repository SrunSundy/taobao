
var hasSize = false;
var hasColor = false;

function calculateImageWidth(){
	
	 var win = $(window);
	 
	 if(win.width() <= 450 ){
   	  var myImage = 380 - (450 - win.width());
   	  console.log(myImage);
   	  $("div.box-big-image").width(myImage);
   	  $("div.box-big-image").height(myImage);
     }else{
    	 var bigWrapper = $("div.box-image-display").width();
    	 console.log(bigWrapper);
    	 if(bigWrapper <= 380 ){
    		 
    		 $("div.box-big-image").width(bigWrapper);
          	 $("div.box-big-image").height(bigWrapper);
    	 }else{
    		 $("div.box-big-image").width(376);
          	 $("div.box-big-image").height(376);
    	 }
    	
     }
}
var myTimerSuccess;
$( document ).ready(function() {
	
	calculateImageWidth();
	
	$(window).bind('resize', function(){
		calculateImageWidth();
	});
	$(document).on("click","div.box-small", function(){
		
		
		$("div.box-small").removeClass("active-box-small");
		$(this).addClass("active-box-small");
		
		var showImg = $(this).find("img.small-image").data("real_src");
		var image = new Image();
		image.src = showImg;
		
		if($(this).find("img.small-image").data("big_num") == "0"){
			$("#big_image").removeClass("cls-height").addClass("cls-width").attr("src", showImg+"_80x80.jpg");
		}else{
			$("#big_image").removeClass("cls-width").addClass("cls-height").attr("src", showImg+"_80x80.jpg");
		}
		
		
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
	
	
	$("#add_to_cart").on("click", function(){
		
		
		var itemColor = "";
		
		var colorWithImg = $("div#color_wrapper").find(".box-small-color");
		if(colorWithImg.length > 0){
			
			itemColor = $("div#color_wrapper").find(".active-box-small-color").eq(0).find("img.small-color-image").attr("title");
		}else{
			var colorWithText = $("div#color_wrapper").find(".color-item-active").eq(0).find("span").text();
			itemColor = colorWithText;
		}
		
		var resq_data = {
			"item_photo" : $("div.box-small").eq(0).find("img.small-image").data("real_src"),
			"item_title" : $("p#item_title").text(),
			"item_price" : $("span#item_price").text().replace(/[^0-9.]/g, ''),
			"item_domestic": $("#delivery_fee").val().replace(/[^0-9.]/g, ''),
			"item_size" : $("#size_wrapper").find("div.active-size-item").eq(0).find("span").text(),
			"item_color" : itemColor,
			"item_qty" : $("#item_qty").val().replace(/[^0-9.]/g, ''),
			"item_message" : $("#customer_message").val()
		};
		
		if(!isValidation(resq_data)){
			return;
		}
		
		
		$("#add_to_cart").addClass("disabled");
		$("#add_to_cart").find("i").css("visibility","visible");
		var data = {
			"reqt_data" : resq_data
		};
		
		$.ajax({
			method : "POST",
			url :  $("#base_url").val()+"action/addtocartcontroller/add_to_cart",
			data : data,
			success : function(data){
				clearTimeout(myTimerSuccess);
				$("#messgage_text").show();
				$("#messgage_text").removeClass("bounceOut").addClass("bounceIn");
				myTimerSuccess = setTimeout(function(){
					$("#messgage_text").removeClass("bounceIn").addClass("bounceOut");
					//$("#messgage_text").hide();
					//$("#error_messgage_text").hide();
				}, 2000);
				$("#my_cart_num").html(data.my_cart_num);
				
				$("#add_to_cart").removeClass("disabled");
				$("#add_to_cart").find("i").css("visibility","hidden");
			}
		});
	})
	
	
	
	
});



var myTimer;
function isValidation(resq_data){
	
	
	if(hasSize && !resq_data.item_size){
		clearTimeout(myTimer);
		
		$("#error_messgage_text").html("Please select item's size!");
		$("#error_messgage_text").show();
		$("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
		myTimer = setTimeout(function(){
			$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
			//$("#error_messgage_text").hide();
		}, 2000);
		return false;
	}else if(hasColor && !resq_data.item_color){
		
		clearTimeout(myTimer);
		
		$("#error_messgage_text").html("Please select item's color!");
		$("#error_messgage_text").show();
		$("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
		myTimer = setTimeout(function(){
			$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
			//$("#error_messgage_text").hide();
		}, 2000);
		return false;
	}else{
		return true;
	}
}

loadData();
function loadData(){
	
	$("button.event-btn").addClass("disabled");
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
				var myImage = data.image;
				for(var i=0; i<myImage.length; i++){
					
					
					//0 mean width is bigger
					//1 mean height is bigger
					var bigNum = 0;
					var img = new Image();
					img.src = myImage[i]+"_80x80.jpg";	
					img.onload = function () {
						console.log(this);
						if( this.height > this.width){
							bigNum = 1;
						}
						
						$("img[src='"+$(this).attr("src")+"']").attr("data-big_num",bigNum);
						
						
					}
					
					if(i == 0)
						imageHtml += '<div class="box-small active-box-small">';
					else 
						imageHtml += '<div class="box-small">';
					imageHtml += '	<div class="small-image-thumbnail"> ';
					imageHtml += '		<img class="small-image"  data-real_src="'+myImage[i]+'" src="'+myImage[i]+'_80x80.jpg" />	';
					imageHtml += '	</div>';
					imageHtml += '</div>';
					
					$("#small_image_wrapper").html(imageHtml);
					
					
					
				}
				
				
			}
			
			if(data.size.length > 0){
				
				hasSize = true;
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
			}else{
				hasSize = false;
				$("#size_wrapper").html("<p class='no-information favorite-font'>"+$("#no_size").val()+"</p>");
			}
			
			var colorHtml = "";
			
			if(data.colorImage.length > 0){
				
				hasColor = true;
				var colorImg = data.colorImage;
				for(var i=0; i <colorImg.length; i++){
					
				
					colorHtml += '<div class="box-small-color ">';
					
					var colorTitle = (data.color[i]) ? data.color[i] : "No title";
					colorHtml += '	<div class="box-small-color-thumbnail">';
					colorHtml += '		<img class="small-color-image" data-real_src="'+data.colorImage[i]+'" src="'+data.colorImage[i]+'_80x80.jpg" title="'+colorTitle+'" />';
					colorHtml += '  </div>';
					colorHtml += '</div>';
				}
				
				
			}else{
				if(data.color.length > 0){
					hasColor = true;
					var color =  data.color;				
					for(var i=0; i<color.length; i++){
						
						colorHtml += '<div class="color-item">';
						colorHtml += '<div class="color-item-cover">';
						colorHtml += '	<span class="favorite-font">'+color[i]+'</span>';
						colorHtml += '</div>';
						colorHtml += '</div>';
					}
					
				}else{
					colorHtml +='<p class="no-information favorite-font" >'+$("#no_color").val()+'</p>';
				}
			}
			
			$("#color_wrapper").html(colorHtml);
			
			
			$("button.event-btn").removeClass("disabled");
		}
		
	});
}
