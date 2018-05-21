
var page = 1;
$( document ).ready(function() {
	
	loadData();
	
	$('#pagi-display').on("page", function(event, num){
		  page = num;
		  loadData();
	});
});

function loadData(){
	
	loadNews();
	
}


function subString(text, length){
	
	if(!text) return text;
	return text.substring(0,length)+"...";
}

function loadNews(){
	
	$("#my_loader").show();
	var data = {
		"row" : "4",
		"page" : page,
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
					
					 var totalPage = (data.total_page) ? data.total_page :  1 ;
					  
					 var bLazy = new Blazy();
					  $('#pagi-display').bootpag({
			    			total : totalPage, 
			    			maxVisible: 5, 
			    			leaps: true,
		    		        firstLastUse: true,
		    		        first: '&#8592;',
		    		        last: '&#8594;',
		    		        wrapClass: 'pagination',
		    		        activeClass: 'active',
		    		        disabledClass: 'disabled',
		    		        nextClass: 'next',
		    		        prevClass: 'prev',
		    		        lastClass: 'last',
		    		        firstClass: 'first'
			    	  });
				}
				
				$("#my_loader").hide();
			
			}
		
		}
	});
}