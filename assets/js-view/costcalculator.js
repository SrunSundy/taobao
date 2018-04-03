$( document ).ready(function() {
  
	$("#calculate_cost").on("click", function(){
		
		$(".image-wrapper").hide();
		$(".display-result").hide();
		$(".display-loading").show();
		
		setTimeout(function(){
			var itemPrice = $("#item_price").val() ;
			var itemWeight = $("#item_weight").val();
			
			var length = $("#item_length").val();
			var width = $("#item_width").val();
			var height = $("#item_height").val();
			
			
			if(!itemPrice) {			
				$(".item_price_lbl").css("visibility","visible");
				return;
			}else{
				$(".item_price_lbl").css("visibility","hidden");
			}
			
			if(!itemWeight){
				
				$(".item_weight_lbl").css("visibility","visible");
				return;
			}else{
				$(".item_weight_lbl").css("visibility","hidden");
			}
			
			
			if(!length) length = 0;
			if(!width) width = 0;
			if(!height) height = 0;
			
			var dimension = (length * width * height);
			
			if(dimension < 0.5){
				dimension = 0;
			}
			
			
			itemPrice = itemPrice / 6;
			itemServicePrice = (itemWeight * 3) + (dimension*200);
			var totalAmount = itemPrice + itemServicePrice;
			
			$("#item_price_result").html(itemPrice.toFixed(2));
			
			$("#item_service_result").html(itemServicePrice.toFixed(2));
			
			$("#total_price_result").html(totalAmount.toFixed(2));
			$(".display-loading").hide();
			
			$(".display-result").show();
			
			
		} ,300);
		
		
		
	});
	
	$("#item_price").on("keyup", function(){
		keyUpNumberInput(this);
	});
	
	$("#item_weight").on("keyup", function(){
		keyUpNumberInput(this);
	});
	
	$("#item_length").on("keyup", function(){
		keyUpNumberInput(this);
	});
	 
	$("#item_width").on("keyup", function(){
		keyUpNumberInput(this);
	});
	
	$("#item_height").on("keyup", function(){
		keyUpNumberInput(this);
	});
	
	
});

function keyUpNumberInput(object){
	
	var myVal = $(object).val();
	myVal =myVal.replace(/[^\d\.]/g, "")
	  .replace(/\./, "x")
	  .replace(/\./g, "")
	  .replace(/x/, ".");
	
	$(object).val(myVal);
}