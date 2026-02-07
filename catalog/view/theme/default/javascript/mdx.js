(function () {
  'use strict';

  function closeMenus() {
    var openMenus = document.querySelectorAll('.md-menu[aria-hidden="false"]');
    for (var i = 0; i < openMenus.length; i += 1) {
      openMenus[i].setAttribute('aria-hidden', 'true');
    }
  }

  document.addEventListener('click', function (event) {
    var menuTrigger = event.target.closest('[data-md-menu-trigger]');
    if (menuTrigger) {
      var menuId = menuTrigger.getAttribute('data-md-menu-trigger');
      var menu = document.getElementById(menuId);
      if (menu) {
        var opened = menu.getAttribute('aria-hidden') === 'false';
        closeMenus();
        menu.setAttribute('aria-hidden', opened ? 'true' : 'false');
      }
      return;
    }

    if (!event.target.closest('.md-menu')) {
      closeMenus();
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeMenus();
    }
  });
})();
