<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sell Everywhere — Orbit Carousel</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
  <style>
      body {
          background-color: #8d8c8c;
      }
    .moc-widget{
      --moc-bg-deep:#0b0f1a;
      --moc-ring-idle: rgba(255,255,255,0.16);
      --moc-gold:#e79a3d;
      --moc-gold-2:#f6c977;
      --moc-ink:#f5f2ee;
      --moc-muted:#a9a6b8;
      --moc-tag-bg:#f5f2ee;
      --moc-tag-ink:#171321;
  
      position: absolute;
      top: 50%;
      transform: translate(15%, -50%);
    }
      section {
          min-height: 100vh;
          display: flex;
          align-items: end;
          justify-content: center;
      }
    .ban-cont-hero {
          display: flex;
          align-items: center;
          justify-content: center;
      }

      .ban-cont-hero figure {
          position: relative;
          margin: 0;
      }
    .moc-widget *{ box-sizing:border-box; }
  
    .moc-eyebrow{
      font-family:'Space Grotesk', system-ui, sans-serif;
      font-size:12px;
      letter-spacing:0.22em;
      text-transform:uppercase;
      color:var(--moc-gold-2);
      margin:0 0 10px;
      font-weight:600;
    }
    .container {
      max-width: 1570px;
    }
  
    .moc-title{
      font-family:'Space Grotesk', system-ui, sans-serif;
      font-size:clamp(24px, 4.2vw, 36px);
      line-height:1.1;
      font-weight:700;
      margin:0 0 10px;
      letter-spacing:-0.01em;
    }
  
    .moc-sub{
      font-size:14.5px;
      color:var(--moc-muted);
      max-width:420px;
      margin:0 auto 40px;
      line-height:1.5;
    }
  
    .moc-orbit{
      position:relative;
      width:min(100vw, 750px);
      aspect-ratio:1/1;
      margin:0 auto;
    }
  
    .moc-orbit svg{
      position:absolute;
      inset:0;
      width:100%;
      height:100%;
    }
  
    .moc-ring-track{
      fill:none;
      stroke: #C90E0E;
      stroke-width:0.5;
    }
  
    .moc-hub:before {
          content: '';
          height: 117%;
          width: 117%;
          background: transparent;
          position: absolute;
          border: 5px solid white;
          z-index: 11;
          border-radius: 50%;
      }
      .moc-hub:after {
          content: '';
          height: 109%;
          width: 109%;
          background: transparent;
          position: absolute;
          border: 2px solid #f71616;
          z-index: 11;
          border-radius: 50%;
      }
    .moc-hub{
      position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      width:75%;
      aspect-ratio:1/1;
      border-radius:50%;
      background: #041B36;
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow: inset 0 0 30px rgba(0,0,0,0.4), 0 0 40px rgba(231,154,61,0.06);
      /* overflow:hidden; */
    }
  
    .moc-hub img{
      width:55%;
      height:55%;
      object-fit:contain;
      filter: drop-shadow(0 4px 10px rgba(0,0,0,0.4));
    }
  
    .moc-comet{
      position:absolute;
      width:14px;
      height:14px;
      border-radius:50%;
      top:0;
      left:0;
      background: #c90e0e;
      box-shadow:
        0 0 5px 3px rgba(201, 14, 14,0.3),
        0 0 5px 8px rgba(201, 14, 14,0.2);
      pointer-events:none;
      will-change:transform;
    }
  
    .moc-tag{
      position:absolute;
      top:0;
      left:0;
      transform:translate(-50%,-50%) scale(1);
      color:var(--moc-tag-ink);
      transition: transform 0.28s cubic-bezier(.34,1.56,.64,1), box-shadow 0.28s ease;
      z-index:2;
    }
  
    .moc-tag img{
      object-fit:contain;
      border-radius:4px;
      flex-shrink:0;
    }
  
    .moc-tag .moc-dot-ind{
      width:7px;
      height:7px;
      border-radius:50%;
      background:#d9d5e0;
      transition: background 0.25s ease, box-shadow 0.25s ease;
      flex-shrink:0;
    }
  
    .moc-tag.moc-active{
      transform:translate(-50%,-50%) scale(1.16);
      /* box-shadow:0 12px 28px rgba(0,0,0,0.45), 0 0 0 2px var(--moc-gold-2), 0 0 24px rgba(231,154,61,0.55); */
    }
  
    .moc-tag.moc-active .moc-dot-ind{
      background:var(--moc-gold);
      box-shadow:0 0 8px 2px rgba(231,154,61,0.8);
    }
  
    .moc-legend{
      margin-top:34px;
      font-size:12px;
      color:var(--moc-muted);
      letter-spacing:0.03em;
    }
  
    .moc-legend b{ color:var(--moc-gold-2); font-weight:600; }
  
    @media (prefers-reduced-motion: reduce){
      .moc-comet{ transition:none; }
    }
  </style>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="ban-cont-hero">
                    <div class="moc-widget" data-moc-carousel>
                        <div class="moc-orbit">
                            <svg viewBox="0 0 100 100">
                            <circle class="moc-ring-track" cx="50" cy="50" r="47"/>
                            </svg>
                        
                            <div class="moc-hub">
                                <img src="https://placehold.co/120x120/241a2e/f5f2ee?text=Logo" alt="Your brand">
                            </div>
                        
                            <div class="moc-comet"></div>
                        </div>
                        
                    </div>
                    <figure>
                        <img src="assets/images/hero/portrait-woman.webp" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="stage">
  

  <p class="legend">Currently syncing &mdash; <b id="activeLabel">Amazon</b></p>
</div> -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
<!-- <script src="assets/js/jquery.appear.js" defer></script> -->
<script src="assets/js/aos.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script src="assets/js/script.js" defer></script>
<script>
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
</script>



</body>
</html>