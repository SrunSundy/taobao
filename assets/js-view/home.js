$( document ).ready(function() {
	
	loadData();
	
	$("#scrape_data").on("click", function(){
		
		$("#scrape_url").submit();
	});
});

function loadData(){
	
	$.ajax({
		method : "GET",
		url :  $("#base_url").val()+"action/PortFolioController/list_portfolio",
		success : function(data){
			
			console.log(data);
		}
	});
}