$( document ).ready(function() {
	
	loadData();
	
	$("#scrape_data").on("click", function(){
		 
		if($(this).data("has_sess")){
			$("#scrape_url").submit();
		}else{
			
			var buttons = $('<div>')
		    .append(createButton('<i class="fa fa-facebook" style="margin-right: 8px;"></i>Login With Facebook', "#4267b2" , function() {
		    	var href = $('#loginWithFacebook').attr('href');
		    	location.href = href;
		    })).append(createButton('Login with Taobaooutlets', "#990F0E" , function() {
		    	location.href = $("#base_url").val() + "login";
		    }));
		    
		    swal({
		      title: "Please Log in!",
		      html: buttons,
		      showConfirmButton: false,
		      showCancelButton: false
		    });
		}
		
	});
	
	$('#scrape_url').on('keyup keypress', function(e) {
	  var keyCode = e.keyCode || e.which;
	  if (keyCode === 13) { 
		  
		 if($("#scrape_data").data("has_sess")){
			$("#scrape_url").submit();
		}else{
			
			var buttons = $('<div>')
		    .append(createButton('<i class="fa fa-facebook" style="margin-right: 8px;"></i>Login With Facebook', "#4267b2" , function() {
		    	var href = $('#loginWithFacebook').attr('href');
		    	location.href = href;
		    })).append(createButton('Login with Taobaooutlets', "#990F0E" , function() {
		    	location.href = $("#base_url").val() + "login";
		    }));
		    
		    swal({
		      title: "Please Log in!",
		      html: buttons,
		      showConfirmButton: false,
		      showCancelButton: false
		    });
		    
		    e.preventDefault();
		    return false;
		}
		  
		  
	   
	  }
	});  
	
	
	
	
});



function createButton(text, color , cb) {
	  return $('<button class="btn " style="margin:0 5px 5px 0;letter-spacing:0; text-transform: none;background:'+color+'">' + text + '</button>').on('click', cb);
}
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
					// var bLazy = new Blazy();
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