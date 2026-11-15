(function($) {
  const $menu = $('nav.menu-mobile');
  const $body = $('body');
  const $menuButton = $('#menu_button');
  const $menuClose = $('#menu_button_close');

  function toggleMenu() {
    $menu.toggleClass('active');
    $body.toggleClass('overflow-hidden');
  }

  $menuButton.on('click', function(e) {
    e.preventDefault();
    toggleMenu();
  });

  $menuClose.on('click', function(e) {
    e.preventDefault();
    if ($menu.hasClass('active')) {
      toggleMenu();
    }
  });

  $body.on('click', function(e) {
    const target = $(e.target);
    const isInsideMenu = target.closest('.main-nav').length > 0;
    const isMenuButton = target.closest('.menu-button').length > 0;

    if (!isInsideMenu && !isMenuButton && $menu.hasClass('active')) {
      toggleMenu();
    }
  });
})(jQuery);