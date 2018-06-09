
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
	
	$('.edit-input-price').on("click", function(){
		
		$(".input-price-wrapper").show();
		$(".product-price").hide();
	});
	
	$('.my-price-show').on({
	  "click": function() {
	    $(this).tooltip({ items: ".my-price-show", content: "Price = [(Price * Unit) + express fee]/ Unit"});
	    $(this).tooltip("open");
	  }
	});
	
	$(".item_price_input").on("keyup", function(event){
		 
		var myVal = $(this).val();
		myVal =myVal.replace(/[^\d\.]/g, "")
		  .replace(/\./, "x")
		  .replace(/\./g, "")
		  .replace(/x/, ".")
		  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		
		$(".item_price_input").val(myVal);
	});
	
	
	$("#delivery_fee").on("keyup", function(event){
		 
		var myVal = $(this).val();
		myVal =myVal.replace(/[^\d\.]/g, "")
		  .replace(/\./, "x")
		  .replace(/\./g, "")
		  .replace(/x/, ".")
		  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		
		$(this).val(myVal);
	});
	
	
	$(".item_price_input").on("blur", function(){
		
		var myPrice = $(this).val();
		if(!myPrice)myPrice = 0;
		var toDollar = parseFloat(myPrice.replace(/,/g, ''))/ 6.3;
		$(".dollar-product-price").html(toDollar.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
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
		
		var showImg = $(this).find("img.small-color-image").data("real_src");
		
		var image = new Image();
		image.src = showImg;
		
		if($(this).find("img.small-color-image").data("big_num") == "0"){
			$("#big_image").removeClass("cls-height").addClass("cls-width").attr("src", showImg+"_80x80.jpg");
		}else{
			$("#big_image").removeClass("cls-width").addClass("cls-height").attr("src", showImg+"_80x80.jpg");
		}
		
		
		image.onload = function () {
			$("#big_image").attr("src", showImg);
		}
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
		
		var itemPrice = $("span#item_price").text().replace(/[^0-9.]/g, '');
		if($(".input-price-wrapper").is(":visible")){
			itemPrice = $("input#item_price_input").val().replace(/[^0-9.]/g, '');
		}
		
		var itemPriceDollar = $("#dollar-product-price").text().replace(/[^0-9.]/g, '');
		
	//	var url = new URL($("#scrape_url").val());
		var itemId =$("#scrape_item_id").val();
		
		
		var itemQty = parseInt($("#item_qty").val().replace(/[^0-9.]/g, ''));
		/*var itemInfo = [];
		
		for(var i=0; i<itemQty; i++){
			itemInfo.push({
				"size" : $("#size_wrapper").find("div.active-size-item").eq(0).find("span").text(),
				"color" : itemColor
			});
		}*/
		
		var itemPhoto =  $("div.box-small").eq(0).find("img.small-image").data("real_src");
		
		if($("div#color_wrapper").find(".active-box-small-color").length > 0){
			
			itemPhoto = $("div#color_wrapper").find(".active-box-small-color").find("img.small-color-image").data("real_src");
		}
		
		var resq_data = {
			"item_id" : itemId,
			"item_url" : $("#scrape_url").val(),
			"item_photo" : itemPhoto,
			"item_title" : $("p#item_title").text(),
			"item_price" : itemPrice,
			"item_price_dollar" : itemPriceDollar,
			"item_domestic": $("#delivery_fee").val().replace(/[^0-9.]/g, ''),		
			"item_qty" : $("#item_qty").val().replace(/[^0-9.]/g, ''),
			"item_size" :  $("#size_wrapper").find("div.active-size-item").eq(0).find("span").text(),
			"item_color" : itemColor,
			"item_message" : $("#customer_message").val()
		};
		
		/*var validateData = {
			"item_size" : $("#size_wrapper").find("div.active-size-item").eq(0).find("span").text(),
			"item_color" : itemColor
		}*/
		
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
			url :  $("#base_url").val()+"action/AddToCartController/add_to_cart",
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
				$("#my_cart_num").html("("+data.my_cart_num+")");
				
				$("#add_to_cart").removeClass("disabled");
				$("#add_to_cart").find("i").css("visibility","hidden");
				location.href = "my_cart";
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
	
	$("#my_loader").show();
	$("#all_content").css("visibility", "hidden");
	$("button.event-btn").addClass("disabled");
	$("#image-detail").html("<div class='col-md-12 row' style='text-align:center'><img src='"+$("#base_url").val()+"assets/img/loading.gif' /></div>");
	$.ajax({
		method : "GET",
		url : $("#base_url").val()+"action/ScrapeDataController/scrape_data_by_url",
		data : {
			url : $("#scrape_url").val()
		},
		success : function(data){
			
			
			if(data.status == "410"){
				
				alert("Data isn't available at the moment!");
				//return;
			}
			
			$(".product-title").html(data.title);
			$("#scrape_item_id").val(data.id);
			
			if(data.express_fee){
				$("#delivery_fee").val(data.express_fee);
			}
			
			if(data.price){
				$(".item_price_input").val(data.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
				var toDollar = parseFloat(data.price)/ 6;
				$(".dollar-product-price").html(toDollar.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
				$(".price_amount").html(data.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
			}else{
				$(".price_amount").html("0");
			}
			
			
			if(data.image.length > 0){
				
				var bigImage = new Image();
				bigImage.src = data.image[0];
				
				bigImage.onload = function () {					
					$("#big_image").attr("src", data.image[0]);
					$("#my_loader").hide();
					$("#all_content").css("visibility", "visible");
				}
				
				var imageHtml = "";
				var myImage = data.image;
				for(var i=0; i<myImage.length; i++){
					
					
					//0 mean width is bigger
					//1 mean height is bigger
					var bigNum = 0;
					var img = new Image();
					img.src = myImage[i]+"_80x80.jpg";	
					img.onload = function () {
						
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
				
				
			}else{
				$(".small-image-thumbnail img.small-image").attr("src",$("#base_url").val()+"assets/img/default.jpg");
				$("#big_image").attr("src", $("#base_url").val()+"assets/img/default.jpg");
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
				$("#size_wrapper").parents(".box-size").hide();
				//$("#size_wrapper").html("<p class='no-information favorite-font'>"+$("#no_size").val()+"</p>");
			}
			
			var colorHtml = "";
			
			if(data.colorImage.length > 0){
				
				hasColor = true;
				var colorImg = data.colorImage;
				for(var i=0; i <colorImg.length; i++){
					
				
					colorHtml += '<div class="box-small-color ">';
					
					//0 mean width is bigger
					//1 mean height is bigger
					var bigNum = 0;
					var img = new Image();
					img.src = colorImg[i]+"_80x80.jpg";	
					img.onload = function () {
						console.log(this);
						if( this.height > this.width){
							bigNum = 1;
						}
						
						$("img[src='"+$(this).attr("src")+"']").attr("data-big_num",bigNum);
						
						
					}
					
					var colorTitle = (data.color[i]) ? data.color[i] : "No title";
					colorHtml += '	<div class="box-small-color-thumbnail">';
					colorHtml += '		<img class="small-color-image" data-real_src="'+colorImg[i]+'" src="'+colorImg[i]+'_80x80.jpg" title="'+colorTitle+'" />';
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
					$("#color_wrapper").parents(".box-color").hide();
				}
			}
			
			
			
			if(data.image_detail){
				
				var myImage = "";
				var d_image = data.image_detail;
				for(var i=0; i<d_image.length; i++){
					myImage += "<div class='col-md-12  row' style='text-align:center'><img    src='"+d_image[i]+"' /></div>";
				}
				
				$("#image-detail").html(myImage);
			}else{
				$("#image-detail").html("");
			}
			
			
			
			$("#color_wrapper").html(colorHtml);
			
			
			$("button.event-btn").removeClass("disabled");
		}
		
	});
}
