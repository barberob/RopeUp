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

 //   	function animation_header() {
	// 	var controller = new ScrollMagic.Controller();
	// 	var fromBottomTimeline = new TimelineMax();
	// 	var fromBottomTo = TweenMax.fromTo(".img_container span", 1, {x: '0' }, {
	// 	    x: '100%'
	// 	});
	// 	fromBottomTimeline

	// 	.add(fromBottomTo);
	//     new ScrollMagic.Scene({
	// 	    triggerElement: "header",
	// 	    offset: 0,
	// 	})

	// 	.setTween(fromBottomTimeline)
	// 	.duration(450)
	// 	.reverse(false)
	// 	.addIndicators() // add indicators (requires plugin)
	// 	.addTo(controller);
	// }
	// animation_header();

	function test() {
		$('.img_container span').addClass('active');
	}
	test();
});