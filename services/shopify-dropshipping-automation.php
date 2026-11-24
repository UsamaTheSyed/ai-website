<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "A Shopify store <span>that sells while</span> someone else ships.";
    $bannerParagraph = "We build a branded storefront, find winning products with a disciplined testing framework, and run supplier coordination, order routing, and customer support — inventory never touches your hands.";
    include '../includes/inner-banner.php';?>
    

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


    <?php 
    $subtitle = "Overview";
    $sectionHeading = "Dropshipping without the guesswork.";
    $sectionText = "
        Dropshipping fails when it's run on hope: untested products, slow suppliers, and template stores that leak trust at checkout. Our Shopify dropshipping automation replaces hope with process. We design a storefront that looks like a brand rather than a template, then validate every product through structured, small-budget ad tests before a single winner is scaled.
        <br><br>
        Behind the storefront, automation does the heavy lifting — orders route to vetted suppliers the moment they're placed, tracking updates flow to customers without your involvement, and our support desk answers questions and handles refunds under your brand's voice. You watch revenue and true margin in a live dashboard; we run the machine.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Branded storefront built for conversion — not a recycled theme</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Products validated with real ad data before scaling</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Suppliers held to shipping-time and quality standards</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Weekly reporting on profit per product, after every cost</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "700+", "text" => "Shopify stores launched & managed"],
        ["number" => "21 days", "text" => "Average build-to-launch time"],
        ["number" => "92%", "text" => "Clients see growth within 3 months"],
        ["number" => "0", "text" => "Inventory you'll ever touch"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
$subtitle = "What's included";
$sectionHeading = "Every moving part, under one accountable team.";
$sectionText = "Nine workstreams, one weekly report. This is the full operation — not a store build with a goodbye email.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-1.webp",
        "icon"  => "assets/images/services/icons/Vector.webp",
        "title" => "Branded store design",
        "text"  => "A custom storefront with conversion-focused layout, trust elements, and fast load times. Buyers should feel a brand, not a template.",
        "tag"   => "Included in every build",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-2.webp",
        "icon"  => "assets/images/services/icons/Test.webp",
        "title" => "Product testing framework",
        "text"  => "Structured creative and audience tests find winners on small budgets. We scale evidence, never enthusiasm.",
        "tag"   => "Continuous, every month",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-3.webp",
        "icon"  => "assets/images/services/icons/Vector-5.webp",
        "title" => "Supplier network & routing",
        "text"  => "Vetted suppliers with enforced shipping standards. Orders route automatically the moment they're placed — and slow suppliers get replaced.",
        "tag"   => "Quality-enforced",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-4.webp",
        "icon"  => "assets/images/services/icons/Vector-1.webp",
        "title" => "Automated fulfilment flow",
        "text"  => "Order processing, tracking sync, and delivery notifications handled end to end. Your customers stay informed; you stay out of it.",
        "tag"   => "Zero owner touches",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-5.webp",
        "icon"  => "assets/images/services/icons/Vector-3.webp",
        "title" => "Customer support desk",
        "text"  => "Pre-sale questions, shipping queries, and refunds handled in your brand's voice — with sensitive cases escalated to you first.",
        "tag"   => "7-day coverage",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-6.webp",
        "icon"  => "assets/images/services/icons/Vector-6.webp",
        "title" => "Ad & funnel management",
        "text"  => "Paid campaigns and landing flows managed against one metric: profitable customer acquisition — not vanity traffic.",
        "tag"   => "Weekly optimization",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-7.webp",
        "icon"  => "assets/images/services/icons/Vector-2.webp",
        "title" => "Margin & KPI reporting",
        "text"  => "True profit per product after ad spend, fees, and refunds — reported weekly in plain language.",
        "tag"   => "Every Friday",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-8.webp",
        "icon"  => "assets/images/services/icons/Vector-4.webp",
        "title" => "Store health & compliance",
        "text"  => "Payment-provider standards, dispute rates, and policy compliance monitored so growth never risks the store itself.",
        "tag"   => "Monitored daily",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-9.webp",
        "icon"  => "assets/images/services/icons/Vector-7.webp",
        "title" => "Scaling playbook",
        "text"  => "Winners get budget, upsells, and catalog extensions on a defined schedule. What worked becomes a system.",
        "tag"   => "From month one",
        "link"  => "javascript:;",
    ],
];

include '../includes/service-cards.php';
?>
 

    <!-- <section class="serv-card-sect srva-sect">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h3 class="subtitle"><span><img src="assets/images/hero/line.webp" alt=""></span>What's included</h3>
                    <h2 class="sectionHeading">Every moving part, under one accountable team.</h2>
                    <p>Nine workstreams, one weekly report. This is the full operation — not a store build with a goodbye email.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-1.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Branded store design</h3>
                        <p>
                            A custom storefront with conversion-focused layout, trust elements, and fast load times. Buyers should feel a brand, not a template.
                        </p>
                        <a href="javascript:;">Included in every build</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-2.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Test.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Product testing framework</h3>
                        <p>
                            Structured creative and audience tests find winners on small budgets. We scale evidence, never enthusiasm.
                        </p>
                        <a href="javascript:;">Continuous, every month</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-3.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector-1.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Supplier network & routing</h3>
                        <p>
                            Vetted suppliers with enforced shipping standards. Orders route automatically the moment they're placed — and slow suppliers get replaced.
                        </p>
                        <a href="javascript:;">Quality-enforced</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-4.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector-2.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Automated fulfilment flow</h3>
                        <p>
                            Order processing, tracking sync, and delivery notifications handled end to end. Your customers stay informed; you stay out of it.
                        </p>
                        <a href="javascript:;">Zero owner touches</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-5.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector-3.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Customer support desk</h3>
                        <p>
                            Pre-sale questions, shipping queries, and refunds handled in your brand's voice — with sensitive cases escalated to you first.
                        </p>
                        <a href="javascript:;">7-day coverage</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-6.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector-4.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Ad & funnel management</h3>
                        <p>
                            Paid campaigns and landing flows managed against one metric: profitable customer acquisition — not vanity traffic.
                        </p>
                        <a href="javascript:;">Weekly optimization</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-7.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector-5.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Margin & KPI reporting</h3>
                        <p>
                            True profit per product after ad spend, fees, and refunds — reported weekly in plain language. 
                        </p>
                        <a href="javascript:;">Every Friday</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-8.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector-6.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Store health & compliance</h3>
                        <p>
                            Payment-provider standards, dispute rates, and policy compliance monitored so growth never risks the store itself.
                        </p>
                        <a href="javascript:;">Monitored daily</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="srvin-card">
                        <img src="assets/images/services/icons/av-9.webp" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="assets/images/services/icons/Vector-7.webp" class="img-fluid" alt="">
                        </figure>
                        <h3>Scaling playbook</h3>
                        <p>
                            Winners get budget, upsells, and catalog extensions on a defined schedule. What worked becomes a system.
                        </p>
                        <a href="javascript:;">From month one</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="test-in-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <!-- <div class="review-logo-slider" dir="rtl">
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                        <div class="img"><h3>Shopify Dropshipping Automation <span>*</span></h3></div>
                    </div> -->
                    <div class="marquee-wrap" data-marquee data-text="Shopify Dropshipping Automation" data-speed="60">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From kickoff to hands-off, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Niche & brand build",
            "text"  => "We define the niche and angle, then design the branded storefront around it.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Product validation",
            "text"  => "Small-budget ad tests identify products with real pull — before real money is committed.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Automation live",
            "text"  => "Supplier routing, tracking sync, and the support desk switch on. Operations leave your plate.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Scale & iterate",
            "text"  => "Winners scale on a schedule; losers are cut fast. The catalog compounds monthly.",
        ],
    ];

    $stepFooterText = "Typical timeline: kickoff to first sales in 3–4 weeks.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>


    <!-- <section class="step-sect">
        <img src="assets/images/services/icons/Line.webp" class="line-one" alt="">
        <img src="assets/images/services/icons/Line-1.webp" class="line-two" alt="">
        <img src="assets/images/services/icons/Line-1.webp" class="line-three" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="subtitle"><span><img src="assets/images/hero/line.webp" alt=""></span>How it works</h3>
                    <h2 class="sectionHeading">From kickoff to hands-off, in four phases.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="step-card">
                        <span>
                            <figure>
                                <img src="assets/images/services/icons/stp-1.webp" class="img-fluid" alt="">
                            </figure>
                        </span>
                        <span>
                            <h3>Step - 01</h3>
                            <h4>Niche & brand build</h4>
                            <p>We define the niche and angle, then design the branded storefront around it.</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-card">
                        <span>
                            <figure>
                                <img src="assets/images/services/icons/stp-2.webp" class="img-fluid" alt="">
                            </figure>
                        </span>
                        <span>
                            <h3>Step - 02</h3>
                            <h4>Product validation</h4>
                            <p>Small-budget ad tests identify products with real pull — before real money is committed.</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-card">
                        <span>
                            <figure>
                                <img src="assets/images/services/icons/stp-3.webp" class="img-fluid" alt="">
                            </figure>
                        </span>
                        <span>
                            <h3>Step - 03</h3>
                            <h4>Automation live</h4>
                            <p>Supplier routing, tracking sync, and the support desk switch on. Operations leave your plate.</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-card">
                        <span>
                            <figure>
                                <img src="assets/images/services/icons/stp-4.webp" class="img-fluid" alt="">
                            </figure>
                        </span>
                        <span>
                            <h3>Step - 04</h3>
                            <h4>Scale & iterate</h4>
                            <p>Winners scale on a schedule; losers are cut fast. The catalog compounds monthly.</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="step-text">
                        <p>Typical timeline: kickoff to first sales in 3–4 weeks. <a href="javascrit:;">Map my timeline <i class="fa-solid fa-arrow-right-long"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php 
    $ctaHeading = "Already running a Shopify store that's stuck?";
    $ctaText = "We also take over existing stores — free audit first, honest verdict included.";
    $ctaBtnText = "Audit my existing store";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>


    <!-- <section class="cta-sect serv-cta-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-cont">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="sectionHeading">Already running a Shopify store that's stuck?</h2>
                                <p>We also take over existing stores — free audit first, honest verdict included.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="btn-box cta-btn">
                                    <a href="javascript:;" class="themeBtn">Audit my existing store <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <?php 
    $subtitle = "Why Stackline Retail";
    $sectionHeading = "What separates us on Shopify dropshipping.";

    $wayItems = [
        [
            "title" => "Process over hype",
            "text"  => "No \"winning product lists\" recycled to every client. A repeatable testing system that keeps producing winners specific to your store.",
        ],
        [
            "title" => "Real supplier standards",
            "text"  => "Suppliers are held to written shipping-time and quality thresholds. Miss them twice, and they're replaced — your reviews are the asset we protect.",
        ],
        [
            "title" => "Transparent unit economics",
            "text"  => "You see profit per order after every cost — not revenue screenshots. If a product can't earn its place, we tell you and cut it.",
        ],
    ];

    include '../includes/service-way.php';
    ?>



    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your store could be live in 3 weeks.";
    $sectionText = "Free store plan on the first call — niche, numbers, and timeline. We only do well when your store does.";

    $ctaBtnText = "Get my free store plan";
    $ctaBtnLink = "javascript:;";
    $ctaPhone = "+1 (123) 456 789";
    $ctaPhoneLink = "tel:+1(123)456789";
    $ctaEmail = "hello@syntraxai.com";
    $ctaEmailLink = "mailto:hello@syntraxai.com";

    $ctaFootnote = "🔒 No upfront fees · Performance-based pricing · Cancel anytime · You own everything";

    include '../includes/service-cta-final.php';
    ?>

    <?php include '../includes/explore-service.php';?>

    <?php include '../includes/footer.php';?>
</body>

</html>