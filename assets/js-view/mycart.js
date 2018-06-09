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
        console.log(currentVal);
        if (!isNaN(currentVal) && currentVal > 1) {
            qty.val(currentVal - 1);
        }else {
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
        $('#all_cart td.price_tb').each(function () {
            var price = $(this);
            var count = price.closest('tr').find('.qty_tb');
            count_qty += +count.val();
            var unit = price.text().replace("$", "");
            var expressFee = parseFloat(price.siblings(".express-fee").text().replace("$", ""));
            sum = ((unit * count.val())+ expressFee )/ count.val();
            total = total + sum;
            price.closest('tr').find('.cart_total_price').html("$"+getLastTwoDot(sum) );
        });
        $("#total_payment_hidden").val(getLastTwoDot(total));
       $(".total-pay").text("$"+getLastTwoDot(total));
       $(".total-qty").text(count_qty);
       
       

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
	    var sum = 0;
        var total = 0;
        var count_qty=0;
        
        $('#all_cart tbody').find('input[type="checkbox"]:checked ').each(function(){
        	 var price = $(this).parents(".check-input").siblings(".price_tb");
             var count = price.closest('tr').find('.qty_tb');
           
             count_qty += +count.val();
             var unit = price.text().replace("$", "");
             var expressFee = parseFloat(price.siblings(".express-fee").text().replace("$", ""));
             sum = ((unit * count.val())+ expressFee )/ count.val();
             total = total + sum;
             price.closest('tr').find('.cart_total_price').html("$"+getLastTwoDot(sum));
        	
        });
        
        $("#total_payment_hidden").val(getLastTwoDot(total));
        $(".total-pay").text("$"+getLastTwoDot(total));
        $(".total-qty").text(count_qty);
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
	    
	    var sum = 0;
        var total = 0;
        var count_qty=0;
        
        $('#all_cart tbody').find('input[type="checkbox"]:checked ').each(function(){
        	 var price = $(this).parents(".check-input").siblings(".price_tb");
             var count = price.closest('tr').find('.qty_tb');
             count_qty += +count.val();
             var unit = price.text().replace("$", "");
             var expressFee = parseFloat(price.siblings(".express-fee").text().replace("$", ""));
             sum = ((unit * count.val())+ expressFee )/ count.val();
             total = total + sum;
             price.closest('tr').find('.cart_total_price').html("$"+getLastTwoDot(sum));
        	
        });
        
        $("#total_payment_hidden").val(getLastTwoDot(total));
        $(".total-pay").text("$"+getLastTwoDot(total));
        $(".total-qty").text(count_qty);
	});
	
	//address
	listAddress();
	$(document).on("click",".address-edit-btn", function(){
		
		var currentObj = $(this).parents(".address-item-wrapper").find('.fill-in-form');
		if(currentObj.is(":visible")){
			currentObj.hide();
		}else{
			$(".fill-in-form").hide();
			currentObj.show();
		}
		
		
	});
	
	$("#btn_add_address").on("click", function(){
		
		if(validateInput(this)){
			addAddress();
		}
		
	});
	
	$(document).on("click", ".btn-cancel", function(){
		$(".fill-in-form").hide();
	});
	
	$(document).on("click",".btn-save-address" , function(){
		
		updateAddress(this);
	});
	
	$(document).on("click", ".set-default , .address-item", function(){
		updateDefulatAddress(this);
	});
	
	$(document).on("click", ".delete-addr", function(){
		if(confirm("Are you sure you want to delete this addres?")){
			deleteAddress(this);
		}
		
	});
	
	//address


});


function payForOrder(){
	

	
	var addressDefault = $("#address_display").find(".default-address");
	
	if(addressDefault.length <= 0){
		alert("please provide us your shipping address!");
		return;
	}
	
	var addressId = addressDefault.find(".address_id");
	
	if(!addressId){
		alert("please provide us your shipping address!");
		return;
	}
	$("#order_msg").hide();
	
	var totalPayment = parseFloat($("#total_payment_hidden").val());
	var myBalance = parseFloat($("#my_balance_hidden").val());
	var awaitingpayment = parseFloat($("#awaiting_payment_hidden").val());
	
	var totalBalance = myBalance - awaitingpayment;
	if(totalBalance < totalPayment){
		$("#order_msg").show();
	}else{
		
		$("#process_loading").show();
		var dataTo = [];
		var sourceData = $("#final_items").find("tbody tr");
		
		for(var i=0; i<sourceData.length; i++){
			
			dataTo.push({
				"color" : sourceData.eq(i).find(".item_color").val(),
				"size" : sourceData.eq(i).find(".item_size").val(),
				"dollar_price" : sourceData.eq(i).find(".items_price_dollar").val(),
				"yuan_price" : sourceData.eq(i).find(".items_price_yaun").val(),
				"pro_photo" :  sourceData.eq(i).find(".item_photo").val(),
				"pro_name" : sourceData.eq(i).find("td.item_title").find("a").text(),
				"pro_link" : sourceData.eq(i).find(".item_url").val(),
				"message" : sourceData.eq(i).find("td.item_message_td").find("input").val(),
				"domestic_express" : sourceData.eq(i).find(".item_express_fee").val(),
				"qty" : sourceData.eq(i).find("td.item-qty").find(".qty_tb").val()
			});
		}
		
		var insertData = {
			"address_id": addressId.val(),
			"address" : addressDefault.find(".location-address").text(),
			"data" : dataTo
		}
		
		
		$.ajax({
			url :  $("#base_url").val()+"action/MyOrder/insert_order",
			method : "POST",
			data : insertData,
			success : function(data){
				
				if(data.response_code == "200"){
					$("#process_loading").hide();
					$("#redirect-to").submit();
					
				}else{
					alert(data.response_msg);
				}
				
				
			}
		});	
	
	}
}

function getLastTwoDot(val){
	
	if(!val) return val;
	
	return val.toFixed(2);
}


function step1Next() {
    //You can make only one function for next, and inside you can check the current step

    $("#final_items tbody").html("");
	var getSelectedRows = $("#all_cart tbody input[type='checkbox']:checked").parents("tr").clone();
	
    var slelected=$("#all_cart tbody input[type='checkbox']:checked").length;

    if(slelected ==0){
       $("#error_messgage_text").html("Please select item's!");
	   $("#error_messgage_text").show();
	   $("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
	   setTimeout(function(){
			$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
	   }, 2000);
       return
    }
    
    var cgetSelectedRows = [];
    for(var i= getSelectedRows.length-1; i>=0; i--){
    	
    	var htmlDom = $(getSelectedRows[i]);
    	console.log(htmlDom.html());
    	var checkInputTd = htmlDom.find("td.check-input");
    	
    	console.log(checkInputTd);
    	checkInputTd.find("input.checkbox").remove();
    	checkInputTd.append("<span>"+ (getSelectedRows.length-i) +"</span>");
    	
    	
    	cgetSelectedRows.push(htmlDom);
    }
    $("#final_items tbody").append(cgetSelectedRows);
    $("#final_items :input").attr("disabled", true);
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

    if (true) {
        $('#navStep3').removeClass('disabled');
        $('#navStep3').click();
       
    }
}

function step3Next() {
    var address= $("#address").val();
    if(address==""){
       $("#error_messgage_text").html("Please fill your address!");
	   $("#error_messgage_text").show();
	   $("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
	   setTimeout(function(){
			$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
	   }, 2000);
    	return;
    }
    if (true) {
        $('#navStep4').removeClass('disabled');
        $('#navStep4').click();
    }
    getitemInfo();
}
function checkout(){

	var resq_data = getitemInfo();
	console.log(resq_data);
	$.ajax({
            method : "POST",
            url :  $("#base_url").val()+"action/AddToCartController/insert_cart",
            data : resq_data,
            success : function(data){
  
 			//	location.reload();
            
            }
        });

}
function getitemInfo(){
       var items=[];
       var address= $("#address").val();
       var tr="";
       var total =0;
        $('#all_cart tbody').find('input[type="checkbox"]:checked ').each(function () {
	        var row = $(this).closest("tr");    // Find the row
	        var items_id = row.find("input[class='items_id']").val(); 
	        var item_url = row.find("input[class='item_url']").val(); 
	        var item_price_dollar = row.find('.price_tb').text(); 
	        var item_color = row.find("input[class='item_color']").val();
	        var item_size = row.find("input[class='item_size']").val();
	        var item_photo = row.find("input[class='item_photo']").val();
	        var item_title = row.find(".item_title").text();
	        var qty_tb = row.find(".qty_tb").val();
	        var item_message = row.find(".item_message").val();
	        var sub_total= item_price_dollar * qty_tb;
	        total += +sub_total;
	        items.push({"items_id":items_id,
	        			"item_url":item_url,
	        			"item_price_dollar":item_price_dollar,
	        			"item_color":item_color,
	        			"item_size":item_size,
	        			"item_photo":item_photo,
	        			"item_title":item_title,
	        			"qty_tb":qty_tb,
	        			"item_message":item_message
	                  });
            tr+="<tr class='item'><td><a href='"+item_url+"' target='_blank'>"+item_title+"</a></td>";
            tr+=" <td>"+qty_tb+"</td>";
            tr+="<td>"+sub_total+"</td></tr>";
        });
    
        $(".invoice-address").html(address);
        $(".totalcheckout").html(total);
        $(".checkout-item").after('');
        $(".checkout-item").after(tr);
        $("#totalcheckout").html(total)
        var resq_data = {
            "items" : items,
            "address" : address
       
        };

        return  resq_data;

}

function deleteItems(){
        
		$("#delete_item_loading").show();
        var items=[]
        $('#all_cart tbody').find('input[type="checkbox"]:checked ').each(function () {
	        var row = $(this).closest("tr");    // Find the row
	        var items_id = row.find("input[class='items_id']").val(); 
	        var item_size = row.find("input[class='item_size']").val(); 
	        var item_color = row.find("input[class='item_color']").val(); 
	        items.push({
	        	"item_id" : items_id,
	        	"item_size" : item_size,
	        	"item_color" : item_color
	        });
	        
	        
        });
        
        var resq_data = {
            "items" : items
       
        };
        if(items.length==0){
        	$("#error_messgage_text").html("Please select item's to detete!");
			$("#error_messgage_text").show();
			$("#error_messgage_text").removeClass("bounceOut").addClass("bounceIn");
			   setTimeout(function(){
					$("#error_messgage_text").removeClass("bounceIn").addClass("bounceOut");
			   }, 2000);
        }
  
        $.ajax({
            method : "POST",
            url :  $("#base_url").val()+"action/AddToCartController/remove_cart",
            data : resq_data,
            success : function(data){
  
              if(data.response_code == "200"){
            	  
            	  $("#my_cart_num").html("("+data.my_cart_num+")");
            	  if(data.my_cart_num!==0){

                    /*for(var i=0;i<items.length; i++){
                        document.getElementById("row"+items[i]+"").outerHTML=""; 
                  	}*/
            		
        		    $('#all_cart tbody').find('tr').each(function () {
        		        var row = $(this).closest("tr");    // Find the row
        		        var item_id = row.find("input[class='items_id']").val(); 
        		        var item_size = row.find("input[class='item_size']").val(); 
        		        var item_color = row.find("input[class='item_color']").val(); 
        		        
        		        for(var i=0;i<items.length; i++){
        		        	
        		        	if(item_id == items[i]["item_id"] && item_size == items[i]["item_size"] &&
        		        	  item_color == items[i]["item_color"]){
        		        		row.remove();
        		        		break;
        		        	}
                            
                      	}
        		        
        		       
        	        });
      	            var sum = 0;
      		        var total = 0;
      		        var count_qty=0;
      		        $('#all_cart td.price_tb').each(function () {
      		            var price = $(this);
      		            var count = price.closest('tr').find('.qty_tb');
      		            alert(count.val());
      		            count_qty += +count.val();
      		            var unit = price.text().replace("$", "");
      		            var expressFee = parseFloat(price.siblings(".express-fee").text().replace("$", ""));
      		            sum = ((unit * count.val())+ expressFee )/ count.val();
      		            total = total + sum;
      		            price.closest('tr').find('.cart_total_price').html("$"+getLastTwoDot(sum));
      	        	});
      		        $("#total_payment_hidden").val(getLastTwoDot(total));
      		        $(".total-pay").text("$"+getLastTwoDot(total));
      		        $(".total-qty").text(count_qty);

                    }else{
                    	location.reload();
                    }
            	  
            	  $("#delete_item_loading").hide();
              }else{
            	  alert("Network Error!");
              }
              
              
            
            }
        });


}



//address

function listAddress(){
	
	$("#my_loader").show();
	$("#display_content").hide();
	
	var data = {
		"user_id" : 2
	};
	
	$.ajax({
		method : "GET",
		data : data,
		url :  $("#base_url").val()+"action/AddressController/list_address",
		success : function(data){
			
			
			if(data.response_code == "200"){
				console.log(data.response_data);
				
				records = data.response_data;
				$("#addr_cnt").html(records.length);
				if(data.response_data.length <= 0){
					
					//$("#address_display").html("<p style='text-align:center;font-size: 20px;padding-bottom:50px;padding-top: 50px;' class='favorite-font'>No address!</p>");
				}else{
										
					$("#address_display").children().remove();
					$("#address_result").tmpl(records).appendTo("#address_display");
					
				}
				
				$("#my_loader").hide();
				$("#display_content").show();
			}
		
		}
	});
}

function addAddress(){
	
	if(parseInt($("#addr_cnt").text().trim()) >= 5){
		alert("Fail to insert! Address is at maximum.");
		return;
	}
	
	
	$("#btn_add_address").find("i").css("visibility", "visible");
	$("#btn_add_address").addClass("disabled");
	var insertData = {
		"user_id" : 2,
		"rept_name" : $("#add_rept_name").val().trim(),
		"rept_tel" : $("#add_rept_tel").val().trim(),
		"rept_country" : $("#add_rept_country").val().trim(),
		"rept_city" : $("#add_rept_city").val().trim(),
		"rept_postcode" : $("#add_rept_postcode").val().trim(),
		"rept_addr" : $("#add_rept_addr").val().trim(),
		"is_default" : ($("#add_is_default").is(":checked")) ? 1 : 0
	};
	
	$.ajax({
		method : "POST",
		data : insertData,
		url :  $("#base_url").val()+"action/AddressController/add_address",
		success : function(data){
			
			
			if(data.response_code == "200"){
				
				if(parseInt(insertData["is_default"]) == 1){
					for( var i=0; i<records.length; i++){
						records[i].is_default= 0;					
					}
				}
				
				
				insertData["addr_id"] = data.response_data;
				records.push(insertData);
				$(".fill-in-form").hide();
				
				
				$("#address_display").children().remove();
				$("#address_result").tmpl(records).appendTo("#address_display");
				$("#btn_add_address").find("i").css("visibility", "hidden");
				$("#btn_add_address").removeClass("disabled");
				$("#addr_cnt").html(records.length);
			}else{
				alert(data.response_msg);
			}
		
		}
	});	
}

function updateAddress(obj){
	
	
	$(obj).find("i").css("visibility", "visible");
	$(obj).addClass("disabled");
	
	var objp = $(obj).parents(".fill-in-form");
	var objup = $(obj).parents(".address-item-wrapper");
	var updateData = {
		"user_id" : 2,
		"addr_id" : $(objp).find(".addr_id").val().trim(),	
		"rept_name" : $(objp).find(".rept_name").val().trim(),
		"rept_tel" : $(objp).find(".rept_tel").val().trim(),
		"rept_country" : $(objp).find(".rept_country").val().trim(),
		"rept_city" : $(objp).find(".rept_city").val().trim(),
		"rept_postcode" : $(objp).find(".rept_postcode").val().trim(),
		"rept_addr" : $(objp).find(".rept_addr").val().trim(),
		"is_default" : ($(objp).find(".is_default").is(":checked")) ? 1 : 0
	};
	
	$.ajax({
		method : "POST",
		data : updateData,
		url :  $("#base_url").val()+"action/AddressController/update_address",
		success : function(data){
			
			
			if(data.response_code == "200"){
				
				
				$(".fill-in-form").hide();
				$(obj).find("i").css("visibility", "hidden");
				$(obj).removeClass("disabled");
				$(objup).find(".d-rept-name").html(updateData["rept_name"]);
				$(objup).find(".d-rept-tel").html(updateData["rept_tel"]);
				$(objup).find(".d-rept-country").html(updateData["rept_country"]);
				$(objup).find(".d-rept-city").html(updateData["rept_city"]);
				$(objup).find(".d-rept-postcode").html(updateData["rept_postcode"]);
				$(objup).find(".d-rept-addr").html(updateData["rept_addr"]);
				$(".address-item-wrapper").removeClass("default-address");
				$(".address-item-wrapper").find(".is_default").prop('checked', false);
				$(objup).addClass("default-address");
				$(objup).find(".is_default").prop('checked', true);
				
				
			}else{
				alert(data.response_msg);
			}
		
		}
	});	
	
}

function updateDefulatAddress(obj){
	
	var objup = $(obj).parents(".address-item-wrapper");
	var defaultInt = 0;
	
	var addWrapper = $(".address-item-wrapper");
	for(var i=0; i<addWrapper.length; i++){
		if(addWrapper.eq(i).hasClass("default-address")) defaultInt = i;
	}
	addWrapper.eq(defaultInt).find(".is_default").prop('checked', false);
	
	$(".address-item-wrapper").removeClass("default-address");
	$(objup).addClass("default-address");
	$(objup).find(".is_default").prop('checked', true);
	var data = {
		"addr_id" : $(objup).find(".addr_id").val().trim(),
		"user_id" : 2
	};
	$.ajax({
		method : "POST",
		data : data,
		url :  $("#base_url").val()+"action/AddressController/update_default_address",
		success : function(data){
						
			if(data.response_code == "200"){
					
			}else{
				alert(data.response_msg);
				$(".address-item-wrapper").removeClass("default-address");
				$(".address-item-wrapper").eq(defaultInt).addClass("default-address");
				addWrapper.eq(defaultInt).find(".is_default").prop('checked', true);
				$(objup).find(".is_default").prop('checked', false);
			}
		
		},error:function(data){
			alert("Error! unable to update");
			$(".address-item-wrapper").removeClass("default-address");
			$(".address-item-wrapper").eq(defaultInt).addClass("default-address");
			addWrapper.eq(defaultInt).find(".is_default").prop('checked', true);
			$(objup).find(".is_default").prop('checked', false);
		}
	});	
	
}

function deleteAddress(obj){
	
	$("#pay_my_order").prop('disabled', true);
	var objup = $(obj).parents(".address-item-wrapper");
	var d_data = {
		"addr_id" : $(objup).find(".addr_id").val().trim()
	};
	$(objup).addClass("delete-address");
	$.ajax({
		method : "POST",
		data : d_data,
		url :  $("#base_url").val()+"action/AddressController/delete_address",
		success : function(data){
						
			if(data.response_code == "200"){
				$(objup).remove();
				
				var item = $(".address-item-wrapper");
				for( var i=0; i<records.length; i++){
					
					if(records[i].addr_id == d_data["addr_id"]){
						records.splice(i, 1);
					}
				}
				
				$("#addr_cnt").html(records.length);
			}else{
				alert(data.response_msg);
				$(objup).removeClass("delete-address");
			}
			$("#pay_my_order").prop('disabled', false);
		
		},error:function(data){
			alert("Error! unable to delete");
			$(objup).removeClass("delete-address");
			
		}
	});	
}

function validateInput(obj){
	
	var objp = $(obj).parents(".fill-in-form");
	
	if(!validateTemplate(objp ,"rept_name")) return false;
	if(!validateTemplate(objp ,"rept_tel")) return false;
	if(!validateTemplate(objp ,"rept_country")) return false;
	if(!validateTemplate(objp ,"rept_city")) return false;
	if(!validateTemplate(objp ,"rept_postcode")) return false;
	if(!validateTemplate(objp ,"rept_addr")) return false;
	
	return true;	
}

function validateTemplate(objp ,cls){
	
	if(!objp.find("."+cls).val()){
		objp.find("."+cls).addClass("invalid-data");
		objp.find("."+cls).focus();
		return false;
	}else{
		objp.find("."+cls).removeClass("invalid-data");
		return true;
	}
	
}

//address
