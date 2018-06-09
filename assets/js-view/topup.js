$( document ).ready(function() {
	
	 $('input[type=radio][name=top-up-system]').change(function() {
        $("#detail_payment").html(this.value);
    });
	 
	 
	 $(".top-up-item").on("click", function(){
		$(this).find("input[type=radio][name=top-up-system]").prop("checked", true).trigger("change");
	 });
	 
	 $("#purchase_amount").on("keyup", function(event){
		 
		var myVal = $(this).val();
		myVal =myVal.replace(/[^\d\.]/g, "")
		  .replace(/\./, "x")
		  .replace(/\./g, "")
		  .replace(/x/, ".")
		  .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		
		$("#purchase_amount").val(myVal);
	});
	
	 $("#top-up-btn").on("click", function(){
		
		 addMoney();
	 });
	
});

var myTimer;
var myTimerSuccess;
function addMoney(){
	
	$("#process_loading").show();
	
	if(!$("#detail_payment").text().trim()){
		
		clearTimeout(myTimer);
		
		$("#error_messgage_text").html("Please select your payment's method!");
		$("#error_messgage_text").show();
		$("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
		myTimer = setTimeout(function(){
			$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
			//$("#error_messgage_text").hide();
		}, 2000);
		return;
	}
	
	if(!$("#purchase_amount").val()){
		clearTimeout(myTimer);
		
		$("#error_messgage_text").html("Please input your purchase amount!");
		$("#error_messgage_text").show();
		$("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
		myTimer = setTimeout(function(){
			$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
			//$("#error_messgage_text").hide();
		}, 2000);
		return;
	}
	
	if($("#payment-receipt")[0].files && $("#payment-receipt")[0].files.length <= 0){
		clearTimeout(myTimer);
		
		$("#error_messgage_text").html("Please upload your bank receipt!");
		$("#error_messgage_text").show();
		$("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
		myTimer = setTimeout(function(){
			$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
			//$("#error_messgage_text").hide();
		}, 2000);
		return;
	}
	
	var fileToUpload = $("#payment-receipt")[0].files[0];
	
	var insertData = {
		"detail" : $("#detail_payment").text(),
		"amount" : $("#purchase_amount").val().replace(/,/g, ''),
		"remark" : $("#remark").val().trim()
	};
	
	var formData = new FormData();
	formData.append("file",  fileToUpload);
	formData.append("json", JSON.stringify(insertData));
	
	$.ajax({
		url :  $("#base_url").val()+"action/BalanceTransactionController/add_balance",
		method : "POST",
		data : formData,
		processData : false,
		contentType : false,
		success : function(data){
			
			
			if(data.response_code == "200"){
				//location.href = "list_topup";
				$("#process_loading").hide();
				$("#redirect-to").submit();
			}else{
				alert(data.response_msg);
			}
		
		}
	});	
}



