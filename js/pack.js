
$(document).ready(function()
{

	console.log("yaah");
	// var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    // direction: 'horizontal',
  	 // loop: true,
    //  slidesPerView: 1,
    // initialSlide: 1,
	// spaceBetween: 50,
   //  centeredSlides: true,

  	// grabCursor: true,
   //  autoHeight: true,
    
    // breakpoints: {
    //     640: {
    //       slidesPerView: 2,
    //       spaceBetween: 20,
    //     },
    //     1024: {
    //       slidesPerView: 3,
    //       spaceBetween: 50,
    //     },
    //   }

    // Navigation arrows
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
    //   pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    //   },

    //  breakpoints: {
   
    // 1440: {
    //   slidesPerView: 2
    // }
 
 	//}
	// });

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


