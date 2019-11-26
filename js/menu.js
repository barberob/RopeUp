$(document).ready(function()
{

  function burgerMenu(){
          $( 'a.menu' ).click(function() {
            $('div.menu_page').toggleClass("active");
          });

          $( 'a.cross' ).click(function() {
            $('div.menu_page').toggleClass("active");
          });
        }
        burgerMenu();

  $( '.dropdown-content a:first-of-type' ).hover(function() {
    $('span:first-of-type').toggleClass("active");
  });

  $( '.dropdown-content a:last-of-type' ).hover(function() {
    $('span:last-of-type').toggleClass("active");
  });

});