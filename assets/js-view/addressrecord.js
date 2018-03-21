$( document ).ready(function() {
  
	$(".address-edit-btn").on("click", function(){
		
		var currentObj = $(this).parents(".address-item-wrapper").find('.fill-in-form');
		if(currentObj.is(":visible")){
			currentObj.hide();
		}else{
			$(".fill-in-form").hide();
			currentObj.show();
		}
		
		
	});
});