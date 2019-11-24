
$(document).ready(function()
{

	console.log("yaah");
	var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
   // spaceBetween: 50,
    centeredSlides: true,
    grabCursor: true,
    autoHeight: true,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }

    //  breakpoints: {
   
    // 1440: {
    //   slidesPerView: 2
    // }
 
 	//}
	})

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


