/* Roamers — Christmas & New Year page behaviour.
   Vanilla, no dependencies. Scoped to elements inside .cny. */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------------------------------------------------------- snowfall ---- */
  /* Built in JS so the markup stays clean and it can be skipped entirely
     when the visitor prefers reduced motion. */
  function initSnow() {
    if (reduceMotion) return;

    Array.prototype.forEach.call(document.querySelectorAll('[data-cny-snow]'), function (host) {
      var count = parseInt(host.dataset.cnySnow, 10) || 26;
      var frag = document.createDocumentFragment();

      for (var i = 0; i < count; i++) {
        var flake = document.createElement('span');
        var size = (Math.random() * 5 + 2).toFixed(1);
        flake.style.width = size + 'px';
        flake.style.height = size + 'px';
        flake.style.left = (Math.random() * 100).toFixed(2) + '%';
        flake.style.opacity = (Math.random() * 0.45 + 0.35).toFixed(2);
        flake.style.animationDuration = (Math.random() * 9 + 8).toFixed(1) + 's';
        flake.style.animationDelay = (-Math.random() * 14).toFixed(1) + 's';
        frag.appendChild(flake);
      }
      host.appendChild(frag);
    });
  }

  /* -------------------------------------------------------- ornaments ---- */
  /* Hanging baubles across the top edge of a section. */
  function initBaubles() {
    var tones = ['', ' cny-bauble--gold', ' cny-bauble--pine', ' cny-bauble--cyan'];

    Array.prototype.forEach.call(document.querySelectorAll('[data-cny-baubles]'), function (host) {
      var count = parseInt(host.dataset.cnyBaubles, 10) || 6;
      var html = '';

      for (var i = 0; i < count; i++) {
        var left = ((i + 0.5) / count) * 100;
        var drop = 14 + ((i % 3) * 11);
        var tone = tones[i % tones.length];
        var delay = (i * 0.45).toFixed(2);

        html +=
          '<span class="cny-bauble' + tone + '" style="left:' + left.toFixed(2) + '%;' +
          'animation-delay:' + delay + 's">' +
          '<svg viewBox="0 0 26 62" aria-hidden="true">' +
          '<path d="M13 0v' + drop + '" stroke="currentColor" stroke-width="1.4" opacity=".55"/>' +
          '<rect x="10" y="' + drop + '" width="6" height="4" rx="1" fill="currentColor" opacity=".8"/>' +
          '<circle cx="13" cy="' + (drop + 12) + '" r="8" fill="currentColor"/>' +
          '<path d="M6.5 ' + (drop + 10) + 'c4 2 9 2 13 0" stroke="#fff" stroke-opacity=".45" stroke-width="1.4" fill="none"/>' +
          '</svg></span>';
      }
      host.innerHTML = html;
    });
  }

  /* ---------------------------------------------------------- reveal ---- */
  function initReveal() {
    var items = document.querySelectorAll('.cny-reveal');
    if (!items.length) return;

    if (reduceMotion || !('IntersectionObserver' in window)) {
      Array.prototype.forEach.call(items, function (el) { el.classList.add('is-in'); });
      return;
    }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-in');
        io.unobserve(entry.target);
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    Array.prototype.forEach.call(items, function (el) { io.observe(el); });
  }

  /* ------------------------------------------------------------- faq ---- */
  function initFaq() {
    Array.prototype.forEach.call(document.querySelectorAll('.cny-faq__q'), function (btn) {
      btn.addEventListener('click', function () {
        var panel = document.getElementById(btn.getAttribute('aria-controls'));
        var item = btn.closest('.cny-faq__item');
        var open = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', open ? 'false' : 'true');
        if (panel) panel.setAttribute('data-open', open ? 'false' : 'true');
        /* Mirrors the state as a class so the open styling does not depend
           on :has() being supported. */
        if (item) item.classList.toggle('is-open', !open);
      });
    });
  }

  /* -------------------------------------------------------- explorer ---- */
  function initExplorer() {
    var explorer = document.querySelector('[data-cny-explorer]');
    if (!explorer) return;

    var cards = Array.prototype.slice.call(explorer.querySelectorAll('.cny-card'));
    var pills = Array.prototype.slice.call(explorer.querySelectorAll('.cny-pill'));
    var selects = Array.prototype.slice.call(explorer.querySelectorAll('.cny-select select'));
    var count = explorer.querySelector('[data-cny-count]');
    var reset = explorer.querySelector('.cny-reset');

    var blank = { type: 'all', mood: 'all', budget: 'all', len: 'all', ex: 'all' };
    var state = Object.assign({}, blank);

    function matches(card) {
      if (state.type !== 'all' && card.dataset.types.split(' ').indexOf(state.type) === -1) return false;
      if (state.mood !== 'all' && card.dataset.moods.split(' ').indexOf(state.mood) === -1) return false;
      if (state.ex !== 'all' && card.dataset.ex.split(' ').indexOf(state.ex) === -1) return false;
      if (state.budget !== 'all' && card.dataset.budget !== state.budget) return false;
      if (state.len !== 'all' && card.dataset.len !== state.len) return false;
      return true;
    }

    function apply() {
      var shown = 0;
      cards.forEach(function (card) {
        var ok = matches(card);
        card.classList.toggle('is-hidden', !ok);
        if (ok) shown++;
      });

      explorer.classList.toggle('is-empty', shown === 0);
      if (count) {
        count.textContent = shown === cards.length
          ? 'Showing all ' + cards.length + ' trips'
          : 'Showing ' + shown + ' of ' + cards.length + ' trips';
      }

      pills.forEach(function (p) {
        p.setAttribute('aria-pressed', p.dataset.type === state.type ? 'true' : 'false');
      });
    }

    pills.forEach(function (pill) {
      pill.addEventListener('click', function () {
        state.type = pill.dataset.type;
        state.mood = 'all';
        apply();
      });
    });

    selects.forEach(function (sel) {
      sel.addEventListener('change', function () {
        state[sel.dataset.filter] = sel.value;
        apply();
      });
    });

    if (reset) {
      reset.addEventListener('click', function () {
        state = Object.assign({}, blank);
        selects.forEach(function (s) { s.value = 'all'; });
        apply();
      });
    }

    /* Category chips, mood tiles and the New Year CTA all drive this filter. */
    function applyExternal(key, value) {
      state = Object.assign({}, blank);
      selects.forEach(function (s) { s.value = 'all'; });
      state[key] = value;
      apply();
      explorer.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
    }

    Array.prototype.forEach.call(document.querySelectorAll('[data-cny-type]'), function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        applyExternal('type', el.dataset.cnyType);
      });
    });

    Array.prototype.forEach.call(document.querySelectorAll('[data-cny-mood]'), function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        applyExternal('mood', el.dataset.cnyMood);
      });
    });

    apply();
  }

  function init() {
    initSnow();
    initBaubles();
    initReveal();
    initFaq();
    initExplorer();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
