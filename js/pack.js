
$(document).ready(function()
{

	console.log("yaah");

	$(".communication,.communication h3").click(function()
	{
		$('.background:nth-of-type(1)').removeClass('hided');
		$('.background:nth-of-type(2)').addClass('hided');
		$('.triangle_down').addClass('translated_triangle');
		
	});

	$(".management, .management h3").click(function()
	{
		$('.background:nth-of-type(2)').removeClass('hided');
		$('.background:nth-of-type(1)').addClass('hided');

		$('.triangle_down').removeClass('translated_triangle');
	});

});


