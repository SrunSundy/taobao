$( document ).ready(function() {
	
	loadData();
	
	$("#scrape_data").on("click", function(){
		
		$("#scrape_url").submit();
	});
});

function loadData(){
	
	var data = {
		"row" : "8",
		"page" : "1",
		"sort_type": "0"
	};
	
	$.ajax({
		method : "GET",
		data : data,
		url :  $("#base_url").val()+"action/PortFolioController/list_portfolio",
		success : function(data){
			
			
			if(data.response_code == "200"){
				console.log(data.response_data);
				$("#portfolio_result").tmpl(data.response_data).appendTo("#portfolio_display");
			}
		
		}
	});
}