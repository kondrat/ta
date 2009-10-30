$(document).ready(function(){

	$(".ajax").html('<b>h2</b>');
	$(".ajax").click(function() {
		$.post("/ta/brands/mytest/", {}, function(data){
			$("p.ajax").html(data);
		});
	});

});	
	/*
	$.get("myTest.php", {}, function(data){
	$("p").text(data);
	});
	*/