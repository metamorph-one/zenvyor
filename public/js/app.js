(function () {
  'use strict';

  var header = document.getElementById('myHeader');
  var desktopMenuBtn = document.getElementById('desktopMenuBtn');
  var hamburgerBtn = document.getElementById('hamburgerBtn');
  var menuItems = document.getElementById('menuItems');
  var overlay = document.getElementById('overlay');
  var dropdownGroup = document.getElementById('dropdownGroup');
  var servicesToggle = document.getElementById('servicesToggle');
  var servicesSubMenu = document.getElementById('servicesSubMenu');
  var lastScroll = 0;
  var wasScrolled = false;

  function isHome() {
    return document.body.classList.contains('is-home');
  }

  document.addEventListener('DOMContentLoaded', function () {
    if (!isHome() && header) {
      header.classList.add('scrolled');
    }

    // Scroll-in animations
    var animated = document.querySelectorAll('.animate-on-scroll, .fade-in');
    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('scroll-in');
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });
      animated.forEach(function (el) { observer.observe(el); });
    } else {
      animated.forEach(function (el) { el.classList.add('scroll-in'); });
    }

    // Counters
    var counters = document.querySelectorAll('[data-counter]');
    if (counters.length && 'IntersectionObserver' in window) {
      var cObs = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          var el = entry.target;
          var target = parseInt(el.getAttribute('data-counter'), 10) || 0;
          var duration = 1500;
          var start = null;
          function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / duration, 1);
            el.textContent = Math.floor(p * target) + '+';
            if (p < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
          obs.unobserve(el);
        });
      }, { threshold: 0.4 });
      counters.forEach(function (el) { cObs.observe(el); });
    }

    // Scroll indicator
    var scrollIndicator = document.getElementById('scroll-indicator');
    if (scrollIndicator) {
      window.addEventListener('scroll', function () {
        scrollIndicator.classList.toggle('hidden', window.scrollY > 200);
      }, { passive: true });
    }
  });

  function removeScrolledIfAny() {
    if (header.classList.contains('scrolled')) {
      wasScrolled = true;
      header.classList.remove('scrolled');
    } else {
      wasScrolled = false;
    }
  }
  function restoreScrolledIfNeeded() {
    if (wasScrolled) {
      header.classList.add('scrolled');
      wasScrolled = false;
    }
  }
  function openMenu() {
    removeScrolledIfAny();
    menuItems.classList.add('active');
    overlay.classList.add('active');
  }
  function closeMenu() {
    menuItems.classList.remove('active');
    overlay.classList.remove('active');
    hamburgerBtn.classList.remove('active');
    restoreScrolledIfNeeded();
  }

  if (header) {
    window.addEventListener('scroll', function () {
      if (menuItems && menuItems.classList.contains('active')) closeMenu();
      var currentScroll = window.pageYOffset;
      if (isHome()) header.classList.toggle('scrolled', currentScroll > 200);
      if (currentScroll > lastScroll && currentScroll > 100) {
        header.style.transform = 'translateY(-100%)';
      } else {
        header.style.transform = 'translateY(0)';
      }
      lastScroll = currentScroll;
    }, { passive: true });
  }

  if (desktopMenuBtn) desktopMenuBtn.addEventListener('click', function () {
    menuItems.classList.contains('active') ? closeMenu() : openMenu();
  });
  if (hamburgerBtn) hamburgerBtn.addEventListener('click', function () {
    hamburgerBtn.classList.toggle('active');
    menuItems.classList.contains('active') ? closeMenu() : openMenu();
  });
  if (overlay) overlay.addEventListener('click', closeMenu);

  if (dropdownGroup) {
    var closeTimeout = null;
    function openSubMenu() {
      if (closeTimeout) { clearTimeout(closeTimeout); closeTimeout = null; }
      servicesSubMenu.classList.add('show');
      var arrow = servicesToggle.querySelector('.arrow');
      if (arrow) arrow.style.transform = 'rotate(180deg)';
    }
    function scheduleCloseSubMenu() {
      closeTimeout = setTimeout(function () {
        servicesSubMenu.classList.remove('show');
        var arrow = servicesToggle.querySelector('.arrow');
        if (arrow) arrow.style.transform = 'rotate(0)';
      }, 600);
    }
    dropdownGroup.addEventListener('mouseenter', openSubMenu);
    dropdownGroup.addEventListener('mouseleave', scheduleCloseSubMenu);
    servicesToggle.addEventListener('click', function (e) {
      if (window.innerWidth <= 1024) {
        e.preventDefault();
        servicesSubMenu.classList.toggle('show');
        var arrow = servicesToggle.querySelector('.arrow');
        if (arrow) arrow.style.transform = servicesSubMenu.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0)';
      }
    });
  }
})();
