<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Winning products aren't found. They're qualified.";
    $bannerParagraph = "Demand verified, margins modeled after every fee, competition screened, risks checked — 40+ candidates funneled down to the 3–5 your budget can actually win with. Exclusive to you, sourcing-ready, delivered with the data.";
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
    $sectionHeading = "Most product failures are selection failures.";
    $sectionText = "
       Ask a hundred failed sellers what went wrong and most will describe marketing problems — ads that didn't convert, listings that didn't rank. Look at the data and the truth is usually earlier: the product never had a path. Demand was assumed instead of verified, the margin evaporated once every fee was counted, or the top of the niche was a fortress of thousand-review incumbents. Product hunting exists to catch all of that before your money is committed.
        <br><br>
       Our hunts start from your budget, model, and marketplace — then screen 40–60 candidates through demand verification, competition density, full-fee margin modeling, sourcing feasibility, and a risk pass covering IP, gating, fragility, and seasonality. What survives is a short list of 3–5 picks, each with its complete data workup, a differentiation angle, and a vetted supplier shortlist. Your picks are exclusive to you — recycled \"winning product lists\" are how other agencies create their own clients' competition.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Demand verified from sales data, never trend anecdotes</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Margins modeled after every fee, shipping leg, and return rate</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Risk pass on IP, gated categories, fragility, and seasonality</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Picks exclusive to you, with supplier shortlists attached</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "2,000+", "text" => "Products qualified across client hunts"],
        ["number" => "47→3", "text" => "Typical screen-to-winner funnel"],
        ["number" => "5", "text" => "Selling models, each with its own criteria"],
        ["number" => "~10 days", "text" => "Standard hunt turnaround"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "The gauntlet every pick survives.";
$sectionText = "Nine checks between a candidate and your shortlist. Most products die here — which is exactly the point.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-25.webp",
        "icon"  => "assets/images/services/icons/Vector-22.webp",
        "title" => "Demand verification",
        "text"  => "Real sales-velocity and search data - not trend videos - proving buyers exist at the volume your revenue target needs.",
        "tag"   => "Check one, always",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-69.webp",
        "icon"  => "assets/images/services/icons/Vector-67.webp",
        "title" => "Competition density",
        "text"  => "Review moats, price wars, and incumbent strength measured - because demand you can't reach is demand you don't have.",
        "tag"   => "Fortress niches rejected",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-70.webp",
        "icon"  => "assets/images/services/icons/Vector-68.webp",
        "title" => "Full-fee margin modeling",
        "text"  => "Referral fees, fulfilment, storage, shipping legs, returns - modeled to true net per unit before you've spent a dollar.",
        "tag"   => "Every fee counted",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-71.webp",
        "icon"  => "assets/images/services/icons/Vector-69.webp",
        "title" => "Differentiation angle",
        "text"  => "Every pick ships with its wedge - the bundle, variant, quality fix, or positioning gap that justifies a buyer switching to you.",
        "tag"   => "No me-too launches",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-72.webp",
        "icon"  => "assets/images/services/icons/Vector-70.webp",
        "title" => "Risk screening",
        "text"  => "IP and patent exposure, gated categories, fragility, compliance flags, and hype-cycle risk - the failure modes caught upfront.",
        "tag"   => "Rejects most candidates",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-26.webp",
        "icon"  => "assets/images/services/icons/Vector-23.webp",
        "title" => "Seasonality & trend curve",
        "text"  => "Evergreen vs seasonal vs fad, mapped honestly - so you know whether you're buying an asset or a moment.",
        "tag"   => "Curve labeled",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-12.webp",
        "icon"  => "assets/images/services/icons/Vector-10.webp",
        "title" => "Sourcing feasibility",
        "text"  => "A vetted supplier shortlist with indicative pricing and MOQs per pick - so the winner is launchable, not theoretical.",
        "tag"   => "Shortlist attached",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-9.webp",
        "icon"  => "assets/images/services/icons/Vector-7.webp",
        "title" => "Launch difficulty score",
        "text"  => "Capital needed, time-to-traction, and ranking difficulty scored against your actual budget - not a generic seller's.",
        "tag"   => "Scored to you",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-73.webp",
        "icon"  => "assets/images/services/icons/Vector-71.webp",
        "title" => "The report & walkthrough",
        "text"  => "Every surviving pick with its full workup, ranked - delivered on a walkthrough call, with one revision round included.",
        "tag"   => "Revision included",
        "link"  => "javascript:;",
    ],
];

include '../includes/service-cards.php';
?>
 

    <section class="test-in-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="marquee-wrap" data-marquee data-text="Product Hunting" data-speed="40">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $subtitle = "Where we mine";
    $sectionHeading = "Five selling models, five different hunts.";
    $sectionText = "A great private-label product is a terrible dropshipping product, and vice versa. The gauntlet's criteria change with your model — here's how.";

    $categoryItems = [
        [
            "img"   => "assets/images/services/icons/av-4.webp",
            "icon"  => "assets/images/services/icons/Vector-1.webp",
            "title" => "Amazon private label",
            "text"  => "Moats, margins, and differentiation weigh heaviest — you're building an asset, so the hunt screens for defensibility.",
            "tag"   => "Criteria: defensibility",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-65.webp",
            "icon"  => "assets/images/services/icons/Vector-63.webp",
            "title" => "Amazon wholesale",
            "text"  => "Brand approval odds, Buy Box dynamics, and price stability drive the screen — velocity matters more than novelty.",
            "tag"   => "Criteria: velocity",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-66.webp",
            "icon"  => "assets/images/services/icons/Vector-64.webp",
            "title" => "Shopify dropshipping",
            "text"  => "Testable, demonstrable, impulse-friendly products with supplier reliability checked before a single ad runs.",
            "tag"   => "Criteria: testability",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-67.webp",
            "icon"  => "assets/images/services/icons/Vector-65.webp",
            "title" => "Walmart Marketplace",
            "text"  => "Thin-competition queries and category gaps on a fast-growing marketplace — first-mover math, screened properly.",
            "tag"   => "Criteria: open ground",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-68.webp",
            "icon"  => "assets/images/services/icons/Vector-66.webp",
            "title" => "TikTok Shop",
            "text"  => "Trend curves and timing beat volume history — the hunt looks for the rise, not the peak, with content potential scored.",
            "tag"   => "Criteria: timing",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-67.webp",
            "icon"  => "assets/images/services/icons/Vector-65.webp",
            "title" => "Etsy & POD",
            "text"  => "Personalization angles, niche search demand, and production feasibility — where the wedge matters more than the volume.",
            "tag"   => "Criteria: open ground",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Selling across two models? Hunts can be scoped together — with each pick tagged for the model it fits. Scope my hunt →";

    include '../includes/service-categories.php';
    ?>

    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From criteria call to launchable picks, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Criteria & scope",
            "text"  => "Budget, model, marketplace, and risk appetite locked — the hunt is built to your numbers.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Long-list screen",
            "text"  => "40–60 candidates gathered and run through the demand and competition passes.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "The gauntlet",
            "text"  => "Margin modeling, risk screening, sourcing checks — survivors get full workups.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Verdicts & walkthrough",
            "text"  => "3–5 ranked picks delivered on a call, revision round included if needed.",
        ],
    ];

    $stepFooterText = "Typical timeline: criteria call to delivered picks in about 10 days.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Sitting on a product idea — or burned by a bad one?";
    $ctaText = "We screen your existing idea with the same gauntlet, or hunt its replacement. Free screen first, honest verdict included.";
    $ctaBtnText = "Screen my product idea";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "Why our hunts hit more often.";

    $wayItems = [
        [
            "title" => "We launch what we pick",
            "text"  => "The same team operates live stores — so hunt criteria come from products we've actually launched and scaled, not from a research tool's defaults.",
        ],
        [
            "title" => "Exclusive picks, always",
            "text"  => "Your winners are reserved to you. No recycled lists, no selling the same opportunity to twelve clients who become each other's competition.",
        ],
        [
            "title" => "We'd rather reject than flatter",
            "text"  => "If nothing survives the gauntlet at your budget, we say so and adjust criteria — a smaller honest list beats an impressive one that loses your money.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>The funnel</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Forty-seven candidates walk in. Three walk out.</h2>
                    <p>
                        The value of a hunt isn't the picks — it's everything rejected on the way to them. Here's the funnel every candidate falls through.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-80.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Long-list</h3>
                                <p>40-60 candidates gathered from category data, movers reports, and gap analysis - cast wide on purpose.</p>
                                <a href="javascript:;">~50 enter</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-68.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Margin gauntlet</h3>
                                <p>Full-fee modeling and sourcing quotes kill the products that only look profitable before the fees.</p>
                                <a href="javascript:;">~8 survive</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-81.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Data screen</h3>
                                <p>Demand verification and competition density cut the list in half - assumed demand dies here.</p>
                                <a href="javascript:;">~20 survive</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-4.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Risk & verdict</h3>
                                <p>IP, gating, seasonality, and launch-difficulty checks leave only the picks worth your capital - fully worked up.</p>
                                <a href="javascript:;">3-5 delivered</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Ten days, criteria call to verdicts.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        A hunt has no marketplace approvals to wait on — so this schedule is the standard, not the best case. Supplier quote responses are the only variable we don't control.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-80.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 1-2</h4>
                            </span>
                        </div>
                        <h3>Criteria & long-list</h3>
                        <p>Scoping call locks budget, model, marketplace, and risk appetite. The long-list is gathered - you see the candidate count before screening begins.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-82.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 3-7</h4>
                            </span>
                        </div>
                        <h3>The gauntlet runs</h3>
                        <p>Demand, competition, margins, risk, and sourcing checks - with supplier quotes requested for the survivors. Most of the list dies this week, as it should.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-71.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 8-10</h4>
                            </span>
                        </div>
                        <h3>Workups & walkthrough</h3>
                        <p>Full data workups on the finalists, picks ranked, walkthrough call held. You leave knowing which product, why, and what launching it takes.</p>
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
                                    <h4>3–5</h4>
                                    <h5>Qualified picks, exclusive to you</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>Full</h4>
                                    <h5>Data workup & margin model per pick</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-2.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>4+</h4>
                                    <h5>Vetted supplier quotes per pick</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-3.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>1</h4>
                                    <h5>Walkthrough call + revision round</h5>
                                </span>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="btn-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <a href="javascript:;" class="themeBtn">Start my ten days</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Qualified hunting vs. chasing "winners."</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>The gauntlet method</h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Demand verified in sales data before commitment</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Margin modeled after every fee — no surprises at payout</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>IP and gating risks caught before inventory exists</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>A differentiation wedge attached to every pick</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Picks exclusive to you, supplier quotes included</span></li>
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
                                <h3>The "winning product" chase</h3>
                            </span>
                        </div>
                        <div class="cb-box cb-box-trans">
                            <ul>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Picked from a video 100,000 other sellers watched</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Margin discovered — painfully — at first settlement</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>IP claim arrives after the inventory does</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Identical listing #47 in a race to the bottom</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>The same "secret winner" sold to every client who paid</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        The products themselves are rarely secret. The qualification is the product — and it's the part the videos always skip.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your next product could be qualified in 10 days.";
    $sectionText = "Free product screen on the first call — one idea, full gauntlet, honest verdict. Picks exclusive to you, always.";

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