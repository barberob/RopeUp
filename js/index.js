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
});