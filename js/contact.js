$(document).ready(function(){
	// window.onload=auto_refresh()

	// function auto_refresh() {
	// 	p=setInterval(refresh, 1);
	// }

	// function refresh() {
	// 	if ($('#com').prop("checked") == true && $('#gestion').prop("checked") == true) {
	// 		$('input[name="vente"]').removeAttr('disabled');
	// 	}

	// 	else {
	// 		$('input[name="vente"]').attr('disabled', 'disabled');
	// 		$('input[name="vente"]').prop('checked', false);
	// 	}
	// }

	function scroll() {
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