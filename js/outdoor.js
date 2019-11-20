
$(document).ready(function()
{


	$(".communication,.communication h3").click(function()
	{
		$('.background:nth-of-type(2)').addClass('translated_right');
		$('.triangle_down').addClass('translated_triangle');
	});

	$(".management").click(function()
	{
		$('.background:nth-of-type(2)').removeClass('translated_right');
		$('.triangle_down').removeClass('translated_triangle');
	});




});


