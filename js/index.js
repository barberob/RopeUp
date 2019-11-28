$(document).ready(function(){
	function scroll() {
		$('section:nth-of-type(2)').click(function() {
			scrollTo($('#third'));
		});

		$('.img_container >div').click(function() {
			scrollTo($('section:nth-of-type(1)'));
		});
	}

	function scrollTo(target) {
       	if (target.length) {
           	$("html, body").stop().animate( { scrollTop: target.offset().top }, 1000);
       	}
   	}
   	scroll();

	function anim_header() {
		$('.img_container >span').addClass('active');
	}
	anim_header();

	function anim_scroll(){
		$('.img_container >div >span').addClass('active');
	}
	anim_scroll();
});