
<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugin/select2/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootsnav.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ajaxchimp.js"></script>
<script src="<?php echo base_url();?>assets/js/ajaxchimp-config.js"></script> 
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<script src="<?php echo base_url();?>assets/plugin/jquery-tmpl/jquery.tmpl.js"></script>
<script src="<?php echo base_url(); ?>assets/plugin/bootpag/jquery.bootpag.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/4.2.4/sweetalert2.min.js"></script>

<!-- highlight selected menu item -->
<script>
var t = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);

var t = t.split("?")[0];
if(t){
	if(t.trim() === "scrape" || t.trim() == "my_cart" || t.trim() == "my_order"){
		
		$("li.header-menu").removeClass("active");
		$("li.header-menu#goto_myorder a").parents("li").addClass("active");
	}else{
		$("li.header-menu").removeClass("active");
		$("li.header-menu a[href='"+t+"']").parents("li").addClass("active");
	}
	
}
else{

	$("li.header-menu").removeClass("active");
	$("li.header-menu a[href='home']").parents("li").addClass("active");
}
</script>
<!-- end highlight selected menu item -->

<!-- choose language -->
<script>

	/*var languageList = [{
		id : "english",
		text : "ENG",
		icon : "en-flag.png"
	},{
		id : "khmer",
		text : "KHM",
		icon : "kh-flag.png"
	}];*/
	
	$("#pickLanguage").select2({
		minimumResultsForSearch: -1,
		templateResult: formatState,
		templateSelection: formatState,
		theme: "themes-dark"
	});
	
	function formatState (state) {
		  if (!state.id) {
		    return state.text;
		  }

		  var icon = "";
		  if(state.id == "english") icon= "en-flag.png"; 
		  else if(state.id == "khmer") icon= "kh-flag.png";
		  var $state = $(
		    '<span><img src="assets/img/icon/'+icon+'" class="img-flag" style="width:20px;height:20px;margin-right:5px;padding:1px;margin-top: -3px;"/>' + state.text + '</span>'
		  );
		  return $state;
	};
	
	//go to cart
	$("#goto_cart").on("click", function(){

		if($(this).data("has_sess")){
			location.href = "my_cart";
		}else{

			var buttons = $('<div>')
		    .append(glo_createButton('<i class="fa fa-facebook" style="margin-right: 8px;"></i>Login With Facebook', "#4267b2" , function() {
		    	var href = $('#loginWithFacebook').attr('href');
		    	location.href = href;
		    })).append(glo_createButton('Login with Taobaooutlets', "#990F0E" , function() {
		    	location.href = $("#base_url").val() + "login";
		    }));
		    
		    swal({
		      title: "Please Log in!",
		      html: buttons,
		      showConfirmButton: false,
		      showCancelButton: false
		    });
		}
 
		//
	});

	$("#goto_myorder").on("click", function(){

		if($(this).find("a").data("has_sess")){
			location.href = "my_order";
		}else{

			var buttons = $('<div>')
		    .append(glo_createButton('<i class="fa fa-facebook" style="margin-right: 8px;"></i>Login With Facebook', "#4267b2" , function() {
		    	var href = $('#loginWithFacebook').attr('href');
		    	location.href = href;
		    })).append(glo_createButton('Login with Taobaooutlets', "#990F0E" , function() {
		    	location.href = $("#base_url").val() + "login";
		    }));
		    
		    swal({
		      title: "Please Log in!",
		      html: buttons,
		      showConfirmButton: false,
		      showCancelButton: false
		    });
		}
 
		//
	});

	function glo_createButton(text, color , cb) {
		  return $('<button class="btn " style="margin:0 5px 5px 0;letter-spacing:0; text-transform: none;background:'+color+'">' + text + '</button>').on('click', cb);
	}

</script>

<!-- dashboard menu -->
<script>
	var mymenu = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);

	mymenu = mymenu.split("?")[0];
	if(mymenu){
		if(mymenu.trim() === "topup"){
			mymenu = "list_topup";
		}else if(mymenu.trim() === "withdraw"){
			mymenu = "list_withdraw";
		}
		
	}
	else{
		mymenu = "dashboard";
	}
	
	mymenu = "<?php echo base_url();?>"+mymenu;
	$("a.item-title-child-text").removeClass("active");
	$("a.item-title-child-text[href='"+mymenu+"']").addClass("active");
</script>

