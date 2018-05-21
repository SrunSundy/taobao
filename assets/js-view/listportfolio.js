
var page = 1; 

$( document ).ready(function() {
	loadData();
	
	$('#pagi-display').on("page", function(event, num){
		  page = num;
		  loadData();
	});
	
});


function loadData(){
	
	//$("#loading_default").show();
	$("#my_loader").show();
	$("#portfolio_display").children().remove();
	
	var data = {
		"row" : "12",
		"page" : page,
		"sort_type": "0"
	};
	
	$.ajax({
		method : "GET",
		data : data,
		url :  $("#base_url").val()+"action/PortFolioController/list_portfolio",
		success : function(data){
			
			
			if(data.response_code == "200"){
				//console.log(data.response_data);
				//$("#loading_default").hide();
				
				
				if(data.response_data.length <= 0){
					$("#portfolio_display").html("<p style='text-align:center;font-size: 20px;' class='favorite-font'>No content!</p>");
				}else{
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
					  
					  var totalPage = (data.total_page) ? data.total_page :  1 ;
					  
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