<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Vertical Slick Slider</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

<style>
.serv-slider-flex{
  display:flex;
  align-items:stretch;
  gap:18px;
}
.serv-slider{ flex:1; min-width:0; }

.progress-rail{
  flex:0 0 auto;
  width:3px;
  background:#e6e6e6;
  border-radius:3px;
  position:relative;
  align-self:stretch;
  margin:6px 0;
}
.progress-thumb{
  position:absolute;
  top:0; left:50%;
  transform:translateX(-50%);
  width:3px;
  border-radius:3px;
  background:linear-gradient(180deg,#c11221,#7a0d17);
  transition:height 0.5s cubic-bezier(.4,0,.2,1);
}
.progress-dot{
  position:absolute;
  left:50%;
  width:9px; height:9px;
  border-radius:50%;
  background:#c11221;
  box-shadow:0 0 0 3px #fff, 0 1px 4px rgba(0,0,0,.25);
  transform:translate(-50%,-50%);
  transition:top 0.5s cubic-bezier(.4,0,.2,1);
}

/* blue "up next" highlight — the only state not already covered by your
   existing .slick-center CSS below */
.serv-box.state-highlight{
  border:1.5px solid #2f6bff;
}

.serv-sect .sectionHeading {
    padding-right: 2rem;
}
.serv-sect {
    overflow: hidden;
}
.serv-box {
    display: flex !important;
    align-items: center;
    gap: 30px;
    background: #FAFAFA;
    padding: 2rem 5rem 2rem 2rem;
    border-radius: 15px;
    border: 1px solid #F2F2F2;
    position: relative;
    overflow: hidden;
    transition: .3s all ease-in-out;
}

.serv-box figure {
    flex: 0 0 12%;
    filter: grayscale(1);
    transition: .3s all ease-in-out;
    height: 60px;
    width: 60px;
    background: #DEDEDE;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
}

.serv-box h3 {
    font-size: 1.325rem;
    font-family: var(--accent-family);
    font-weight: 700;
    transition: .3s all ease-in-out;
}

.serv-box p {
    color: #000;
    opacity: 60%;
    font-size: 1rem;
    margin: 10px 0;
    transition: .3s all ease-in-out;
}

.serv-box a {
    color: #000000;
    font-size: 1rem;
    font-family: 'lato';
    font-weight: 600;
    opacity: 50%;
    display: flex;
    align-items: center;
    gap: 7px;
    transition: .3s all ease-in-out;
}

.serv-cont h1 {
    color: #B5B5B5;
    font-family: var(--accent-family);
    font-size: 276px;
    position: absolute;
    right: -14px;
    top: 0;
    line-height: 0.7;
    margin: 0;
    opacity: 22%;
    transition: .3s all ease-in-out;
}

.serv-slider .slick-slide {
    margin: 12px 0;
}

.serv-slider {
    margin: 100px 0 0;
}

.serv-slider .slick-slide.slick-current.slick-active.slick-center .serv-box {
    background: linear-gradient(63deg, #C90E0E, #630707);
    margin-left: -3rem;
}

.serv-slider .slick-list {
    padding-left: 3rem !important;
}

.serv-slider .slick-slide.slick-current.slick-active.slick-center .serv-box figure {
    filter: grayscale(0);
    background: white;
}

.serv-slider .slick-slide.slick-current.slick-active.slick-center .serv-box p,
.serv-slider .slick-slide.slick-current.slick-active.slick-center .serv-box h3,
.serv-slider .slick-slide.slick-current.slick-active.slick-center .serv-box a {
    color: white;
    opacity: 1;
}

.serv-slider .slick-slide.slick-current.slick-active.slick-center .serv-cont h1 {
    opacity: 55%;
    color: white;
}

.servElm {
    position: absolute;
    bottom: -280px;
    left: 0;
}
</style>
</head>
<body>

<div class="servs-slider-flex">
  <div class="servs-slider">
    <div class="serv-box">
      <figure>
        <img src="assets/images/about/serv-1.webp" class="img-fluid" alt="">
      </figure>
      <div class="serv-cont">
        <h1>1</h1>
        <h3>Shopify Dropshipping</h3>
        <p>A custom-built Shopify store with automated sourcing and order flow — faster, leaner, and profitable.</p>
        <a href="javascript:;">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>

    <div class="serv-box">
      <figure>
        <img src="assets/images/about/serv-2.webp" class="img-fluid" alt="">
      </figure>
      <div class="serv-cont">
        <h1>2</h1>
        <h3>Shopify Dropshipping</h3>
        <p>A custom-built Shopify store with automated sourcing and order flow — faster, leaner, and profitable.</p>
        <a href="javascript:;">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>

    <div class="serv-box">
      <figure>
        <img src="assets/images/about/serv-3.webp" class="img-fluid" alt="">
      </figure>
      <div class="serv-cont">
        <h1>3</h1>
        <h3>Shopify Dropshipping</h3>
        <p>A custom-built Shopify store with automated sourcing and order flow — faster, leaner, and profitable.</p>
        <a href="javascript:;">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>

    <div class="serv-box">
      <figure>
        <img src="assets/images/about/serv-4.webp" class="img-fluid" alt="">
      </figure>
      <div class="serv-cont">
        <h1>4</h1>
        <h3>Shopify Dropshipping</h3>
        <p>A custom-built Shopify store with automated sourcing and order flow — faster, leaner, and profitable.</p>
        <a href="javascript:;">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>

    <div class="serv-box">
      <figure>
        <img src="assets/images/about/serv-5.webp" class="img-fluid" alt="">
      </figure>
      <div class="serv-cont">
        <h1>5</h1>
        <h3>Shopify Dropshipping</h3>
        <p>A custom-built Shopify store with automated sourcing and order flow — faster, leaner, and profitable.</p>
        <a href="javascript:;">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>

    <div class="serv-box">
      <figure>
        <img src="assets/images/about/serv-6.webp" class="img-fluid" alt="">
      </figure>
      <div class="serv-cont">
        <h1>6</h1>
        <h3>Shopify Dropshipping</h3>
        <p>A custom-built Shopify store with automated sourcing and order flow — faster, leaner, and profitable.</p>
        <a href="javascript:;">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>
  </div>

  <div class="progress-rail">
    <div class="progress-thumb"></div>
    <div class="progress-dot"></div>
  </div>
</div>

<!-- jQuery + Slick load synchronously (no defer) so the inline script below
     can rely on $ and .slick() being ready immediately -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
<!-- <script src="assets/js/jquery.appear.js" defer></script> -->
<script src="assets/js/aos.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script src="assets/js/script.js" defer></script>

<script>
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
</script>

</body>
</html>