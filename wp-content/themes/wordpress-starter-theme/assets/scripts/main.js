(function($) {
  /************************************
  *** show mobile menu
  ************************************/
  $('#menu_button, #menu_button_close').click(function (e){
    e.preventDefault();
    $('nav.menu-mobile').toggleClass('active');
    $('body').toggleClass('overflow-hidden');
  });

  $('body').click(function (e){
    const eventTarget = $(e.target);
    const checkMainNav = eventTarget.closest('.main-nav').length === 0;
    const checkMenuButton = eventTarget.closest('.menu-button').length === 0;
    const checkClassActive = $('nav.menu-mobile').hasClass('active');

    if (checkMainNav && checkMenuButton && checkClassActive){
      $('#menu_button').trigger('click');
    }
  });
  console.log('hello!');

})(jQuery);
