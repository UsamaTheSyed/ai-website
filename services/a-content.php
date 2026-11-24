<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Your bullets sell the click. A+ sells the customer.";
    $bannerParagraph = "Shoppers scroll past text and decide on visuals. Our A+ Content service turns your listing's dead scroll-space into a selling page — module strategy, conversion copy, and design that answers objections before they become abandoned carts. Brand story to Premium A+, written, designed, and published for you.";
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
    $sectionHeading = "Below the fold is where the sale is actually won.";
    $sectionText = "
       Watch a real shopper on a product page: they skim the title, glance at the price, flick through two images — and then scroll. What they find below the fold decides the sale. On most listings it's a wall of bullet-point text nobody reads. On listings with real A+ Content, it's a visual answer to every objection: how it works, how it compares, who's behind it, why it's worth more than the cheaper one above it. That's why Amazon's own data ties A+ to measurable sales lift — and why the brands winning your category all have it.
        <br><br>
       Our A+ projects run all three crafts under one brief: strategy decides which modules earn their scroll-space, conversion copywriting gives every section a job, and design makes the whole page feel like a brand rather than a listing. We build to Amazon's content policies from the start, manage the approval process, and measure conversion before and after publication — because “it looks great” is an opinion, and session-conversion lift is a fact.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Module strategy first — every section has a conversion job</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Copy and design under one brief — never decoration without a message</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Built to Amazon's content policies; approval managed to live</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Conversion measured before and after — lift shown, not claimed</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "500+", "text" => "A+ pages designed and published"],
        ["number" => "3", "text" => "Crafts in every project: strategy, copy, design"],
        ["number" => "7–10", "text" => "Business days, brief to published"],
        ["number" => "1", "text" => "Structured revision round included"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "Wireframe to published — every module, crafted.";
$sectionText = "Nine workstreams in every A+ engagement — strategy and copy included, because design alone is just expensive decoration.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-89.webp",
        "icon"  => "assets/images/services/icons/Vector-107.webp",
        "title" => "Module strategy & wireframe",
        "text"  => "Your reviews, competitors, and objections mined to decide which modules earn the scroll — mapped before any pixel is drawn.",
        "tag"   => "Strategy before design",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-83.webp",
        "icon"  => "assets/images/services/icons/Vector-97.webp",
        "title" => "Conversion copywriting",
        "text"  => "Headlines and module copy that answer real buyer objections — pulled from your reviews and Q&A, not invented in a brainstorm.",
        "tag"   => "Objections, answered",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-1.webp",
        "icon"  => "assets/images/services/icons/Vector.webp",
        "title" => "Custom module design",
        "text"  => "Banners, lifestyle imagery, infographics, and spec visuals designed to your brand — never dropped into a reused template.",
        "tag"   => "Your brand, not a template",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-90.webp",
        "icon"  => "assets/images/services/icons/Vector-108.webp",
        "title" => "Comparison charts",
        "text"  => "The most-clicked A+ module, built strategically — cross-selling your catalog and framing your value against the cheaper rival.",
        "tag"   => "The workhorse module",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-31.webp",
        "icon"  => "assets/images/services/icons/Vector-28.webp",
        "title" => "Brand Story",
        "text"  => "The carousel that puts a face, a mission, and a catalog link on every listing — trust-building real estate most sellers leave empty.",
        "tag"   => "Trust at scale",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-71.webp",
        "icon"  => "assets/images/services/icons/Vector-69.webp",
        "title" => "Premium A+ (A++)",
        "text"  => "Video modules, interactive hovers, carousels, and larger formats — designed for the tier when your account qualifies.",
        "tag"   => "Where eligible",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-67.webp",
        "icon"  => "assets/images/services/icons/Vector-65.webp",
        "title" => "Brand storefront design",
        "text"  => "A multi-page Amazon storefront that gives your ads somewhere better to land than a search-results page.",
        "tag"   => "Your corner of Amazon",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-91.webp",
        "icon"  => "assets/images/services/icons/Vector-109.webp",
        "title" => "Mobile-first checks",
        "text"  => "Every module proofed at phone size — where most sessions happen and where cramped desktop-first designs quietly die.",
        "tag"   => "Phone-proofed, always",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-8.webp",
        "icon"  => "assets/images/services/icons/Vector-4.webp",
        "title" => "Publishing & approval",
        "text"  => "Submitted, rejection-proofed against Amazon's content policies, and managed to live — publication is our job, not your homework.",
        "tag"   => "Managed to live",
        "link"  => "javascript:;",
    ],
];

include '../includes/service-cards.php';
?>
 

    <section class="test-in-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="marquee-wrap" data-marquee data-text="A+ Content" data-speed="30">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $subtitle = "Matched to the work";
    $sectionHeading = "Six modules that do the actual selling.";
    $sectionText = "A+ isn\'t one thing — it\'s a toolkit. The strategy phase decides which of these earn a place on your page, and in what order the argument unfolds.";

    $categoryItems = [
        [
            "img"   => "assets/images/services/icons/av-24.webp",
            "icon"  => "assets/images/services/icons/Vector-21.webp",
            "title" => "Hero & lifestyle banners",
            "text"  => "The full-width shots that reset the shopper\'s mental category from \"cheap listing\" to \"real brand\" in one scroll.",
            "tag"   => "Job: reframe value",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-90.webp",
            "icon"  => "assets/images/services/icons/Vector-108.webp",
            "title" => "Comparison charts",
            "text"  => "Your catalog side by side — upselling your premium option, cross-selling siblings, and framing you against the cheaper rival.",
            "tag"   => "Job: win the compare",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-62.webp",
            "icon"  => "assets/images/services/icons/Vector-60.webp",
            "title" => "Feature & spec infographics",
            "text"  => "Dimensions, materials, and how-it-works visuals — the answers that stop \"does it fit?\" from becoming a return.",
            "tag"   => "Job: kill uncertainty",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-93.webp",
            "icon"  => "assets/images/services/icons/Vector-111.webp",
            "title" => "Objection & FAQ modules",
            "text"  => "The doubts mined from your reviews and Q&A, answered visually before they cost the sale.",
            "tag"   => "Job: answer doubts",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-92.webp",
            "icon"  => "assets/images/services/icons/Vector-110.webp",
            "title" => "Brand Story carousel",
            "text"  => "Who you are, why you exist, and a clickable path into the rest of your catalog — on every listing at once.",
            "tag"   => "Job: build trust",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-94.webp",
            "icon"  => "assets/images/services/icons/Vector-112.webp",
            "title" => "Premium video & interactive",
            "text"  => "Video demos, hover-to-reveal hotspots, and carousels — Premium A+ modules that behave like a product page from your own site.",
            "tag"   => "Job: show, don\'t tell",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Not every listing needs every module — a page of everything sells nothing. The wireframe argues for each block\'s place. Plan my modules.";

    include '../includes/service-categories.php';
    ?>

    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From listing review to live modules, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Review & strategy",
            "text"  => "Listing audited, reviews and rivals mined, module plan wireframed with you.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Copy & design",
            "text"  => "Conversion copy drafted, modules designed to brand, one structured revision round.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Publish & approve",
            "text"  => "Submitted to Amazon, rejections handled, modules managed to live.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Measure",
            "text"  => "Conversion tracked before vs after — the lift reported, then rolled to more ASINs.",
        ],
    ];

    $stepFooterText = "Typical timeline: brief to published modules in 7–10 business days.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "DIY'd your A+ in a template tool — and it shows?";
    $ctaText = "Template A+ is why so many listings look identical. The free review shows what a strategy-led rebuild would change — honestly, including if yours is fine.";
    $ctaBtnText = "Review my current A+";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "What separates our A+ work.";

    $wayItems = [
        [
            "title" => "Strategy before pixels",
            "text"  => "We mine your reviews, Q&A, and competitors before designing anything — so every module answers a real objection instead of filling space beautifully.",
        ],
        [
            "title" => "Copy and design, one team",
            "text"  => "Most agencies design around placeholder text. Our writers and designers work the same brief — which is why the modules say something, not just show something.",
        ],
        [
            "title" => "Measured, not admired",
            "text"  => "Every project ends with a before/after conversion readout. If a page doesn't lift, we'd rather know — and iterate — than collect compliments on the design.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>One brief, three crafts</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Why our pages convert: the order of operations.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Most A+ fails because it starts in a design tool. Ours starts in your reviews — and each craft hands the next one something to work with.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-113.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Mine</h3>
                                <p>Reviews, Q&A, returns reasons, and rival listings mined for the objections actually costing you sales.</p>
                                <a href="javascript:;">Evidence in</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-115.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Write & design</h3>
                                <p>Copy and visuals produced together on the same brief - the message decides the layout, never the reverse.</p>
                                <a href="javascript:;">Made together</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-114.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Strategize</h3>
                                <p>Modules chosen and sequenced into an argument - reframe, prove, compare, reassure - then wireframed.</p>
                                <a href="javascript:;">Argument built</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-116.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Publish & measure</h3>
                                <p>Approval managed to live, then a 30-day before/after conversion readout - lift shown, not claimed.</p>
                                <a href="javascript:;">Proof out</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Ten business days, brief to published.</h2>
                    <p>
                        A single-ASIN project runs on this clock. Catalogs and storefronts scale it — but the shape stays the same, and you\'ll see it in writing before we start.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-22.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 1-3</h4>
                            </span>
                        </div>
                        <h3>Mine & wireframe</h3>
                        <p>Listing review, objection mining from reviews and Q&A, competitor pass, and the module wireframe agreed with you - the argument before the artwork.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-47.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 4-7</h4>
                            </span>
                        </div>
                        <h3>Copy & design</h3>
                        <p>Modules written and designed together, then your structured revision round - consolidated feedback, thoroughly applied, instead of endless drips.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-117.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 8-10</h4>
                            </span>
                        </div>
                        <h3>Publish & measure</h3>
                        <p>Submitted policy-clean, rejections handled if Amazon pushes back, modules live - then the 30-day before/after conversion readout lands in your inbox.</p>
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
                                    <h5>Module strategy & wireframe, argued</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>5-7</h4>
                                    <h5>Modules written, designed & published</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-2.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>1</h4>
                                    <h5>Structured revision round included</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-3.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>30d</h4>
                                    <h5>Before/after conversion readout</h5>
                                </span>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="btn-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <a href="javascript:;" class="themeBtn">Start my case todays</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Strategy-led A+ vs. template A+.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>Strategy-led pages</h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Built from your reviews\' real objections</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Copy and design produced on one brief</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Modules sequenced into an argument</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Policy-clean, approval managed to live</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>A before/after conversion readout — proof, not opinion</span></li>
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
                                <h3>The 2am panic appeal</h3>
                            </span>
                        </div>
                        <div class="cb-box cb-box-trans">
                            <ul>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>The same stock layout as half your category</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Pretty banners wrapped around placeholder-grade copy</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Modules picked because the slot existed</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Claims-rule rejections you debug yourself</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>"It looks great" — and no one ever checks the numbers</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Shoppers can\'t name why a listing feels trustworthy — but they convert on it. The difference is whether someone thought before someone designed.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your listing could look like a brand in 10 days.";
    $sectionText = "Free listing review first — leaks, modules, honest verdict. Strategy, copy, and design under one brief, measured after.";

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