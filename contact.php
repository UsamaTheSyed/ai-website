<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('includes/header.php'); ?>

<body class="contact-page">

    <?php include 'includes/menu.php';?>

    <section class="main-banner inner-banner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="banCont">
                        <h1 data-aos="fade-up" data-aos-anchor-placement="top-bottom">Ready To Talk Ecommerce?</h1>
                        <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">Have a question, need help with your ecommerce store, or ready to explore your next move? Syntrax Ai is here to help. Tell us what you’re working on, and our team will help you understand the right next steps for your business.</p>
                        <div class="btn-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="themeBtn">Get my free audit <i class="fa-solid fa-arrow-right-long"></i></a>
                            <a href="reviews.php" class="themeBtn">See Our Testimonials</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logo-marquee">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-12 p-0">
                    <div class="logo-slider" dir="rtl" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="img"><h3><figure><img src="assets/images/logo/logo-white.png" class="img-fluid" alt=""></figure><span>*</span></h3></div>
                        <div class="img"><h3><figure><img src="assets/images/logo/logo-white.png" class="img-fluid" alt=""></figure><span>*</span></h3></div>
                        <div class="img"><h3><figure><img src="assets/images/logo/logo-white.png" class="img-fluid" alt=""></figure><span>*</span></h3></div>
                        <div class="img"><h3><figure><img src="assets/images/logo/logo-white.png" class="img-fluid" alt=""></figure><span>*</span></h3></div>
                        <div class="img"><h3><figure><img src="assets/images/logo/logo-white.png" class="img-fluid" alt=""></figure><span>*</span></h3></div>
                        <div class="img"><h3><figure><img src="assets/images/logo/logo-white.png" class="img-fluid" alt=""></figure><span>*</span></h3></div>
                        <div class="img"><h3><figure><img src="assets/images/logo/logo-white.png" class="img-fluid" alt=""></figure><span>*</span></h3></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="cont-sect">
        <img src="assets/images/testimonials/cnt-elm-one.webp" class="cnt-elm-one" alt="">
        <img src="assets/images/testimonials/cnt-elm-two.webp" class="cnt-elm-two" alt="">
        <div class="container">
            <div class="row justify-content-center g-5">
                <div class="col-xl-5 col-lg-6">
                    <div class="cnt-content">
                        <h3 data-aos="fade-up" data-aos-anchor-placement="top-bottom">Don’t like forms?</h3>
                        <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">Choose the way that works best for you.</p>
                        <div class="cnt-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                            <span><i class="fa-regular fa-calendar cnt-green"></i></span>
                            <span>
                                <h4>Book an appointment</h4>
                                <p>Schedule a time that works best for you.</p>
                            </span>
                            <span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>
                        <div class="cnt-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                            <span><i class="fa-solid fa-phone cnt-pink"></i></span>
                            <span>
                                <h4>Schedule a free call</h4>
                                <p>Talk to our experts and get your questions answered.</p>
                            </span>
                            <span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>
                        <div class="cnt-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                            <span><i class="fa-regular fa-envelope cnt-purple"></i></span>
                            <span>
                                <h4>Email us directly</h4>
                                <p>Send us an email and we'll get back to you.</p>
                            </span>
                            <span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>
                        <div class="cnt-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                            <span><i class="fa-solid fa-magnifying-glass cnt-blue"></i></span>
                            <span>
                                <h4>Get a free audit</h4>
                                <p>Get a free audit of your store and growth opportunities.</p>
                            </span>
                            <span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="cnt-box cnt-box-bef" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                            <span><figure>
                                <img src="assets/images/testimonials/headset-badge.webp" class="img-fluid" alt="">
                            </figure></span>
                            <span>
                                <h4>We're here to help you grow.</h4>
                                <p>Mon - Fri, 9:00 AM - 6:00 PM (EST)</p>
                            </span>
                            <span>
                                <p>Live support</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>Contact</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">We'd love to hear from you.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        No one should be charged for asking questions — our experts are available five days a week, free.
                    </p>

                    <form id="inquiryForm" action="send-inquiry.php" method="POST" novalidate data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="form-label-title">I'm interested in:</div>
                        <div class="pill-group" id="platformPills">
                            <button type="button" class="pill-tag selected" data-value="Amazon">Amazon</button>
                            <button type="button" class="pill-tag" data-value="Shopify">Shopify</button>
                            <button type="button" class="pill-tag" data-value="Walmart">Walmart</button>
                            <button type="button" class="pill-tag" data-value="TikTok">TikTok</button>
                            <button type="button" class="pill-tag" data-value="Etsy">Etsy</button>
                        </div>
                        <div class="pill-group" id="platformPills2">
                            <button type="button" class="pill-tag" data-value="eBay">eBay</button>
                            <button type="button" class="pill-tag" data-value="YouTube">YouTube</button>
                            <button type="button" class="pill-tag" data-value="Other"><i class="bi bi-three-dots"></i> Other</button>
                        </div>
                    
                        <div class="field-row">
                            <div class="field-col">
                                <div class="icon-field">
                                    <i class="bi bi-person field-icon"></i>
                                    <input type="text" class="form-control-custom" placeholder="Full name" name="fullName"
                                        required maxlength="100" autocomplete="name">
                                </div>
                            </div>
                            <div class="field-col">
                                <div class="icon-field">
                                    <i class="bi bi-envelope field-icon"></i>
                                    <input type="email" class="form-control-custom" placeholder="Email address" name="email"
                                        required maxlength="150" autocomplete="email">
                                </div>
                            </div>
                        </div>
                    
                        <div class="field-row">
                            <div class="field-col">
                                <div class="icon-field">
                                    <i class="bi bi-telephone field-icon"></i>
                                    <input type="tel" class="form-control-custom" placeholder="Phone number" name="phone"
                                        pattern="[0-9+\-\s()]{7,20}" autocomplete="tel">
                                </div>
                            </div>
                            <div class="field-col">
                                <div class="icon-field">
                                    <i class="bi bi-bar-chart-line field-icon"></i>
                                    <select class="form-control-custom" name="budget" required>
                                        <option value="" disabled selected hidden>Monthly budget range</option>
                                        <option value="under-1k">Under $1,000</option>
                                        <option value="1k-5k">$1,000 – $5,000</option>
                                        <option value="5k-10k">$5,000 – $10,000</option>
                                        <option value="10k-25k">$10,000 – $25,000</option>
                                        <option value="25k-plus">$25,000+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="field-row">
                            <div class="field-col">
                                <div class="icon-field">
                                    <i class="bi bi-pencil field-icon textarea-icon"></i>
                                    <textarea class="form-control-custom" placeholder="Tell us about your store or your goal..."
                                        name="message" maxlength="3000"></textarea>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Honeypot: hidden from real users, bots tend to fill it in -->
                        <div style="position:absolute; left:-9999px;" aria-hidden="true">
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </div>
                    
                        <!-- Success / error message appears here -->
                        <div id="inquiryAlert" class="alert d-none" role="alert"></div>
                    
                        <button type="submit" id="inquirySubmit" class="submit-btn">
                            <i class="bi bi-send"></i> <span class="btn-text">Send my inquiry</span>
                        </button>
                    
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="marquee-wrap" data-marquee data-text="Contact Us" data-speed="30">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-12 p-0">
                    <div class="map">
                        <figure data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <img src="assets/images/footer/map.webp" class="img-fluid w-100" alt="">
                            <div class="overlay">
                                <i class="fa-solid fa-location-dot"></i>
                                <h3>Click & View Map</h3>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <?php include 'includes/footer.php';?>
</body>

</html>