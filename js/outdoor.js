
$(document).ready(function()
{


	$(".communication").click(function()
	{
		$('.background:nth-of-type(2)').addClass('translated');
		$('.triangle_down').addClass('translated_triangle');
	});

	$(".management").click(function()
	{
		$('.background:nth-of-type(2)').removeClass('translated');
		$('.triangle_down').removeClass('translated_triangle');
	});




});


