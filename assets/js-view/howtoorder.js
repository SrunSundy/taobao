$( document ).ready(function() {
  
	$("#prev_slide").on("click", function(){
		
		findActiveIndex(1);
	});
	
	$("#next_slide").on("click", function(){
		
		findActiveIndex(0);
	});
	
	$(".order-menu-bar li").on("click", function(){
		
		var myBar = $(".order-menu-bar").find("li");
		myBar.removeClass("active");
		$(this).addClass("active");
		
		var index = 0;
		for(var i=0 ; i<myBar.length; i++){			
			if(myBar.eq(i).hasClass("active")){
				index = i;
				break;
			}			
		}
		
		
		
		var allImage = $("#all-img-wrapper").find(".img-slide-wrapper");
		allImage.removeClass("active");
		allImage.eq(index).addClass("active");
		
		var slideNum = $("#slide_num_wrapper").find("li");
		slideNum.removeClass("active");
		slideNum.eq(index).addClass("active");
		
	});
});

function findActiveIndex(type){
	
	var allImage = $("#all-img-wrapper").find(".img-slide-wrapper");
	var index = 0;
	for(var i=0 ; i<allImage.length; i++){			
		if(allImage.eq(i).hasClass("active")){
			index = i;
			break;
		}			
	}
	
	var myBar = $(".order-menu-bar").find("li");
	
	if(type == 0){
		if(index >= (myBar.length - 1))
			index = 0;
		else
			index = index+1;
	}else{
		if(index <= 0)
			index = 4;
		else
			index = index-1;
	}

	myBar.removeClass("active");
	myBar.eq(index).addClass("active");
	
}