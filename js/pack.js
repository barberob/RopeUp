
$(document).ready(function()
{

    // var video1 = $('iframe:nth-of-type(1)')[0];
    // var video2 = $('iframe:nth-of-type(2)')[0];
       

	$(".communication,.communication h3").click(function()
	{
		$('.background.com').removeClass('hided');
		$('.background.manage').addClass('hided');
		$('.triangle_down').addClass('translated_triangle');
        $('.youtube-video')[1].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
		
	});

	$(".management, .management h3").click(function()
	{
		$('.background.manage').removeClass('hided');
		$('.background.com').addClass('hided');
		$('.triangle_down').removeClass('translated_triangle');
        $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
       
        

	});

});
