/**
 * Custom Mouse Helper (cursor)
 * - A small dot that sticks tight to the real pointer
 * - A larger ring that trails behind with smooth lag (lerp)
 * - Ring grows + highlights when hovering links/buttons
 * - Automatically disabled on touch devices (no mouse)
 */

(function () {
  // Skip entirely on touch/coarse-pointer devices — there's no mouse to help with
  const hasFinePointer = window.matchMedia('(pointer: fine)').matches;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!hasFinePointer || prefersReducedMotion) return;

  // Build the cursor markup
  const dot = document.createElement('div');
  dot.className = 'mouse-helper-dot';

  const ring = document.createElement('div');
  ring.className = 'mouse-helper-ring';

  document.addEventListener('DOMContentLoaded', function () {
    document.body.appendChild(dot);
    document.body.appendChild(ring);
    document.body.classList.add('has-mouse-helper');
  });

  // Real pointer position (updated instantly)
  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;

  // Ring position (eased toward the pointer every frame = the "smoother")
  let ringX = mouseX;
  let ringY = mouseY;

  const RING_EASE = 0.16; // lower = laggier/smoother, higher = snappier

  window.addEventListener('mousemove', function (e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
    dot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0) translate(-50%, -50%)`;
  });

  function animateRing() {
    ringX += (mouseX - ringX) * RING_EASE;
    ringY += (mouseY - ringY) * RING_EASE;
    ring.style.transform = `translate3d(${ringX}px, ${ringY}px, 0) translate(-50%, -50%)`;
    requestAnimationFrame(animateRing);
  }
  requestAnimationFrame(animateRing);

  // Hide the helper when the pointer leaves the window
  document.addEventListener('mouseleave', function () {
    dot.style.opacity = '0';
    ring.style.opacity = '0';
  });
  document.addEventListener('mouseenter', function () {
    dot.style.opacity = '1';
    ring.style.opacity = '1';
  });

  // Grow + highlight on interactive elements
  const hoverSelector = 'a, button, .btn, input, textarea, select, [role="button"], .swiper-slide, label';

  document.addEventListener('mouseover', function (e) {
    if (e.target.closest(hoverSelector)) {
      document.body.classList.add('mouse-helper-active');
    }
  });
  document.addEventListener('mouseout', function (e) {
    if (e.target.closest(hoverSelector)) {
      document.body.classList.remove('mouse-helper-active');
    }
  });

  // Small "press" feedback
  window.addEventListener('mousedown', function () {
    document.body.classList.add('mouse-helper-click');
  });
  window.addEventListener('mouseup', function () {
    document.body.classList.remove('mouse-helper-click');
  });
})();