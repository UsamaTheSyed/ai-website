<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Ad spend is easy.Profitable ad spend is a craft.";
    $bannerParagraph = "Campaign architecture, keyword harvesting, bid and placement optimization, and ruthless negative discipline — managed weekly against one number: profitable growth. Reported in plain language, in your account, under your ownership.";
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
    $sectionHeading = "Your ads have a structure problem, not a budget problem.";
    $sectionText = "
       Most struggling ad accounts share the same autopsy: everything dumped into a few broad campaigns, search-term reports never harvested, negatives never added, and budgets split by habit instead of performance. The result is the classic death spiral — raise budgets to grow, watch ACOS climb, cut budgets to save margin, watch sales fall. The problem was never the budget. It was the structure.
        <br><br>
       Our PPC management rebuilds that structure and then works it weekly: campaigns organized so data flows from discovery to exact-match winners, search terms harvested and negated on schedule, bids and placements tuned to your target ACOS, and budgets reallocated to what's earning. Every Friday you get the numbers that matter — spend, sales, ACOS, TACOS, and true ad-attributed profit — in plain language, in your account, which stays yours along with every byte of campaign data.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Target ACOS set from your unit economics, not industry folklore</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Search terms harvested weekly — winners promoted, waste negated</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Budgets follow performance, reallocated every single week</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Friday report: spend, sales, ACOS, TACOS, true ad profit</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "$14M+", "text" => "Marketplace ad spend managed"],
        ["number" => "6", "text" => "Ad platforms under one team"],
        ["number" => "Weekly", "text" => "Optimization cycle on every account"],
        ["number" => "0", "text" => "Long-term contracts required"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "Architecture to ad profit — the full discipline.";
$sectionText = "Nine workstreams on a weekly cycle. This is what \"managed\" means when it isn't a euphemism for a dashboard login.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-17.webp",
        "icon"  => "assets/images/services/icons/Vector-15.webp",
        "title" => "Campaign architecture",
        "text"  => "Auto, broad, and exact campaigns structured so data flows to winners - the rebuild that fixes most accounts by itself.",
        "tag"   => "Foundation first",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-25.webp",
        "icon"  => "assets/images/services/icons/Vector-22.webp",
        "title" => "Search-term harvesting",
        "text"  => "Winning queries promoted to exact match on a weekly schedule - the compounding engine most accounts never run.",
        "tag"   => "Every week, without fail",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-39.webp",
        "icon"  => "assets/images/services/icons/Vector-37.webp",
        "title" => "Negative discipline",
        "text"  => "Irrelevant and unprofitable terms negated before they drain budget - the least glamorous work in PPC, and the most profitable.",
        "tag"   => "Waste dies weekly",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-74.webp",
        "icon"  => "assets/images/services/icons/Vector-83.webp",
        "title" => "Bid & placement optimization",
        "text"  => "Bids tuned to target ACOS with placement modifiers for top-of-search where it pays - and pulled back where it doesn't.",
        "tag"   => "Tuned to your target",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-75.webp",
        "icon"  => "assets/images/services/icons/Vector-84.webp",
        "title" => "Dayparting & budget pacing",
        "text"  => "Spend concentrated in the hours and days your buyers convert - budgets that last the month instead of dying by the 20th.",
        "tag"   => "Paced to convert",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-76.webp",
        "icon"  => "assets/images/services/icons/Vector-85.webp",
        "title" => "Full-funnel coverage",
        "text"  => "Sponsored Products for capture, Brands for share, Display for retargeting - each layer added when the data justifies it.",
        "tag"   => "Layered on proof",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-10.webp",
        "icon"  => "assets/images/services/icons/Vector-8.webp",
        "title" => "Competitor & category targeting",
        "text"  => "Product-targeting campaigns on rival listings where the economics work - offense, priced honestly.",
        "tag"   => "Shortlist attached",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-18.webp",
        "icon"  => "assets/images/services/icons/Vector-16.webp",
        "title" => "Profit-first reporting",
        "text"  => "Spend, sales, ACOS, TACOS, and true ad-attributed profit - every Friday, in plain language, with next week's moves listed.",
        "tag"   => "Every Friday",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-9.webp",
        "icon"  => "assets/images/services/icons/Vector-7.webp",
        "title" => "Scale playbook",
        "text"  => "Proven campaigns get budget, new products get launch structures, and new platforms open when the numbers say go.",
        "tag"   => "Growth on proof",
        "link"  => "javascript:;",
    ],
];

include '../includes/service-cards.php';
?>
 

    <section class="test-in-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <!-- <div class="review-logo-slider" dir="rtl">
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                        <div class="img"><h3>PPC Management <span>*</span></h3></div>
                    </div> -->
                    <div class="marquee-wrap" data-marquee data-text="PPC Management" data-speed="40">
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
            "title" => "Amazon Ads",
            "text"  => "Sponsored Products, Brands, and Display - the deepest discipline in our shop, from launch structures to DSP-ready maturity.",
            "tag"   => "SP · SB · SD",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-65.webp",
            "icon"  => "assets/images/services/icons/Vector-63.webp",
            "title" => "Walmart Connect",
            "text"  => "Sponsored Search on thinner competition - often the cheapest profitable clicks in retail media right now.",
            "tag"   => "Underpriced attention",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-66.webp",
            "icon"  => "assets/images/services/icons/Vector-64.webp",
            "title" => "eBay Promoted Listings",
            "text"  => "Standard and Advanced placements with ad rates tuned weekly - visibility priced to your margin, not eBay's suggestion.",
            "tag"   => "Rate-disciplined",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-67.webp",
            "icon"  => "assets/images/services/icons/Vector-65.webp",
            "title" => "Etsy Ads",
            "text"  => "Budgets behind listings that already convert organically, with Offsite Ads economics priced into every decision.",
            "tag"   => "Proof before spend",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-68.webp",
            "icon"  => "assets/images/services/icons/Vector-66.webp",
            "title" => "TikTok Shop Ads",
            "text"  => "GMV Max and boosts behind content that's already proving itself - fuel on fire, never fuel on wet wood.",
            "tag"   => "Content-led",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-25.webp",
            "icon"  => "assets/images/services/icons/Vector-22.webp",
            "title" => "Google Shopping",
            "text"  => "Feed-driven campaigns for your own store - the off-marketplace layer that diversifies where your buyers come from.",
            "tag"   => "Off-marketplace layer",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Running ads on two or three of these already? The audit reviews them together — cross-platform waste is the most common finding. Audit all my channels.";

    include '../includes/service-categories.php';
    ?>

    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From bleeding budget to compounding ads, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Audit & targets",
            "text"  => "Account autopsy, wasted-spend estimate, and target ACOS set from your real margins.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Restructure",
            "text"  => "Campaign architecture rebuilt so data flows from discovery to exact-match winners.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Weekly cycle",
            "text"  => "Harvest, negate, bid, and reallocate — the optimization loop that never skips a week.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Scale",
            "text"  => "Proven campaigns get budget; new layers and platforms open on the data.",
        ],
    ];

    $stepFooterText = "ypical timeline: waste cut in weeks; structural gains compound over 60–90 days.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Running ads yourself and watching ACOS climb?";
    $ctaText = "The free audit shows your wasted spend in dollars before you commit to anything. Honest verdict included.";
    $ctaBtnText = "Audit my ad account";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "What separates our ad management.";

    $wayItems = [
        [
            "title" => "Profit, not vanity ROAS",
            "text"  => "We report true ad-attributed profit and TACOS, not cherry-picked ROAS on brand terms. If a campaign can't earn its spend, we cut it and tell you why.",
        ],
        [
            "title" => "Operators, not dashboards",
            "text"  => "Tooling handles bid mechanics; humans make the structural calls. Sellers leave \"AI-managed\" services for exactly this reason — rules without judgment bleed accounts slowly.",
        ],
        [
            "title" => "Your account, your data, no hostages",
            "text"  => "Everything runs inside your seller account — campaigns, history, and learnings stay yours. Month to month after onboarding, because retention should be earned weekly.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>The weekly loop</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">The four moves we never skip.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        PPC decays without maintenance — search language shifts, competitors bid, waste creeps back. This loop runs on every account, every week, without exception.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-86.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Harvest</h3>
                                <p>Search-term reports mined; converting queries promoted from discovery campaigns to exact-match winners.</p>
                                <a href="javascript:;">Winners promoted</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-83.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Bid & place</h3>
                                <p>Bids tuned to target ACOS; placement modifiers adjusted where top-of-search earns its premium - and where it doesn't.</p>
                                <a href="javascript:;">Tuned to target</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-37.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Negate</h3>
                                <p>Irrelevant and unprofitable terms negated across the account - waste killed before next week's budget meets it.</p>
                                <a href="javascript:;">Waste killed</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-87.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Reallocate</h3>
                                <p>Budgets move to what's earning; the Friday report shows you exactly what moved and why.</p>
                                <a href="javascript:;">Money follows proof</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Your first ninety days, without the hype curve.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Ads improve in two speeds: waste dies fast, structure compounds slowly. Here's the honest shape of both — the same one we'll show you on the audit.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-88.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 0-30</h4>
                            </span>
                        </div>
                        <h3>Audit & rebuild</h3>
                        <p>Full account autopsy, wasted spend cut immediately, campaign architecture rebuilt, target ACOS set from your margins. Expect efficiency gains first - growth comes after structure.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-32.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 30-60</h4>
                            </span>
                        </div>
                        <h3>The loop compounds</h3>
                        <p>Weekly harvesting feeds exact-match winners; negatives keep waste dead; bids settle toward target. ACOS trends down while sales hold or climb.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-23.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 60-90</h4>
                            </span>
                        </div>
                        <h3>Scale on proof</h3>
                        <p>Proven campaigns get budget, new ad layers open where data justifies them, and ranking lift starts showing in TACOS - the ads now feed organic growth too.</p>
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
                                    <h5>Friday report: spend, ACOS, TACOS, ad profit</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>4</h4>
                                    <h5>Loop moves run — harvest, negate, bid, reallocate</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-2.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>1/mo</h4>
                                    <h5>Strategy review with next month's plan</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-3.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>0</h4>
                                    <h5>Long-term contracts — month to month</h5>
                                </span>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="btn-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <a href="javascript:;" class="themeBtn">Map my 90 days</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Managed weekly vs. set-and-forget.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>The weekly discipline</h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Search terms harvested and promoted every week</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Negatives added before waste compounds</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Target ACOS from your margins, managed to it</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Budgets reallocated to what's earning</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>A human reads your data and tells you what it means</span></li>
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
                                <h3>Set-and-forget (or rules-only)</h3>
                            </span>
                        </div>
                        <div class="cb-box cb-box-trans">
                            <ul>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Campaigns built once, drifting for months</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>The same irrelevant clicks billed week after week</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Bids chasing a number nobody derived from margin</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Budget split by habit while winners starve</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>A dashboard nobody reads until the card statement hurts</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Automation tools are genuinely useful — we use them for bid mechanics. What they can't do is judgment. You're hiring the judgment.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your wasted spend could be found this week.";
    $sectionText = "Free ads audit on the first call — wasted spend in dollars, honest verdict. No long lock-ins, ever.";

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