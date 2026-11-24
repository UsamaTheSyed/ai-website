/**
 * Smooth Scrolling
 * Powered by Lenis (https://lenis.darkroom.engineering/)
 * - Buttery smooth inertia scrolling site-wide
 * - Smooth in-page anchor link scrolling (e.g. href="#contact")
 * - Keeps AOS scroll-reveal animations in sync
 * - Respects users who have "reduced motion" enabled
 */

(function () {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // If Lenis failed to load (e.g. offline/blocked CDN) or the user prefers
  // reduced motion, fall back to native smooth scrolling and stop here.
  if (typeof Lenis === 'undefined' || prefersReducedMotion) {
    document.documentElement.style.scrollBehavior = 'smooth';
    return;
  }

  const lenis = new Lenis({
    duration: 1.4,          // scroll "weight" — higher = slower/smoother
    easing: (t) => Math.min(1, 1 - Math.pow(2, -10 * t)), // easeOutExpo
    smoothWheel: true,
    syncTouch: true,        // extends smoothing to touch/trackpad drags too
    wheelMultiplier: 0.9,   // slightly gentler per wheel-tick = less jumpy
    touchMultiplier: 1.2,
    infinite: false,
  });

  // Drive Lenis with requestAnimationFrame
  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  // Note: AOS already listens for the native window "scroll" event on its own,
  // and Lenis moves the real page scroll position by default — so AOS keeps
  // working automatically here. (We previously re-dispatched a synthetic
  // "scroll" event on every Lenis tick to "help" AOS, but Lenis also listens
  // for native scroll events, so that synthetic event fed back into Lenis,
  // which fired again, which dispatched again... an infinite loop. That was
  // both the "Maximum call stack size exceeded" crash and the slow scrolling,
  // since it also ran AOS's expensive full-page refresh on every frame.)

  // Smoothly scroll to in-page anchors (e.g. <a href="#services">)
  document.addEventListener('click', function (e) {
    const link = e.target.closest('a[href^="#"]');
    if (!link) return;

    const targetId = link.getAttribute('href');
    if (!targetId || targetId === '#') return;

    const target = document.querySelector(targetId);
    if (!target) return;

    e.preventDefault();
    lenis.scrollTo(target, {
      offset: -80, // adjust if you have a fixed header that overlaps content
      duration: 1.2,
    });
  });

  // Expose globally in case other scripts want to trigger a smooth scroll
  window.lenisSmoothScroll = lenis;
})();