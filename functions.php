<script type="text/javascript">
$(document).ready(function() {
	$("span#switch").hide();
	$(".codetoggle > a#router").css("background-color","#ddd");
	$(".codetoggle > a#switch").click(function(){
		$("span#router").hide();
		$("span#switch").show();
		$(this).css("background-color","#ddd");
		$(".codetoggle > a#router").css("background-color","white");
	});
	$(".codetoggle > a#router").click(function(){
		$("span#switch").hide();
		$("span#router").show();
		$(this).css("background-color","#ddd");
		$(".codetoggle > a#switch").css("background-color","white");
	});
});
</script>