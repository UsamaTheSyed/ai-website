(() => {
  'use strict';
  const reduced = matchMedia('(prefers-reduced-motion: reduce)');
  if (!('IntersectionObserver' in window)) return;
  // Content stays visible if JavaScript fails. Only opt in after the observer exists.
  const reveal = new IntersectionObserver(entries => {
    entries.forEach(({ target, isIntersecting }) => {
      if (!isIntersecting) return;
      target.classList.remove('motion-pending');
      reveal.unobserve(target);
      setTimeout(() => {
        target.classList.remove('motion-reveal');
        target.style.removeProperty('--reveal-delay');
      }, 1150);
    });
  }, { threshold: 0.08 });
  if (!reduced.matches) {
    document.querySelectorAll('[data-aos]').forEach((el, index) => {
      // Avoid nested reveals and transformed carousel slides.
      if (el.parentElement.closest('[data-aos], .slick-slider')) return;
      el.style.setProperty('--reveal-delay', `${Math.min(index % 3, 2) * 70}ms`);
      el.classList.add('motion-reveal', 'motion-pending');
      reveal.observe(el);
    });
  }

  const sliders = new Map();
  function updateSlider(el) {
    const slick = el.slick;
    if (!slick || slick.unslicked) return;
    const active = sliders.get(el) && !document.hidden && !reduced.matches;
    if (active) {
      // Preserve Slick's own hover/focus pause behavior.
      if (slick.paused) slick.slickPlay();
    } else slick.slickPause();
  }
  const visibility = new IntersectionObserver(entries => {
    entries.forEach(({ target, isIntersecting }) => {
      sliders.set(target, isIntersecting);
      updateSlider(target);
    });
  }, { threshold: 0.01 });
  function trackSlider(el) {
    if (sliders.has(el)) return;
    sliders.set(el, false);
    updateSlider(el);
    visibility.observe(el);
  }
  if (window.jQuery) {
    jQuery(document).on('init reInit', '.slick-slider', function () { trackSlider(this); updateSlider(this); });
    jQuery(() => document.querySelectorAll('.slick-initialized').forEach(trackSlider));
  }
  const decorations = new IntersectionObserver(entries => {
    entries.forEach(({ target, isIntersecting }) => target.classList.toggle('motion-paused', !isIntersecting));
  });
  document.querySelectorAll('[data-marquee], #ser-income').forEach(el => decorations.observe(el));
  document.addEventListener('visibilitychange', () => {
    document.documentElement.classList.toggle('page-paused', document.hidden);
    sliders.forEach((_, el) => updateSlider(el));
  });
  reduced.addEventListener('change', () => {
    if (reduced.matches) {
      document.querySelectorAll('.motion-pending').forEach(el => el.classList.remove('motion-pending'));
      reveal.disconnect();
    }
    sliders.forEach((_, el) => updateSlider(el));
  });
})();
