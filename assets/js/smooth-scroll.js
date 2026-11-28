/* Desktop smoothing with native touch and reduced-motion fallback. */
(() => {
  'use strict';
  const reduced = matchMedia('(prefers-reduced-motion: reduce)');
  const pointer = matchMedia('(pointer: fine)');
  let lenis = null, frame = 0;
  function tick(time) {
    frame = 0;
    if (!lenis || document.hidden) return;
    lenis.raf(time);
    frame = requestAnimationFrame(tick);
  }
  function syncLock() {
    if (!lenis) return;
    const locked = document.body.classList.contains('modal-open') || document.body.style.overflow === 'hidden';
    if (locked && !lenis.isStopped) lenis.stop();
    else if (!locked && lenis.isStopped) lenis.start();
  }
  function configure() {
    cancelAnimationFrame(frame);
    frame = 0;
    if (lenis) lenis.destroy();
    lenis = null;
    window.lenisSmoothScroll = null;
    if (reduced.matches || !pointer.matches || typeof Lenis === 'undefined') return;
    lenis = new Lenis({
      lerp: 0.1, smoothWheel: true, syncTouch: false, wheelMultiplier: 1,
      prevent: node => node.matches('.modal, #offcanvasMenu, textarea, select, [data-lenis-prevent]')
    });
    window.lenisSmoothScroll = lenis;
    syncLock();
    if (!document.hidden) frame = requestAnimationFrame(tick);
  }
  new MutationObserver(syncLock).observe(document.body, {attributes: true, attributeFilter: ['class', 'style']});
  document.addEventListener('click', event => {
    const link = event.target.closest('a[href^="#"]');
    if (!link || event.defaultPrevented || event.button !== 0 || event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
    if (link.hasAttribute('data-bs-toggle') || link.hasAttribute('download') || link.target === '_blank') return;
    const hash = link.getAttribute('href');
    if (!hash || hash === '#') return;
    let target;
    try { target = document.getElementById(decodeURIComponent(hash.slice(1))); } catch { return; }
    if (!target) return;
    event.preventDefault();
    if (lenis && !lenis.isStopped) lenis.scrollTo(target, {offset: -90});
    else target.scrollIntoView({behavior: reduced.matches ? 'instant' : 'smooth'});
    history.pushState(null, '', location.pathname + location.search + hash);
  });
  document.addEventListener('visibilitychange', () => {
    cancelAnimationFrame(frame);
    frame = 0;
    if (lenis && !document.hidden) frame = requestAnimationFrame(tick);
  });
  reduced.addEventListener('change', configure);
  pointer.addEventListener('change', configure);
  configure();
})();
