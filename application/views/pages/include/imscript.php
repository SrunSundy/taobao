
<script src="assets/js/jquery-2.1.3.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugin/select2/select2.full.min.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/ajaxchimp.js"></script>
<script src="assets/js/ajaxchimp-config.js"></script> 
<script src="assets/js/script.js"></script>
<!-- highlight selected menu item -->
<script>
var t = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
$("li.header-menu").removeClass("active");
$("li.header-menu a[href='"+t+"']").parents("li").addClass("active");
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

	

</script>

