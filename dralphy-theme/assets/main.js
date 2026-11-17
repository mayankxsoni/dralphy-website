(function () {
  'use strict';

  // Mobile menu.
  var nav = document.getElementById('site-nav');
  var toggle = document.querySelector('.nav-toggle');
  var label = toggle ? toggle.querySelector('.nav-toggle__label') : null;
  function setMenu(open) {
    nav.classList.toggle('is-open', open);
    document.documentElement.classList.toggle('nav-open', open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    if (label) { label.textContent = open ? 'Close' : 'Menu'; }
  }
  if (nav && toggle) {
    toggle.addEventListener('click', function () { setMenu(!nav.classList.contains('is-open')); });
    nav.addEventListener('click', function (e) {
      if (e.target.closest && e.target.closest('a')) { setMenu(false); }
    });
    window.addEventListener('resize', function () {
      if (window.innerWidth > 1240 && nav.classList.contains('is-open')) { setMenu(false); }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('is-open')) { setMenu(false); toggle.focus(); }
    });
  }

  // Dropdowns: button toggles (mobile + keyboard); WordPress menus get the same classes.
  document.querySelectorAll('.nav .menu-item-has-children').forEach(function (li) {
    li.classList.add('has-sub');
    var sub = li.querySelector('.sub-menu');
    if (sub) { sub.classList.add('sub'); }
  });
  document.querySelectorAll('.sub-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var li = btn.parentElement;
      var open = li.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });
  document.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape') { return; }
    document.querySelectorAll('.nav .is-open').forEach(function (li) {
      li.classList.remove('is-open');
      var b = li.querySelector('.sub-toggle');
      if (b) { b.setAttribute('aria-expanded', 'false'); }
    });
  });

  // "On this page" list from the H2 headings of medical pages.
  var toc = document.querySelector('.toc');
  var heads = document.querySelectorAll('.entry > h2');
  if (toc && heads.length > 2) {
    var list = toc.querySelector('ol');
    var links = [];
    heads.forEach(function (h, i) {
      if (!h.id) { h.id = 'section-' + (i + 1); }
      var li = document.createElement('li');
      var a = document.createElement('a');
      a.href = '#' + h.id;
      a.textContent = h.textContent;
      li.appendChild(a);
      list.appendChild(li);
      links.push(a);
    });
    toc.hidden = false;
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (!en.isIntersecting) { return; }
          links.forEach(function (a) { a.classList.toggle('is-active', a.hash === '#' + en.target.id); });
        });
      }, { rootMargin: '-100px 0px -65% 0px' });
      heads.forEach(function (h) { io.observe(h); });
    }
  }
})();
