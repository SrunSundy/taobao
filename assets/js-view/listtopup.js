var curPage = 1;

$( document ).ready(function() {
	
	if($("#is_msg").val()){
		swal({
	      title: "Your purchase has been submitted.",
	      text : "Please wait for our reviewing"
	    });
	}
	
	$("#my_loader").show();
	$("#display_content").hide();
	listTopUp(function(){

		$("#my_loader").hide();
		$("#display_content").show();
	});
	
	
	$('#pagi-display').on("page", function(event, num){
		 curPage = num;
		 listTopUp(function(){});
	});
});

function deStatus(status){
	
	var stat = parseInt(status);
	if(stat == 0){
		return "Pending";
	}else if(stat == 1){
		return "Have been accounted for"
	}else{
		return "Rejected";
	}
}

function listTopUp(callback){
	
	var data = {
		"row" : 10,
		"page" : curPage
	}
	$.ajax({
		url :  $("#base_url").val()+"action/BalanceTransactionController/list_balance",
		method : "GET",
		data : data,
		success : function(data){
			
			
			var totalPage = (data.total_page) ? data.total_page :  1 ;
			if(data.response_code == "200"){
				
				$("#div_display").children().remove();
				if(data.response_data.length <= 0){
					$("#div_display").append("<tr><td colspan='4'>No Records</td></tr>");
				}else{
					
					$("#div_result").tmpl(data.response_data).appendTo("#div_display");
				}
				
				
				if( typeof callback === "function"){
					callback();
				}
				
			}else{
				alert(data.response_msg);
			}
			
			$('#pagi-display').bootpag({
    			total : totalPage, 
    			maxVisible: 5, 
    			leaps: true,
		        firstLastUse: true,
		        first: '&#8592;',
		        last: '&#8594;',
		        wrapClass: 'pagination',
		        activeClass: 'active',
		        disabledClass: 'disabled',
		        nextClass: 'next',
		        prevClass: 'prev',
		        lastClass: 'last',
		        firstClass: 'first'
			});
		
		}
	});	
	
}

