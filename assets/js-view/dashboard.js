$( document ).ready(function() {
	
	calculateImageWidth();
	$(window).bind('resize', function(){
		calculateImageWidth();
	});
	
	$("#btn_set_menu").on("click", function(){
		
	
		if($(this).hasClass("fa-minus")){
			
			$(this).removeClass("fa-minus");
			$(this).addClass("fa-plus");
			$("#menu_item").removeClass("display-menu");
			$("#menu_item").animate({height:0},200);
			$("#menu_item").addClass("remove-display-menu");
		}else{
			

			$(this).addClass("fa-minus");
			$(this).removeClass("fa-plus");
			$("#menu_item").removeClass("remove-display-menu");
			$("#menu_item").animate({height:500},200);
			$("#menu_item").addClass("display-menu");
		}
		
		
	});
	
	
});

function calculateImageWidth(){
	
	 var win = $(window);
	
	if(win.width() > 992 ){
		//$("#btn_set_menu").addClass("fa-minus");
    	//$("#btn_set_menu").removeClass("fa-plus");
    }else if(win.width() <= 992 && $("#menu_item").height() <= 0){
    	$("#btn_set_menu").removeClass("fa-minus");
    	$("#btn_set_menu").addClass("fa-plus");
    }
}

