<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Etsy buyers are searching. We make sure they find you.";
    $bannerParagraph = "Search-optimized listings, production and POD coordination, daily orders and messages, and Star Seller protection — your shop grows while you stay out of the inbox. You own the shop. We run its days.";
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
    $sectionHeading = "Etsy is a search engine with a checkout.";
    $sectionText = "
       Shops win on Etsy by matching how buyers phrase their searches — and lose by treating tags and titles as an afterthought. Our Etsy automation service starts with that search layer: keyword-mapped titles, complete attributes, and tags that reflect real query data for your niche, refreshed as trends and seasons move. Then the conversion layer: photography direction, benefit-led descriptions, and variant hygiene that turns found listings into sold ones.
        <br><br>
       Beyond SEO, we run the shop's daily rhythm — order processing, buyer messages in your voice, review cultivation — and coordinate production or print-on-demand partners so fulfilment keeps pace with demand. Star Seller thresholds are managed weekly because the badge lifts trust and conversion. The shop stays personal in voice; the workload stops being personal in hours.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Titles, tags, and attributes built from real Etsy query data</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Buyer messages answered in your shop's voice, daily</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Production and POD partners held to quality and turnaround standards</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Weekly report: sales, conversion, Star Seller metrics, next actions</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "140+", "text" => "Etsy shops optimized & managed"],
        ["number" => "Star Seller", "text" => "Thresholds managed weekly"],
        ["number" => "92%", "text" => "Channels growing month over month"],
        ["number" => "Seasonal", "text" => "Catalog planned to the gift calendar"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "Search to shipped — the whole shop, handled.";
$sectionText = "SEO, listings, production, orders, messages, and the seasonal calendar — nine workstreams with one weekly report.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-25.webp",
        "icon"  => "assets/images/services/icons/Vector-22.webp",
        "title" => "Etsy SEO",
        "text"  => "Titles, tags, and attributes built from real search data for your niche — and refreshed as trends and seasons move, not set once and forgotten.",
        "tag"   => "Refreshed continuously",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-24.webp",
        "icon"  => "assets/images/services/icons/Vector-21.webp",
        "title" => "Listing management",
        "text"  => "Photography direction, benefit-led descriptions, and variant hygiene across the catalog — found listings become sold ones.",
        "tag"   => "Every listing, to standard",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-45.webp",
        "icon"  => "assets/images/services/icons/Vector-43.webp",
        "title" => "Production & POD coordination",
        "text"  => "Makers or print partners managed to quality and turnaround standards — with Etsy's production-partner rules followed to the letter.",
        "tag"   => "Standards in writing",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-4.webp",
        "icon"  => "assets/images/services/icons/Vector-1.webp",
        "title" => "Order operations",
        "text"  => "Daily processing with shipping profiles that protect both speed and margin — tracking on every order, on time.",
        "tag"   => "Daily rhythm",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-46.webp",
        "icon"  => "assets/images/services/icons/Vector-44.webp",
        "title" => "Star Seller protection",
        "text"  => "Message response rate, on-time shipping with tracking, and 5-star ratings managed to badge thresholds — reviewed every week.",
        "tag"   => "Badge-safe, weekly",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-20.webp",
        "icon"  => "assets/images/services/icons/Vector-18.webp",
        "title" => "Etsy Ads management",
        "text"  => "Ad budgets behind listings that already convert organically — reviewed weekly, cut where they can't earn their spend, with Offsite Ads economics priced in.",
        "tag"   => "Proof before spend",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-15.webp",
        "icon"  => "assets/images/services/icons/Vector-13.webp",
        "title" => "Messages & reviews",
        "text"  => "Buyer questions answered in your shop's voice, custom requests triaged, and reviews cultivated the policy-safe way.",
        "tag"   => "Your voice, our hours",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-29.webp",
        "icon"  => "assets/images/services/icons/Vector-26.webp",
        "title" => "Profit-level reporting",
        "text"  => "Sales, transaction and listing fees, ad spend, and true net per listing — weekly, in plain language, with next actions.",
        "tag"   => "Every Friday",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-47.webp",
        "icon"  => "assets/images/services/icons/Vector-45.webp",
        "title" => "Seasonal strategy",
        "text"  => "Catalog and promotion plans timed to Etsy's gift-driven calendar — peaks are planned for months ahead, not survived.",
        "tag"   => "Calendar-driven",
        "link"  => "javascript:;",
    ],
];

include '../includes/service-cards.php';
?>
 

    <section class="test-in-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="marquee-wrap" data-marquee data-text="Etsy Store Automation" data-speed="50">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $subtitle = "Shops we run";
    $sectionHeading = "Every kind of Etsy shop, managed to its rules.";
    $sectionText = "Handmade, POD, vintage, digital — each model has its own Etsy policies, economics, and rhythm. We run all of them, by their own rules.";

    $categoryItems = [
        [
            "img"   => "assets/images/services/icons/av-48.webp",
            "icon"  => "assets/images/services/icons/Vector-46.webp",
            "title" => "Handmade goods",
            "text"  => "We coordinate around your making capacity - you create, we handle everything after the workbench.",
            "tag"   => "Maker-paced",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-45.webp",
            "icon"  => "assets/images/services/icons/Vector-43.webp",
            "title" => "Print-on-demand",
            "text"  => "Print partners managed directly - quality standards, turnaround SLAs, and Etsy's production-partner disclosure done right.",
            "tag"   => "Partner-managed",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-49.webp",
            "icon"  => "assets/images/services/icons/Vector-47.webp",
            "title" => "Personalized & custom orders",
            "text"  => "Custom-request triage, proof approvals, and deadline tracking - personalization without the inbox chaos.",
            "tag"   => "Workflow-built",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-50.webp",
            "icon"  => "assets/images/services/icons/Vector-48.webp",
            "title" => "Vintage",
            "text"  => "One-of-a-kind inventory listed fast with the attributes and story that vintage buyers search for.",
            "tag"   => "Speed-listed",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-51.webp",
            "icon"  => "assets/images/services/icons/Vector-49.webp",
            "title" => "Digital downloads",
            "text"  => "Zero-fulfilment products where SEO is everything - the purest search game on Etsy, played properly.",
            "tag"   => "SEO-first",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-52.webp",
            "icon"  => "assets/images/services/icons/Vector-50.webp",
            "title" => "Craft supplies",
            "text"  => "High-repeat, high-volume shops where variant hygiene and restock rhythm decide the winners.",
            "tag"   => "Volume-tuned",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Not sure which model fits you? Bring your idea to the call and we'll map it — including the honest economics of each route. Find my model";

    include '../includes/service-categories.php';
    ?>

    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From keyword audit to calendar-driven growth, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Shop & keyword audit",
            "text"  => "Your niche's search landscape mapped; every listing scored against it.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Creator bench",
            "text"  => "Listings rebuilt to rank and convert — titles, tags, photos, descriptions.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Daily management",
            "text"  => "Orders, messages, production coordination, and upkeep run on a daily rhythm.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Seasonal scaling",
            "text"  => "Gift-calendar peaks planned months ahead — Q4 becomes a strategy, not a scramble.",
        ],
    ];

    $stepFooterText = "Typical timeline: audit to measurable search movement in 3–6 weeks";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Shop buried in search, or badge slipping away?";
    $ctaText = "We rescue rankings and Star Seller metrics on shops we take over. Free audit first, honest verdict included.";
    $ctaBtnText = "Audit my existing store";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "What separates us on Etsy.";

    $wayItems = [
        [
            "title" => "Search-literate management",
            "text"  => "We optimize for Etsy's ranking factors — query matching, listing quality, customer-experience score — including the ones that changed last quarter.",
        ],
        [
            "title" => "Craft-respectful operations",
            "text"  => "Your shop's voice, standards, and story stay intact — buyers still feel a maker behind the shop. Only the workload moves to us.",
        ],
        [
            "title" => "Calendar-driven growth",
            "text"  => "Etsy is seasonal; our planning is too. Mother's Day, weddings, and Q4 are prepared months ahead — peaks are planned for, not survived.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>How Etsy decides</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">The ranking loop we manage on repeat.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Etsy search rewards a loop, not a trick: match the query, earn the click, deliver the experience, and rank compounds. Here's how we run each turn of it.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-22.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Match the query</h3>
                                <p>Titles, tags, and attributes mapped to the exact phrases buyers type — the entry ticket to being seen at all.</p>
                                <a href="javascript:;">Keyword-mapped</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-63.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Convert & delight</h3>
                                <p>Descriptions that close, fast answers, on-time shipping — the quality signals Etsy's algorithm weighs heavily.</p>
                                <a href="javascript:;">Experience score</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-74.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Earn the click</h3>
                                <p>First photos and price framing tuned so your listing wins the tap against everything beside it.</p>
                                <a href="javascript:;">Thumb-stopping</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-23.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Rank compounds</h3>
                                <p>Sales and reviews feed listing quality score, which lifts rank, which brings more sales. The flywheel we keep spinning.</p>
                                <a href="javascript:;">The flywheel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="expec-sect">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>Expectations, in writing</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Your Etsy year, mapped honestly.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Etsy growth is a search game and a calendar game. Here's the honest shape of both — no overnight-ranking fantasies.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-15.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Months 0–2</h4>
                            </span>
                        </div>
                        <h3>Foundation & re-index </h3>
                        <p>Shop registered, listings live, first products stocked, first creator samples out the door. Sales: early and lumpy — the engine is being built, and we say so upfront.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-23.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Months 2–6</h4>
                            </span>
                        </div>
                        <h3>Compounding rank</h3>
                        <p>Conversion signals accumulate, listing quality scores climb, and winning listings pull the shop up with them. Etsy Ads layer in behind proven converters.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-45.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Months 6–12</h4>
                            </span>
                        </div>
                        <h3>Calendar mastery</h3>
                        <p>Mother's Day, weddings, and Q4 planned months ahead — stock, listings, and shipping profiles ready before the wave. Peak seasons become your biggest quarters, on purpose.</p>
                    </div>
                </div>
            </div>
            <div class="row  align-items-center">
                <div class="col-md-9">
                        <div class="ser-ban">
                            <h4 data-aos="fade-up" data-aos-anchor-placement="top-bottom">What lands in your inbox every week</h4>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>1</h4>
                                    <h5>Friday report: sales, conversion, badge metrics</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>Daily</h4>
                                    <h5>Orders processed & messages answered</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-2.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>Monthly</h4>
                                    <h5>Keyword refresh & seasonal planning review</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-3.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>100%</h4>
                                    <h5>Ownership of shop, brand & deposits</h5>
                                </span>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="btn-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <a href="javascript:;" class="themeBtn">I want results like these</a>
                        <a href="javascript:;" class="themeBtn">View all case studies</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>The honest comparison</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Solo shopkeeper vs. managed shop.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>Your shop, our hours</h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span> Tags and titles built from real query data, refreshed monthly</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span> Messages answered daily, in your voice</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Q4 planned in July — stock, listings, shipping ready</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span> Star Seller thresholds tracked every week</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Your hands stay on the craft, not the keyboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1">
                    <div class="vs-box">
                        <h4>VS</h4>
                    </div>
                </div> -->
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box ct-box-trans">   
                            <span>
                                <h3>Going it alone</h3>
                            </span>
                        </div>
                        <div class="cb-box cb-box-trans">
                            <ul>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Tags written once in 2021 and never touched</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Messages piling up between making sessions</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Q4 arriving as a surprise, every single year</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Badge lost to one slow-reply week</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Twenty admin hours for every ten making hours</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Plenty of makers love running every part of their shop — if that's you, keep going. This service exists for owners who want the shop's growth without losing their making hours to it.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your shop could be ranking in 6 weeks.";
    $sectionText = "Free shop audit on the first call — keyword gaps, listing scores, and an honest plan. We only do well when your shop does.";

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