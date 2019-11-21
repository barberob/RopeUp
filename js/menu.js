function burgerMenu(){
        $( 'a.menu' ).click(function() {
          $('div.menu_page').toggleClass("active");
        });

        $( 'a.cross' ).click(function() {
          $('div.menu_page').toggleClass("active");
        });
      }
      burgerMenu();