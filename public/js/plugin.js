$(document).ready(function(){

	
	$(".drop").click(

		function(){$(this).children("ul").slideToggle();

	});

	$(".msg").fadeOut(5000);
	$(".msg").slideUp(5000);


});