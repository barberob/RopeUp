
$(document).ready(function()
{

    console.log('bojour');

	$(".communication,.communication h3").click(function()
	{
		$('.background.com').removeClass('hided');
		$('.background.manage').addClass('hided');
		$('.triangle_down').addClass('translated_triangle');
        console.log("yeah");
		
	});

	$(".management, .management h3").click(function()
	{
		$('.background.manage').removeClass('hided');
		$('.background.com').addClass('hided');
        console.log("yah");

		$('.triangle_down').removeClass('translated_triangle');
	});

});


