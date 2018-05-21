$( document ).ready(function() {
	
	loadNews();
});


function loadNews(){
	
	$("#display_data").hide();
	$("#my_loader").show();
	var data = {
		"news_id": $("#news_id").val(),
		"row" : 4
	};
	
	$.ajax({
		method : "GET",
		data : data,
		url :  $("#base_url").val()+"action/NewsController/get_news",
		success : function(data){
			
			
			if(data.response_code == "200"){
				console.log(data.response_data);
				
				var get = data.response_data;
				
				$("#news-title").html(get.title);
				$("#creator_name").html(get.username);
				$("#created_date").html(dateFormat(get.created_date));
				$("#view_cnt").html(get.view_cnt);
				$("#news-content").html(get.content);
				
				if(data.response_news_data.length <= 0){
					
					$("#news_display").html("<p style='text-align:center;font-size: 20px;' class='favorite-font'>No content!</p>");
				}else{
					
					
					$("#news_display").children().remove();
					$("#news_result").tmpl(data.response_news_data).appendTo("#news_display");
					var bLazy = new Blazy();
				}
				
				$("#display_data").show();
				$("#my_loader").hide();
				
			}
		
		}
	});
}

/*function loadRecommendedLatestNews(){
	
	var data = {
		"row" : 4,
		"news_id": $("#news_id").val()
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
					var bLazy = new Blazy();
				}
			
			}
		
		}
	});
}*/

function dateFormat(date){
	
	if(!date) return date;
	
	var m_names = new Array("January", "February", "March", 
			"April", "May", "June", "July", "August", "September", 
			"Octber", "November", "December");

	date = date.replace(/-/g, '').replace(/\s/g,'');
	
	var year = date.substring(0,4);
	var month = date.substring(4,6);
	var day = date.substring(6,8);
	
	var time = date.substring( 8 , 13);
	return  m_names[parseInt(month)-1] +" "+day + ", " + year+"  &nbsp;"+time;
}