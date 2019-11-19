$(document).ready(function(){
	$("#slider>div").hover(function(){
		$(this).find(">p").toggleClass('active');
	});
});