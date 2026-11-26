/* Glam by Sanyukta - site scripts (shared by every PHP page) */
(function () {
  'use strict';
  var $ = function (s, r) { return (r || document).querySelector(s); };
  var $$ = function (s, r) { return [].slice.call((r || document).querySelectorAll(s)); };
  var store = {
    get: function (k) { try { return sessionStorage.getItem(k); } catch (e) { return null; } },
    set: function (k, v) { try { sessionStorage.setItem(k, v); } catch (e) {} },
    del: function (k) { try { sessionStorage.removeItem(k); } catch (e) {} }
  };
  var cur = $('#cur'), pre = $('#pre');

  /* ---- Rosette decoration (SVG petals) ---- */
  $$('.ros').forEach(function (e) {
    var n = +e.dataset.n, s = '<svg viewBox="-100 -100 200 200">', i;
    for (i = 0; i < n; i++) s += '<ellipse rx="20" ry="58" cy="-46" transform="rotate(' + (i * 360 / n) + ')"/>';
    e.innerHTML = s + '<circle r="12"/><circle r="30"/></svg>';
  });

  /* ---- Preloader (first visit of the session only) ---- */
  if (pre) {
    setTimeout(function () { pre.classList.add('go'); }, 1500);
    store.set('glam_seen', '1');
  }

  /* ---- Reveal-on-scroll ---- */
  var rv = $$('.rv');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (x) { if (x.isIntersecting) { x.target.classList.add('in'); io.unobserve(x.target); } });
    }, { threshold: .12 });
    rv.forEach(function (e) { io.observe(e); });
  } else {
    rv.forEach(function (e) { e.classList.add('in'); });
  }

  /* ---- Page transition curtain ---- */
  if (store.get('glam_nav') === '1') {
    store.del('glam_nav');
    if (cur) cur.addEventListener('animationend', function () { cur.className = ''; });
  }
  window.addEventListener('pageshow', function (e) { if (e.persisted && cur) cur.className = ''; });

  document.addEventListener('click', function (e) {
    var a = e.target.closest && e.target.closest('a[href]');
    if (!a || e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
    if (a.target === '_blank' || a.hasAttribute('download')) return;
    var href = a.getAttribute('href');
    if (!href || /^(tel:|mailto:|https?:|#)/i.test(href)) return;
    var dest = new URL(a.href, location.href);
    if (dest.origin !== location.origin) return;
    if (dest.pathname === location.pathname && !dest.hash) { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); return; }
    if (!cur) return;
    e.preventDefault();
    store.set('glam_nav', '1');
    cur.className = '';
    void cur.offsetWidth;
    cur.classList.add('w');
    setTimeout(function () { location.href = a.href; }, 480);
  });

  /* ---- Back to top ---- */
  var up = $('#totop');
  if (up) up.addEventListener('click', function (e) { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); });

  /* ---- Mobile menu ---- */
  var mb = $('#mb');
  if (mb) mb.addEventListener('click', function () {
    var o = document.body.classList.toggle('m');
    this.textContent = o ? 'Close' : 'Menu';
  });

  /* ---- Header shadow on scroll ---- */
  var hd = $('#hd');
  if (hd) addEventListener('scroll', function () { hd.classList.toggle('sc', scrollY > 40); }, { passive: true });

  /* ---- Cursor glow ---- */
  var gl = $('#glow');
  if (gl && matchMedia('(pointer:fine)').matches) {
    var gx = 0, gy = 0, tx = 0, ty = 0;
    addEventListener('mousemove', function (e) { tx = e.clientX; ty = e.clientY; });
    (function t() { gx += (tx - gx) * .08; gy += (ty - gy) * .08; gl.style.transform = 'translate(' + gx + 'px,' + gy + 'px)'; requestAnimationFrame(t); })();
  }

  /* ---- Home: "Looks we love" accordion ---- */
  var ac = $$('.ac');
  if (ac.length) {
    var sa = function (p) { ac.forEach(function (x) { x.classList.toggle('on', x === p); }); };
    ac.forEach(function (p) {
      p.addEventListener('mouseenter', function () { sa(p); });
      p.addEventListener('click', function () { sa(p); });
    });
  }

  /* ---- Gallery: filter + lightbox ---- */
  var gg = $('#gg'), lb = $('#lb');
  if (gg && lb) {
    var cu = 0, ls = [];
    var vis = function () { return $$('.gi', gg).filter(function (e) { return e.style.display !== 'none' && e.dataset.full; }); };
    var openLb = function (i) {
      ls = vis(); if (!ls.length) return;
      cu = (i + ls.length) % ls.length;
      $('img', lb).src = ls[cu].dataset.full;
      $('p', lb).textContent = ls[cu].getAttribute('aria-label');
      lb.classList.add('o');
    };
    gg.addEventListener('click', function (e) { var t = e.target.closest('.gi'); if (t) openLb(vis().indexOf(t)); });
    gg.addEventListener('keydown', function (e) { if (e.key === 'Enter') { var t = e.target.closest('.gi'); if (t) openLb(vis().indexOf(t)); } });
    $('.x', lb).onclick = function () { lb.classList.remove('o'); };
    $('.pv', lb).onclick = function () { openLb(cu - 1); };
    $('.nx', lb).onclick = function () { openLb(cu + 1); };
    lb.addEventListener('click', function (e) { if (e.target === lb) lb.classList.remove('o'); });
    addEventListener('keydown', function (e) {
      if (!lb.classList.contains('o')) return;
      if (e.key === 'Escape') lb.classList.remove('o');
      if (e.key === 'ArrowLeft') openLb(cu - 1);
      if (e.key === 'ArrowRight') openLb(cu + 1);
    });
    var fl = $('#fl');
    if (fl) fl.addEventListener('click', function (e) {
      var b = e.target.closest('button'); if (!b) return;
      $$('button', fl).forEach(function (x) { x.classList.toggle('on', x === b); });
      $$('.gi', gg).forEach(function (t) {
        var ok = b.dataset.f === 'all' || t.dataset.c === b.dataset.f;
        t.style.display = ok ? '' : 'none';
        t.classList.remove('pop');
        if (ok) { t.classList.add('in'); void t.offsetWidth; t.classList.add('pop'); }
      });
    });
  }

  /* ---- Contact: scroll to form feedback ---- */
  var ok = $('#ok');
  if (ok) ok.scrollIntoView({ block: 'center', behavior: 'smooth' });
})();

/* ---- v2: animated counters ---- */
(function () {
  var c = [].slice.call(document.querySelectorAll('.cn'));
  if (!c.length || !('IntersectionObserver' in window)) { c.forEach(function (e) { e.textContent = e.dataset.to; }); return; }
  var io = new IntersectionObserver(function (es) {
    es.forEach(function (x) {
      if (!x.isIntersecting) return;
      io.unobserve(x.target);
      var el = x.target, to = parseFloat(el.dataset.to), dec = el.dataset.to.indexOf('.') > -1, t0 = performance.now();
      (function f(t) {
        var p = Math.min((t - t0) / 1600, 1), v = to * (1 - Math.pow(1 - p, 3));
        el.textContent = dec ? v.toFixed(1) : Math.round(v).toLocaleString('en-IN');
        if (p < 1) requestAnimationFrame(f);
      })(t0);
    });
  }, { threshold: .4 });
  c.forEach(function (e) { io.observe(e); });
})();
