(function () {
  'use strict';

  document.addEventListener('click', function (event) {
    var trigger = event.target.closest('[data-mdx-dropdown]');

    if (trigger) {
      var menu = trigger.nextElementSibling;
      if (menu && menu.classList.contains('mdx-dropdown-menu')) {
        var expanded = trigger.getAttribute('aria-expanded') === 'true';
        trigger.setAttribute('aria-expanded', expanded ? 'false' : 'true');
        menu.hidden = expanded;
      }
      return;
    }

    var openMenus = document.querySelectorAll('.mdx-dropdown-menu:not([hidden])');
    for (var i = 0; i < openMenus.length; i += 1) {
      openMenus[i].hidden = true;
      var toggle = openMenus[i].previousElementSibling;
      if (toggle && toggle.hasAttribute('aria-expanded')) {
        toggle.setAttribute('aria-expanded', 'false');
      }
    }
  });
})();
