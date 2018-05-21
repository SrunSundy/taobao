$( document ).ready(function() {
	
	loadRecommendedLatestNews();

	
	
});


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