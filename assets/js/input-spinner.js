(function($) {
	$('.spinner .btn:first-of-type').on('click', function() {
		var myInput = $('.spinner input').val();
		if(!myInput) myInput = 0;
		var val = parseInt(myInput, 10) + 1;
		if(val <= 0) val = 1;
		$('.spinner input').val(val);
	});
	$('.spinner .btn:last-of-type').on('click', function() {
		
		var myInput = $('.spinner input').val();
		if(!myInput) myInput = 0;
		var val = parseInt(myInput, 10) - 1;
		if(val <= 0) val = 1;
		$('.spinner input').val(val);
	});
	
	$("input.spinner-input").on("keyup", function(event){
		 
		var myVal = $(this).val();
		if(myVal.length >1 ){
			myVal =myVal.replace(/\D+/, '');
		}else{
			var reg = new RegExp('/\D/g');
			if(!reg.test(myVal)) myVal = 1;
		}
		$(this).val(myVal);
		/*var reg = new RegExp('/^[0-9+]*$/');
		if(reg.test($(this).val())) $(this).val(1);*/
	});
})(jQuery);