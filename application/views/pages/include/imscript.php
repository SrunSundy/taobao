
<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugin/select2/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootsnav.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ajaxchimp.js"></script>
<script src="<?php echo base_url();?>assets/js/ajaxchimp-config.js"></script> 
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<!-- highlight selected menu item -->
<script>
var t = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);

var t = t.split("?")[0];
if(t){
	if(t.trim() === "scrape" || t.trim() == "my_cart"){
		
		$("li.header-menu").removeClass("active");
		$("li.header-menu a[href='my_order']").parents("li").addClass("active");
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
		location.href = "my_cart";
	});

</script>

<!-- dashboard menu -->
<script>
	var mymenu = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
	mymenu = "<?php echo base_url();?>"+mymenu;
	$("a.item-title-child-text").removeClass("active");
	$("a.item-title-child-text[href='"+mymenu+"']").addClass("active");
</script>

