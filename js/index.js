$(document).ready(function(){
	$("#slider>div").hover(function(){
		$(this).find(">a").toggleClass('active');
	});
});