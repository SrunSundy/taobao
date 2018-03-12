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
	
	$("input.spinner-input").on("keypress", function(event){
		return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57;
	});
})(jQuery);