
$(document).ready(function()
{

    // var video1 = $('iframe:nth-of-type(1)')[0];
    // var video2 = $('iframe:nth-of-type(2)')[0];

    function scroll() {
		$('.management_link, .communication_link').click(function() {
			scrollTo($('#fonctionnalités'));
		});
	}


	function scrollTo(target) {
       	if (target.length) {
           	$("html, body").stop().animate( { scrollTop: target.offset().top }, 1000);
       	}
   	}
   	scroll();
  



	$(".communication,.communication h3, .communication_link").click(function()
	{    console.log('yaaa');
		$('.background.com').removeClass('hided');
		$('.background.manage').addClass('hided');
		$('.triangle_down').addClass('translated_triangle');
        $('.youtube-video')[1].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');

		
	});

	$(".management, .management h3, .management_link").click(function()
	{
		$('.background.manage').removeClass('hided');
		$('.background.com').addClass('hided');
		$('.triangle_down').removeClass('translated_triangle');
        $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
	});


	$('management_link').click
	{

	}

});
