
$(document).ready(function()
{

	$(".communication,.communication h3").click(function()
	{
		$('.background.com').removeClass('hided');
		$('.background.manage').addClass('hided');
		$('.triangle_down').addClass('translated_triangle');
		
	});

	$(".management, .management h3").click(function()
	{
		$('.background.manage').removeClass('hided');
		$('.background.com').addClass('hided');
		$('.triangle_down').removeClass('translated_triangle');
        
	});

});


