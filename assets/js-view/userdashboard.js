$( document ).ready(function() {
	
	loadRecommendedLatestNews();


	getMyOrder();
	
	$("ul.list-order-menu li a").on("click", function(){
		
		$("#my-order-count-loading").show();
		$("#my-order-count").hide();
		
		$("ul.list-order-menu li a").removeClass("my_order_active");
		$(this).addClass("my_order_active");
		var cnt = $(this).data("cnt");
		$("#my-order-count").html(cnt);
		
		setTimeout(function(){
			$("#my-order-count-loading").hide();
			$("#my-order-count").show();
		},200);
		
	});
	
});


function getMyOrder(){
	
	$("#my_loader").show();
	$("#display_content").hide();
	$.ajax({
		method : "GET",
		url :  $("#base_url").val()+"action/MyOrder/get_order_detail",
		success : function(data){
			
			
			if(data.response_code == "200"){
				
				$("#my_loader").hide();
				$("#display_content").show();
				var dat = data.response_data;
				
				$("#my_order_cnt").data("cnt", dat.allOrder);
				$("#awaiting_delivery_cnt").data("cnt", dat.waitingArrival);
				$("#out_stock_cnt").data("cnt", dat.outstock);
				$("#delivered_cnt").data("cnt", dat.delivery);
				$("#my-order-count").html(dat.allOrder);
				$("#my_balance_amount").html(getLastTwoDot(dat.my_balance));
				$("#awaiting_payment_amount").html(getLastTwoDot(dat.awaiting_payment));
				
				var total = parseFloat(dat.my_balance) - parseFloat(dat.awaiting_payment);
				$("#total_amount").html(getLastTwoDot(total));
			}
		
		}
	});
}


function getLastTwoDot(val){
	
	if(!val) return val;
	
	return parseFloat(val).toFixed(2);
}


function loadRecommendedLatestNews(){
	
	var data = {
		"row" : 5
	};
	
	$.ajax({
		method : "GET",
		data : data,
		url :  $("#base_url").val()+"action/NewsController/list_recommended_latest_news",
		success : function(data){
			
			
			if(data.response_code == "200"){
				console.log(data.response_data);
				
				if(data.response_data.length <= 0){
					
					$("#news_display").html("<p style='text-align:center;font-size: 20px;' class='favorite-font'>No content!</p>");
				}else{
					
					
					$("#news_display").children().remove();
					$("#news_result").tmpl(data.response_data).appendTo("#news_display");
					
				}
			
			}
		
		}
	});
}

function formatDate(date){
	if(!date) return date;
	
	return date.substring(0,10);
}