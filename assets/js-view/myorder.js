
var endpoint="allOrder";
var track_page = 1; //track user scroll as page number, right now page number is 1
var loading  = false; //prevents multiple loads
var total_page=0;
loadData();

$("#allOrder").click(function(){
   $("#order_display").children().remove();
   	endpoint="allOrder";
	track_page = 1; //track user scroll as page number, right now page number is 1
	loading  = false; //prevents multiple loads
	total_page=0;
	loadData();
});
$("#outStock").click(function(){
   $("#order_display").children().remove();
   	endpoint="getOutStockLimit";
	track_page = 1; //track user scroll as page number, right now page number is 1
	loading  = false; //prevents multiple loads
	total_page=0;
	loadData();
});
$("#sucDeliver").click(function(){
   $("#order_display").children().remove();
   	endpoint="listDeliverLimit";
	track_page = 1; //track user scroll as page number, right now page number is 1
	loading  = false; //prevents multiple loads
	total_page=0;
	loadData();
});
$("#awaitDeliver").click(function(){
   $("#order_display").children().remove();
   	endpoint="awaitDeliver";
	track_page = 1; //track user scroll as page number, right now page number is 1
	loading  = false; //prevents multiple loads
	total_page=0;
	loadData();
});

 $(window).scroll(function(event){
	
	var windowHeight = "innerHeight" in window ? window.innerHeight: document.documentElement.offsetHeight;
	var body = document.body, html = document.documentElement;
	var docHeight = Math.max(body.scrollHeight,body.offsetHeight, html.clientHeight,html.scrollHeight, html.offsetHeight);
	windowBottom = windowHeight + window.pageYOffset;

	if (windowBottom >= docHeight-200) {
         loadData();
	}

});
function loadData(){
	console.log(total_page)
	
	//$("#order_display").children().remove();

	var data = {
		"row" : "3",
		"page" : track_page,
		"sort_type": "0",
		"endpoint":endpoint
	};
	if(total_page>0){
		if(track_page>total_page){

		$("#my_loader").hide();
    	return
   		 }
	}
  
    if(loading===false){
    	$("#my_loader").show();
    	loading = true; 
    	$.ajax({
		method : "GET",
		data : data,
		url :  $("#base_url").val()+"action/MyOrder/listOrder",
		success : function(data){;
			if(data.response_code == "200"){
				$("#my_loader").hide();
				if(data.response_data.length <= 0){
					$("#order_display").html("<p style='text-align:center;font-size: 20px;' class='favorite-font'>No content!</p>");
				}else{
					$("#order_result").tmpl(data.response_data).appendTo("#order_display");
				}
				
				loading = false; 
				total_page=data.total_page
                if(total_page<=track_page){
                	loading = true; 
     
                   //$("#order_display").append("<p style='text-align:center;font-size: 20px;' class='favorite-font'>No content!</p>");
                	return

                }
		     	track_page++;
				  
			}
			
		
		}
	});

    }
	
}

function showDeliverDate(dev,syncode,status,arrivall){
		if(dev=="0000-00-00"){
			if(syncode==""){
				return "&nbsp;&nbsp;&nbsp;Pending";
			}else{
				if(status==4){
					return "OUTSTOCK";
				}else{
					return "&nbsp;&nbsp;&nbsp;Pending("+syncode+")";
				}
				
			}
		
		}else{
			return dev+"("+check_arrive(syncode,arrivall)+")";
		}
	
}
function check_arrive(syncode,arrivall){
	 if(arrivall==1)
		return 'Arrival '+syncode;
	if(arrivall==2)
	    return 'Delivered '+syncode;
	return syncode;
  }