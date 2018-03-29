
$( document ).ready(function() {
	
	$(".title-wrapper").on("click", function(){
		
		var curObj = $(this);
		console.log(curObj);
		if(curObj.hasClass("close-box")){
			curObj.removeClass("close-box").addClass("open-box");
			curObj.find("i").removeClass("fa-angle-right").addClass("fa-angle-down");
		}else{
			curObj.removeClass("open-box").addClass("close-box");
			curObj.find("i").removeClass("fa-angle-down").addClass("fa-angle-right");
		}
	});
	
});
