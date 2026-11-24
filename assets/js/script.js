
function startAnimation() {
  AOS.init({
    easing: 'ease',
    duration: 1200,
    mirror: false,
    disable: function () {
      return window.innerWidth <= 1024;
    }
  });
}

startAnimation();


function initSerIncome() {
    const AUTOPLAY_MS = 5000;
    const section = document.getElementById('ser-income');
    const list = document.getElementById('ser-income-list');
    const items = Array.from(list.querySelectorAll('.ser-income-item'));
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)');
    let current = 0, timer = null, inView = false;

    function show(index, focus) {
      current = (index + items.length) % items.length;
      items.forEach(function (li, k) {
        const on = k === current;
        const btn = li.querySelector('.ser-income-hit');
        let label = 'Step ' + (k + 1) + ': ' + li.querySelector('h3').textContent;
        if (on) label += '. ' + li.querySelector('p').textContent;
        li.classList.toggle('ser-income-on', on);
        btn.setAttribute('aria-expanded', on);
        btn.setAttribute('aria-label', label);
        btn.tabIndex = on ? 0 : -1;
      });
      list.style.setProperty('--cols', items.map(function (_, k) { return k === current ? '1fr' : 'var(--collapsed)'; }).join(' '));
      if (focus) items[current].querySelector('.ser-income-hit').focus();
    }

    function stop() { clearInterval(timer); timer = null; section.classList.remove('ser-income-playing'); }
    function play() {
      stop();
      if (reduce.matches || !inView || document.hidden) return;
      section.style.setProperty('--dur', AUTOPLAY_MS + 'ms');
      section.classList.add('ser-income-playing');
      timer = setInterval(function () { show(current + 1); }, AUTOPLAY_MS);
    }

    list.addEventListener('click', function (e) {
      const btn = e.target.closest('.ser-income-hit');
      if (btn) { show(items.indexOf(btn.closest('.ser-income-item'))); play(); }
    });
    list.addEventListener('keydown', function (e) {
      const keys = { ArrowRight: 1, ArrowDown: 1, ArrowLeft: -1, ArrowUp: -1 };
      if (e.key in keys) { e.preventDefault(); show(current + keys[e.key], true); }
      else if (e.key === 'Home') { e.preventDefault(); show(0, true); }
      else if (e.key === 'End') { e.preventDefault(); show(items.length - 1, true); }
    });
    section.addEventListener('focusin', function (e) { if (e.target.matches(':focus-visible')) stop(); });
    section.addEventListener('focusout', play);
    document.addEventListener('visibilitychange', function () { document.hidden ? stop() : play(); });
    new IntersectionObserver(function (entries) {
      inView = entries[0].isIntersecting;
      if (inView) section.classList.add('ser-income-ready');
      inView ? play() : stop();
    }, { threshold: 0.4 }).observe(section);
  }
  initSerIncome();


function initMilestonesSlider(){
    const DURATION = 4000; // ms each tab stays active
    const FADE = 350;      // ms image fade duration

    const tabs = document.querySelectorAll('.tab');
    const dashImg = document.getElementById('dashImg');
    let current = 0;
    let timer = null;

    function showImage(src){
      dashImg.classList.add('fade-out');
      setTimeout(() => {
        dashImg.src = src;
        dashImg.classList.remove('fade-out');
      }, FADE);
    }

    function setActive(i){
      tabs.forEach((t, idx) => {
        t.classList.toggle('active', idx === i);
        const bar = t.querySelector('.progress');
        bar.style.transition = 'width .35s ease';
        bar.style.width = '0%';
      });
      setTimeout(() => {
        const bar = tabs[i].querySelector('.progress');
        bar.style.transition = `width ${DURATION - 350}ms linear`;
        bar.style.width = '100%';
      }, 350);
      showImage(tabs[i].dataset.image);
    }

    function goTo(i){
      current = i;
      setActive(current);
      restart();
    }

    function next(){
      current = (current + 1) % tabs.length;
      setActive(current);
    }

    function restart(){
      clearInterval(timer);
      timer = setInterval(next, DURATION);
    }

    tabs.forEach((t, i) => t.addEventListener('click', () => goTo(i)));

    // start the first tab's bar immediately
    const firstBar = tabs[0].querySelector('.progress');
    firstBar.style.transition = `width ${DURATION}ms linear`;
    requestAnimationFrame(() => { firstBar.style.width = '100%'; });
    restart();

    document.getElementById('tabs').addEventListener('mouseenter', () => clearInterval(timer));
    document.getElementById('tabs').addEventListener('mouseleave', restart);
  }

  initMilestonesSlider();


function easeOutExpo(t) {
    return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
  }

  function animateCounter(el, delay = 0) {
    const target   = parseFloat(el.dataset.target);
    const decimals = parseInt(el.dataset.decimals ?? 0);
    const prefix   = el.dataset.prefix ?? '';
    const suffix   = el.dataset.suffix ?? '';
    const duration = 1600;

    setTimeout(() => {
      el.classList.add('animated');
      const start = performance.now();

      function step(now) {
        const elapsed  = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const eased    = easeOutExpo(progress);
        const value    = (target * eased).toFixed(decimals);
        el.textContent = prefix + value + suffix;
        if (progress < 1) requestAnimationFrame(step);
        else el.textContent = prefix + target.toFixed(decimals) + suffix;
      }

      requestAnimationFrame(step);
    }, delay);
  }

  // Intersection Observer — fires when strip enters viewport
  const strip = document.querySelector('.stats-strip');
  const counters = document.querySelectorAll('.stat-value[data-target]');

  let triggered = false;
  const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting && !triggered) {
      triggered = true;
      counters.forEach((el, i) => animateCounter(el, i * 120));
    }
  }, { threshold: 0.3 });

  observer.observe(strip);



const hamburgerBtn = document.getElementById('hamburgerBtn');
  const closeBtn     = document.getElementById('closeBtn');
  const offcanvas    = document.getElementById('offcanvasMenu');
  const overlay      = document.getElementById('overlay');

  function openMenu(){
    offcanvas.classList.add('active');
    overlay.classList.add('active');
    hamburgerBtn.classList.add('active');
    hamburgerBtn.setAttribute('aria-expanded', 'true');
    offcanvas.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu(){
    offcanvas.classList.remove('active');
    overlay.classList.remove('active');
    hamburgerBtn.classList.remove('active');
    hamburgerBtn.setAttribute('aria-expanded', 'false');
    offcanvas.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    // reset to main level whenever the offcanvas closes
    resetToMainLevel();
  }

  function toggleMenu(){
    offcanvas.classList.contains('active') ? closeMenu() : openMenu();
  }

  hamburgerBtn.addEventListener('click', toggleMenu);
  closeBtn.addEventListener('click', closeMenu);
  overlay.addEventListener('click', closeMenu);

  document.addEventListener('keydown', (e) => {
    if(e.key === 'Escape' && offcanvas.classList.contains('active')){
      closeMenu();
    }
  });

  // Auto-close offcanvas if the viewport is resized past the breakpoint
  window.addEventListener('resize', () => {
    if(window.innerWidth >= 992 && offcanvas.classList.contains('active')){
      closeMenu();
    }
  });

  /* ---------- Mobile sliding submenu panels ---------- */
  const levelMain = document.getElementById('levelMain');

  function resetToMainLevel(){
    levelMain.classList.remove('slide-out');
    document.querySelectorAll('.level-sub.active').forEach(panel => panel.classList.remove('active'));
  }

  // Open a submenu panel: main slides left, target panel slides in from the right
  document.querySelectorAll('.submenu-toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.getElementById(btn.dataset.target);
      if(!target) return;
      levelMain.classList.add('slide-out');
      target.classList.add('active');
    });
  });

  // Back button: return the submenu panel to the right, bring main level back
  document.querySelectorAll('[data-back]').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.closest('.level-sub').classList.remove('active');
      levelMain.classList.remove('slide-out');
    });
  });

  /* ---------- Desktop dropdown: keep accessible via click too (touch laptops) ---------- */
  document.querySelectorAll('.desktop-nav > ul > li').forEach(li => {
    const trigger = li.querySelector('.dropdown-trigger');
    if(!trigger) return;
    trigger.addEventListener('click', (e) => {
      if(li.querySelector('.dropdown')){
        e.preventDefault();
        const isOpen = li.classList.contains('open');
        document.querySelectorAll('.desktop-nav > ul > li.open').forEach(o => o.classList.remove('open'));
        if(!isOpen) li.classList.add('open');
      }
    });
  });
  document.addEventListener('click', (e) => {
    if(!e.target.closest('.desktop-nav > ul > li')){
      document.querySelectorAll('.desktop-nav > ul > li.open').forEach(o => o.classList.remove('open'));
    }
  });

$(document).ready(function () {

    // Testimonial slider
    $('.test-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,   // time each slide stays visible (ms)
        speed: 600,            // transition animation duration (ms)
        infinite: true,
        dots: false,
        arrows: true,
        pauseOnHover: true,    // optional: lets people read without it moving
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    });
});

$(function () {
    $('.test-slider-two').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        infinite: true,
        dots: false,
        speed: 5000,
        cssEase: 'linear',
        arrows: false,
        pauseOnFocus: true,
        pauseOnHover: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});

$(function () {
  $('.logo-slider').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    arrows: false,
    swipe: false,
    slidesToShow: 4,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false,
    rtl: true,
    responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 570,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }
        ]
  });
});

$(function () {
  $('.logo-slider-two').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    arrows: false,
    swipe: false,
    slidesToShow: 4,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 570,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }
        ]
  });
});

// $(function () {
//   $('.serv-slider').slick({
//     autoplay: true,
//     autoplaySpeed: 0,
//     speed: 2000,
//     arrows: false,
//     swipe: false,
//     slidesToShow: 3,
//     vertical: true,
//     centerMode: true
//   });
// });

$(function () {
  $('.serv-slider').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 2000,
    arrows: false,
    swipe: false,
    slidesToShow: 3,
    vertical: true,
    centerMode: true
  });

  var $slider = $('.serv-slider');
  var $thumb = $('.progress-thumb');
  var $dot = $('.progress-dot');
  var total = $slider.slick('getSlick').slideCount; // original slide count, ignores clones

  function updateProgress(currentSlide){
    var pct = total > 1 ? (currentSlide / (total - 1)) * 100 : 100;
    $thumb.css('height', pct + '%');
    $dot.css('top', pct + '%');
  }

  // only the blue "highlight" state is JS-driven — the red active card
  // is already handled by your own .slick-center CSS above
  function applyStates(currentSlide){
    $slider.find('.serv-box').removeClass('state-highlight');
    $slider.find('.slick-slide').each(function(){
      var idx = parseInt($(this).attr('data-slick-index'), 10);
      var relative = ((idx - currentSlide) % total + total) % total;
      if (relative === total - 1) {
        $(this).find('.serv-box').addClass('state-highlight');
      }
    });
  }

  $slider.on('afterChange', function(event, slick, currentSlide){
    updateProgress(currentSlide);
    applyStates(currentSlide);
  });

  // initial paint
  updateProgress(0);
  applyStates(0);
});



document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.faq-item');

  function setMaxHeight(item, expand){
    const answer = item.querySelector('.faq-answer');
    if(expand){
      answer.style.maxHeight = answer.scrollHeight + 'px';
    } else {
      answer.style.maxHeight = '0px';
    }
  }

  // initialize open state for the active item
  items.forEach(item => {
    if(item.classList.contains('active')){
      setMaxHeight(item, true);
    }
  });

  items.forEach(item => {
    const btn = item.querySelector('.faq-question');
    btn.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // close all
      items.forEach(other => {
        other.classList.remove('active');
        setMaxHeight(other, false);
      });

      // open clicked one if it wasn't already open
      if(!isActive){
        item.classList.add('active');
        setMaxHeight(item, true);
      }
    });
  });

  // keep open answer height correct on resize
  window.addEventListener('resize', () => {
    items.forEach(item => {
      if(item.classList.contains('active')){
        setMaxHeight(item, true);
      }
    });
  });
});


document.addEventListener('DOMContentLoaded', function () {
  const pills = document.querySelectorAll('.pill-tag');
  pills.forEach(pill => {
    pill.addEventListener('click', () => {
      pill.classList.toggle('selected');
    });
  });
 
  const form = document.getElementById('inquiryForm');
  form.addEventListener('submit', function(e){
    e.preventDefault();
 
    const selectedPlatforms = Array.from(document.querySelectorAll('.pill-tag.selected'))
      .map(p => p.dataset.value);
 
    const data = {
      platforms: selectedPlatforms,
      fullName: form.fullName.value,
      email: form.email.value,
      phone: form.phone.value,
      budget: form.budget.value,
      message: form.message.value
    };
 
    console.log('Inquiry submitted:', data);
    alert('Thanks! Your inquiry has been submitted.');
    // form.reset();
  });
});


$(document).ready(function() {
    function checkSlider() {
        if ($(window).width() <= 991) {
            if (!$('.why-slider').hasClass('slick-initialized')) {
                $('.why-slider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    responsive: [
                      {
                          breakpoint: 480,
                          settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                          }
                      }
                  ]
                });
            }
        }
    }

    checkSlider();
    $(window).resize(checkSlider);
});

$(document).ready(function() {
    function checkSlider() {
        if ($(window).width() <= 991) {
            if (!$('.how-slider').hasClass('slick-initialized')) {
                $('.how-slider').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    responsive: [
                      {
                          breakpoint: 768,
                          settings: {
                              slidesToShow: 2,
                              slidesToScroll: 1,
                          }
                      },
                      {
                          breakpoint: 480,
                          settings: {
                              slidesToShow: 2,
                              slidesToScroll: 1,
                          }
                      }
                  ]
                });
            }
        }
    }

    checkSlider();
    $(window).resize(checkSlider);
});


$(document).ready(function() {
    function checkSlider() {
        if ($(window).width() <= 991) {
            if (!$('.found-slider').hasClass('slick-initialized')) {
                $('.found-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    responsive: [
                      {
                          breakpoint: 768,
                          settings: {
                              slidesToShow: 2,
                              slidesToScroll: 1,
                          }
                      },
                      {
                          breakpoint: 480,
                          settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                          }
                      }
                  ]
                });
            }
        }
    }

    checkSlider();
    $(window).resize(checkSlider);
});
$(document).ready(function() {
    function checkSlider() {
        if ($(window).width() <= 991) {
            if (!$('.proof-slider').hasClass('slick-initialized')) {
                $('.proof-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    responsive: [
                      {
                          breakpoint: 768,
                          settings: {
                              slidesToShow: 2,
                              slidesToScroll: 1,
                          }
                      },
                      {
                          breakpoint: 480,
                          settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                          }
                      }
                  ]
                });
            }
        }
    }

    checkSlider();
    $(window).resize(checkSlider);
});

$(document).ready(function() {
    function checkSlider() {
        if ($(window).width() <= 991) {
            if (!$('.revenue-slider').hasClass('slick-initialized')) {
                $('.revenue-slider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    responsive: [
                      {
                          breakpoint: 768,
                          settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                          }
                      },
                      {
                          breakpoint: 480,
                          settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                          }
                      }
                  ]
                });
            }
        }
    }

    checkSlider();
    $(window).resize(checkSlider);
});


$(document).ready(function() {
    function checkSlider() {
        if ($(window).width() <= 991) {
            if (!$('.step-slider').hasClass('slick-initialized')) {
                $('.step-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    responsive: [
                      {
                          breakpoint: 768,
                          settings: {
                              slidesToShow: 2,
                              slidesToScroll: 1,
                          }
                      },
                      {
                          breakpoint: 480,
                          settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                          }
                      }
                  ]
                });
            }
        }
    }

    checkSlider();
    $(window).resize(checkSlider);
});


$(document).ready(function() {
    function checkSlider() {
        if ($(window).width() <= 575) {
            if (!$('.problem-slider').hasClass('slick-initialized')) {
                $('.problem-slider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                });
            }
        }
    }

    checkSlider();
    $(window).resize(checkSlider);
});



$(document).ready(function() {
  function buildSequence(text, star){
    const seq = document.createElement('div');
    seq.className = 'marquee-seq';
 
    const REPEATS = 8; // items per half; duplicated again below for a seamless loop
    for(let i = 0; i < REPEATS; i++){
      const item = document.createElement('span');
      item.className = 'item ' + (i % 2 === 0 ? 'black' : 'red');
      item.innerHTML = `<span class="star"><i class="fa-solid fa-asterisk"></i></span><span class="word"></span>`;
      item.querySelector('.word').textContent = text;
      seq.appendChild(item);
    }
    return seq;
  }
 
  function initMarquee(wrap){
    const track = wrap.querySelector('.marquee-track');
    const text  = wrap.dataset.text  || 'Your Text Here';
    const speed = wrap.dataset.speed || '18';
    const star  = wrap.dataset.star  || '\u2726'; // ✦
 
    track.style.animationDuration = speed + 's';
 
    // two identical sequences back to back -> translateX(-50%) loops seamlessly
    track.appendChild(buildSequence(text, star));
    track.appendChild(buildSequence(text, star));
  }
 
  // Auto-initialize every marquee on the page, however many there are.
  document.querySelectorAll('[data-marquee]').forEach(initMarquee);

});



(function(){
  // Runs once per widget instance found on the page, so it's safe even if
  // this snippet gets pasted more than once.
  function initMocCarousel(root){
    if (root.dataset.mocInitialized) return; // guard against double-init
    root.dataset.mocInitialized = 'true';
 
    const orbit = root.querySelector('.moc-orbit');
    const comet = root.querySelector('.moc-comet');
    const activeLabel = root.querySelector('.moc-active-label');
 
    // ---- Replace the `img` paths below with your own logo files ----
    const tags = [
      { img:'assets/images/hero/g1.webp',  angle:-65 },
      { img:'assets/images/hero/g2.webp',  angle:-25  },
      { img:'assets/images/hero/g3.webp',  angle:40  },
      { img:'assets/images/hero/g4.webp',  angle:85 },
      { img:'assets/images/hero/g5.webp',  angle:120 },
    ];
    // -------------------------------------------------------------
 
    const RADIUS_PCT = 47;        // must match the SVG circle's r value
    const ACTIVE_THRESHOLD = 13;  // degrees within which a tag counts as "reached"
    const SPEED = 0.35;           // degrees per animation frame
 
    const tagEls = [];
 
    function positionAtAngle(el, angleDeg, radiusPct){
      const rad = (angleDeg - 90) * Math.PI / 180;
      const x = 50 + radiusPct * Math.cos(rad);
      const y = 50 + radiusPct * Math.sin(rad);
      el.style.left = x + '%';
      el.style.top = y + '%';
    }
 
    function angularDistance(a, b){
      let d = Math.abs(a - b) % 360;
      if (d > 180) d = 360 - d;
      return d;
    }
 
    tags.forEach((t) => {
      const el = document.createElement('div');
      el.className = 'moc-tag';
      el.innerHTML =
        '<img src="' + t.img + '" alt="' + t.name + '">';
      positionAtAngle(el, t.angle, RADIUS_PCT);
      orbit.appendChild(el);
      tagEls.push(el);
    });
 
    let angle = tags[0] ? tags[0].angle : 0;
 
    function tick(){
      angle = (angle + SPEED) % 360;
 
      const rad = (angle - 90) * Math.PI / 180;
      const radiusPx = orbit.clientWidth * (RADIUS_PCT / 100);
      const cx = orbit.clientWidth / 2 + radiusPx * Math.cos(rad);
      const cy = orbit.clientHeight / 2 + radiusPx * Math.sin(rad);
      comet.style.transform = 'translate(' + (cx - 7) + 'px, ' + (cy - 7) + 'px)';
 
      let current = null;
      tags.forEach((t, i) => {
        const dist = angularDistance(angle, ((t.angle % 360) + 360) % 360);
        if (dist < ACTIVE_THRESHOLD){
          tagEls[i].classList.add('moc-active');
          current = t;
        } else {
          tagEls[i].classList.remove('moc-active');
        }
      });
 
      if (current && activeLabel) activeLabel.textContent = current.name;
 
      root._mocRaf = requestAnimationFrame(tick);
    }
 
    requestAnimationFrame(tick);
 
    window.addEventListener('resize', () => {
      tags.forEach((t, i) => positionAtAngle(tagEls[i], t.angle, RADIUS_PCT));
    });
  }
 
  document.querySelectorAll('[data-moc-carousel]').forEach(initMocCarousel);
})();



// pop up form dynamic

function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return; // this page has no contact form

    const alertBox = document.getElementById('formAlert');
    const btn      = document.getElementById('submitBtn');
    const spinner  = btn.querySelector('.spinner-border');
    const btnText  = btn.querySelector('.btn-text');

    function showAlert(type, message) {
        alertBox.className = 'col-12 alert alert-' + type;
        alertBox.textContent = message;
    }

    function clearErrors() {
        alertBox.className = 'col-12 alert d-none';
        form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    }

    function setLoading(isLoading) {
        btn.disabled = isLoading;
        spinner.classList.toggle('d-none', !isLoading);
        btnText.textContent = isLoading ? 'Sending...' : 'Submit';
    }

    // After the redirect back to this page, show the success message once
    const params = new URLSearchParams(window.location.search);
    if (params.get('sent') === '1') {
        showAlert('success', 'Thank you! Your message has been sent.');
        params.delete('sent');
        const qs = params.toString();
        history.replaceState(null, '', window.location.pathname + (qs ? '?' + qs : '') + window.location.hash);
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        clearErrors();

        // Browser-side validation first
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }

        setLoading(true);

        try {
            const response = await fetch(form.getAttribute('action'), {
                method: 'POST',
                body: new FormData(form),
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await response.json();

            if (response.ok && data.success) {
                // Reload this same page (keeping any existing query string) and flag success
                const url = new URL(window.location.href);
                url.searchParams.set('sent', '1');
                url.hash = 'contactForm';
                window.location.href = url.toString();
                return;
            } else {
                // Show server-side validation errors next to each field
                form.classList.remove('was-validated');
                if (data.errors) {
                    Object.entries(data.errors).forEach(([field, msg]) => {
                        const input = form.elements[field];
                        if (!input) return;
                        input.classList.add('is-invalid');
                        const feedback = input.parentElement.querySelector('.invalid-feedback');
                        if (feedback) feedback.textContent = msg;
                    });
                }
                showAlert('danger', data.message || 'Something went wrong. Please try again.');
            }
        } catch (err) {
            showAlert('danger', 'Could not send your message. Please check your connection and try again.');
        } finally {
            setLoading(false);
        }
    });
}

// Run once the page is ready. Remove this if you already call initContactForm()
// from your own DOMContentLoaded / $(document).ready block.
document.addEventListener('DOMContentLoaded', initContactForm);


// contact invoice form dynamic
function initInquiryForm() {
    const form = document.getElementById('inquiryForm');
    if (!form) return; // this page has no inquiry form

    const alertBox = document.getElementById('inquiryAlert');
    const btn      = document.getElementById('inquirySubmit');
    const btnText  = btn.querySelector('.btn-text');
    const btnLabel = btnText.textContent;
    const pills    = form.querySelectorAll('.pill-tag');

    // false = pick one platform (across both rows), true = visitor can pick several
    const allowMultiple = false;

    function showAlert(type, message) {
        alertBox.className = 'alert alert-' + type;
        alertBox.textContent = message;
    }

    function hideAlert() {
        alertBox.className = 'alert d-none';
        alertBox.textContent = '';
    }

    function setLoading(isLoading) {
        btn.disabled = isLoading;
        btnText.textContent = isLoading ? 'Sending...' : btnLabel;
    }

    function clearInvalid() {
        form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    }

    function getSelectedPlatforms() {
        return Array.from(form.querySelectorAll('.pill-tag.selected')).map(p => p.dataset.value);
    }

    // Pill buttons (if you already have script that toggles .selected, remove one of the two)
    pills.forEach(function (pill) {
        pill.addEventListener('click', function () {
            if (allowMultiple) {
                pill.classList.toggle('selected');
            } else {
                pills.forEach(p => p.classList.remove('selected'));
                pill.classList.add('selected');
            }
        });
    });

    // Remove the red border as soon as the visitor edits a field
    form.addEventListener('input',  e => e.target.classList.remove('is-invalid'));
    form.addEventListener('change', e => e.target.classList.remove('is-invalid'));

    // After the redirect back to this page, show the success message once
    const params = new URLSearchParams(window.location.search);
    if (params.get('inquirySent') === '1') {
        showAlert('success', 'Thank you! Your inquiry has been sent. We will get back to you soon.');
        params.delete('inquirySent');
        const qs = params.toString();
        history.replaceState(null, '', window.location.pathname + (qs ? '?' + qs : '') + window.location.hash);
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        hideAlert();
        clearInvalid();

        // Browser-side validation (the form has novalidate, so we do it ourselves)
        let firstInvalid = null;
        form.querySelectorAll('input, select, textarea').forEach(function (el) {
            if (!el.checkValidity()) {
                el.classList.add('is-invalid');
                if (!firstInvalid) firstInvalid = el;
            }
        });
        if (firstInvalid) {
            showAlert('danger', 'Please fill in the highlighted fields.');
            firstInvalid.focus();
            return;
        }

        const platforms = getSelectedPlatforms();
        if (platforms.length === 0) {
            showAlert('danger', "Please choose what you're interested in.");
            return;
        }

        setLoading(true);

        try {
            const formData = new FormData(form);
            formData.set('platform', platforms.join(', '));

            const response = await fetch(form.getAttribute('action'), {
                method: 'POST',
                body: formData,
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await response.json();

            if (response.ok && data.success) {
                // Reload this same page (keeping any existing query string) and flag success
                const url = new URL(window.location.href);
                url.searchParams.set('inquirySent', '1');
                url.hash = 'inquiryForm';
                window.location.href = url.toString();
                return;
            }

            // Show server-side validation errors next to each field
            if (data.errors) {
                Object.keys(data.errors).forEach(function (field) {
                    const input = form.elements[field];
                    if (input && input.classList) input.classList.add('is-invalid');
                });
            }
            const platformError = data.errors && data.errors.platform;
            showAlert('danger', platformError || data.message || 'Something went wrong. Please try again.');
        } catch (err) {
            showAlert('danger', 'Could not send your inquiry. Please check your connection and try again.');
        } finally {
            setLoading(false);
        }
    });
}

// Run once the page is ready. Remove this if you already call initInquiryForm()
// from your own DOMContentLoaded / $(document).ready block.
document.addEventListener('DOMContentLoaded', initInquiryForm);