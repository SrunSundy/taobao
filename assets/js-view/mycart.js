 var currentStep = 1;

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