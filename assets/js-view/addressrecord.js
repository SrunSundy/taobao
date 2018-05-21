
var records = [];
$( document ).ready(function() {
  
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
	
	$(document).on("click", ".set-default", function(){
		updateDefulatAddress(this);
	});
	
	$(document).on("click", ".delete-addr", function(){
		if(confirm("Are you sure you want to delete this addres?")){
			deleteAddress(this);
		}
		
	});
});

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
					
					$("#address_display").html("<p style='text-align:center;font-size: 20px;padding-bottom:50px;padding-top: 50px;' class='favorite-font'>No content!</p>");
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

