
$(document).ready(function()
{

	console.log("yaah");
	// var mySwiper = new Swiper ('.swiper-container', {
 //    // Optional parameters
 //    direction: 'horizontal',
 //    loop: true,
    
 //    // If we need pagination
 //    pagination: {
 //      el: '.swiper-pagination',
 //    },

 //    // Navigation arrows
 //    navigation: {
 //      nextEl: '.swiper-button-next',
 //      prevEl: '.swiper-button-prev',
 //    },

 //    // And if we need scrollbar
 //    scrollbar: {
 //      el: '.swiper-scrollbar',
 //    },
    
	// })

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


