 var currentStep = 1;
$(function() {
	$("#scrape_data").on("click", function(){
		
		$("#scrape_url").submit();
	});
	
    $('.qtyplus').click(function(e){
        e.preventDefault();
        fieldName = $(this).attr('field');

        //Fetch qty in the current elements context and since you have used class selector use it.
        var qty = $(this).closest('tr').find('.qty_tb');
        //var qty = $(this).closest('tr').find('input[name='+fieldName+']');

        var currentVal = parseInt(qty.val());
        if (!isNaN(currentVal)) {
            qty.val(currentVal + 1);
        } else {
            qty.val(1);
        }

        //Trigger change event
        qty.trigger('change');
    });

    $(".qtyminus").click(function(e) {
        e.preventDefault();
        fieldName = $(this).attr('field');

        //Fetch qty in the current elements context and since you have used class selector use it.
        var qty = $(this).closest('tr').find('.qty_tb');
        //var qty = $(this).closest('tr').find('input[name='+fieldName+']');

        var currentVal = parseInt(qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            qty.val(currentVal - 1);
        } else {
            qty.val(1);
        }

        //Trigger change event
        qty.trigger('change');
    });     

    //Bind the change event
    $(".qty_tb").change(function() {
        var sum = 0;
        var total = 0;
        var count_qty=0;
        $('.price_tb').each(function () {
            var price = $(this);
            var count = price.closest('tr').find('.qty_tb');
            count_qty += +count.val();
            sum = (price.text() * count.val());
            total = total + sum;
            price.closest('tr').find('.cart_total_price').html(sum + "$");
        });
       $(".total-pay").text("$"+total)
       $(".total-qty").text(count_qty)
       
       

    }).change(); //trigger change event on page load
});
$(document).ready(function () {

    $('.li-nav').click(function () {

        var $targetStep = $($(this).attr('step'));
        
        if (!$(this).hasClass('disabled')) {
        	currentStep = parseInt($(this).attr('id').substr(7));
            $('.li-nav.active').removeClass('active');
            $(this).addClass('active');
            $('.setup-content').hide();
            $targetStep.show();
        }
    });

    $('#navStep1').click();

	$(".qty-input").change(function(e) {
		var target = e.target;
		var qty = $(target).val();
		if (qty > 1) {
		  $(target).css('color', 'red');
		} else {
		  $(target).css('color', 'black');
		}
	 });
	//select all checkboxes
	$('.setup-content').on('change', '.select_all', function (){  //"select all" change
	    var status = this.checked; // "select all" checked status
	    $('.checkbox').each(function(){ //iterate all listed checkbox items
	        this.checked = status; //change ".checkbox" checked status
	    });
	});
	$('.setup-content').on('change', '.checkbox', function (){ 
	//$('.checkbox').change(function(){ //".checkbox" change
	    //uncheck "select all", if one of the listed checkbox item is unchecked
	    if(this.checked == false){ //if this item is unchecked
	        $(".select_all")[0].checked = false; //change "select all" checked status to false
	        $(".select_all")[1].checked = false; //change "select all" checked status to false
	    }
	   
	    //check "select all" if all checkbox items are checked
	    if ($('.checkbox:checked').length == $('.checkbox').length ){
	        $(".select_all")[0].checked = true; //change "select all" checked status to true
	        $(".select_all")[1].checked = true; //change "select all" checked status to true
	    }
	});


});



function step1Next() {
    //You can make only one function for next, and inside you can check the current step
	alert(currentStep);
    if (true) {//Insert here your validation of the first step
        currentStep += 1;
        $('#navStep' + currentStep).removeClass('disabled');
        $('#navStep' + currentStep).click();
    }
}

function prevStep() {
    //Notice that the btn prev not exist in the first step
    currentStep -= 1;
    $('#navStep' + currentStep).click();
}

function step2Next() {
	alert(currentStep);
    if (true) {
        $('#navStep3').removeClass('disabled');
        $('#navStep3').click();
    }
}

function step3Next() {
	alert(currentStep);
    if (true) {
        $('#navStep4').removeClass('disabled');
        $('#navStep4').click();
    }
}