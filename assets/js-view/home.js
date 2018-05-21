$( document ).ready(function() {
	
	loadData();
	
	$("#scrape_data").on("click", function(){
		
		$("#scrape_url").submit();
	});
});

function loadData(){
	
	loadPortfolio();
	loadNews();
	
}

function loadPortfolio(){
	
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
				
				if(data.response_data.length <= 0){
					$("#portfolio_display").html("<p style='text-align:center;font-size: 20px;' class='favorite-font'>No content!</p>");
				}else{
					$("#portfolio_display").children().remove();
					$("#portfolio_result").tmpl(data.response_data).appendTo("#portfolio_display");
					// Porfolio - uses the magnific popup jQuery plugin
					 var bLazy = new Blazy();
					  $('.portfolio-popup').magnificPopup({
					    type: 'image',
					    removalDelay: 300,
					    mainClass: 'mfp-fade',
					    gallery: {
					      enabled: true
					    },
					    zoom: {
					      enabled: true,
					      duration: 300,
					      easing: 'ease-in-out',
					      opener: function(openerElement) {
					        return openerElement.is('img') ? openerElement : openerElement.find('img');
					      }
					    }
					  });
				}
				
			}
		
		}
	});
	
}

function loadNews(){
	
	var data = {
		"row" : "4",
		"page" : "1",
		"sort_type": "0"
	};
	
	$.ajax({
		method : "GET",
		data : data,
		url :  $("#base_url").val()+"action/NewsController/list_news",
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

function subString(text, length){
	
	if(!text) return text;
	return text.substring(0,length)+"...";
}