$(document).ready(function(){
	function scroll() {
		$('section:nth-of-type(2)').click(function() {
			scrollTo($('#third'));
		});
	}

	function scrollTo(target) {
       	if (target.length) {
           	$("html, body").stop().animate( { scrollTop: target.offset().top }, 1000);
       	}
   	}
   	scroll();

	function anim_header() {
		$('.img_container span').addClass('active');
	}
	anim_header();
});