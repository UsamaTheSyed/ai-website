<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Rankings don't start with luck. They start with the right words.";
    $bannerParagraph = "Intent-classified, difficulty-scored keyword intelligence for Amazon, Walmart, eBay, Etsy, and Google — with competitor gaps exposed and PPC seed lists ready to launch. The foundation every listing and every campaign is built on.";
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
    $sectionHeading = "Volume lists are cheap. Decisions are the product.";
    $sectionText = "
       Any tool can print a list of search volumes. What a volume list can't tell you is which queries carry buying intent, which you can realistically rank for at your listing's current strength, and which your competitors have left uncovered. That's the difference between keyword data and keyword research — and it's why listings stuffed with high-volume terms sit invisible while smaller sellers quietly own the queries that convert.
        <br><br>
       Our deep keyword research mines real search-term data from the platforms you sell on, classifies every query by intent, scores difficulty against your actual competitive position, and runs a gap analysis on the rivals ranking above you. It arrives as a tiered map — priority, growth, and long-tail — with every keyword assigned to a destination: a title, a bullet, a backend slot, or a PPC campaign with match types and starter negatives. Research you can execute the same day, with a walkthrough call to make sure you do.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Real marketplace search-term data, not tool-only estimates</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Every keyword classified by intent — buy, compare, or browse</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Difficulty scored against your listing's real strength</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Every term mapped to a destination: listing slot or campaign</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "900+", "text" => "Keyword maps delivered to sellers"],
        ["number" => "6", "text" => "Platforms covered, each on its own method"],
        ["number" => "~7 days", "text" => "Standard report turnaround"],
        ["number" => "1,000+", "text" => "Keywords in a typical product-line map"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "Nine layers of research in every map.";
$sectionText = "This is what \"deep\" means — nine analysis layers between raw queries and the finished, ready-to-execute map.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-25.webp",
        "icon"  => "assets/images/services/icons/Vector-22.webp",
        "title" => "Search-term mining",
        "text"  => "Real query data pulled from the marketplaces you sell on — seed expansion, autocomplete harvesting, and search-report analysis.",
        "tag"   => "Platform-native data",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-57.webp",
        "icon"  => "assets/images/services/icons/Vector-55.webp",
        "title" => "Intent classification",
        "text"  => "Every query tagged buy, compare, or browse — because ranking for the wrong intent brings traffic that never converts.",
        "tag"   => "Every single term",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-60.webp",
        "icon"  => "assets/images/services/icons/Vector-58.webp",
        "title" => "Difficulty scoring",
        "text"  => "Rank probability scored against your listing's reviews, price, and content strength — not generic tool difficulty numbers.",
        "tag"   => "Scored to your listing",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-29.webp",
        "icon"  => "assets/images/services/icons/Vector-26.webp",
        "title" => "Competitor gap analysis",
        "text"  => "The queries your top rivals rank for and you don't — and the ones nobody has claimed yet. The gaps are where growth is cheapest.",
        "tag"   => "Top rivals, reverse-mapped",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-61.webp",
        "icon"  => "assets/images/services/icons/Vector-59.webp",
        "title" => "Long-tail mapping",
        "text"  => "The specific multi-word queries with lower volume and dramatically higher conversion — organized into clusters your listings can own.",
        "tag"   => "Clustered & assigned",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-47.webp",
        "icon"  => "assets/images/services/icons/Vector-45.webp",
        "title" => "Seasonal & trend signals",
        "text"  => "Queries that spike by season or trend flagged with timing — so listings and campaigns are dressed before the wave, not after.",
        "tag"   => "Timed to the calendar",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-62.webp",
        "icon"  => "assets/images/services/icons/Vector-60.webp",
        "title" => "PPC seed lists & negatives",
        "text"  => "Campaign-ready exports with suggested match types — plus starter negative lists that stop waste before the first click.",
        "tag"   => "Launch-ready exports",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-63.webp",
        "icon"  => "assets/images/services/icons/Vector-61.webp",
        "title" => "Backend & attribute terms",
        "text"  => "The hidden keyword real estate — backend search terms, item specifics, and tags — filled to each platform's exact rules.",
        "tag"   => "Platform-exact",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-64.webp",
        "icon"  => "assets/images/services/icons/Vector-62.webp",
        "title" => "The map & walkthrough",
        "text"  => "Everything assembled into a tiered, prioritized map — delivered with a walkthrough call so execution starts the same day.",
        "tag"   => "Execute same-day",
        "link"  => "javascript:;",
    ],
];

include '../includes/service-cards.php';
?>
 

    <section class="test-in-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="marquee-wrap" data-marquee data-text="Deep Keyword Research" data-speed="50">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $subtitle = "Where we mine";
    $sectionHeading = "Six search engines, six methodologies.";
    $sectionText = "Every platform ranks by its own logic — so every platform gets its own research method. One recycled list across marketplaces is how agencies fake depth; this is the real thing.";

    $categoryItems = [
        [
            "img"   => "assets/images/services/icons/av-4.webp",
            "icon"  => "assets/images/services/icons/Vector-1.webp",
            "title" => "Amazon (A9)",
            "text"  => "Search-term reports, autocomplete harvesting, and reverse-ASIN work on your rivals - mapped to titles, bullets, and backend slots.",
            "tag"   => "The deepest layer",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-65.webp",
            "icon"  => "assets/images/services/icons/Vector-63.webp",
            "title" => "Walmart Marketplace",
            "text"  => "Item-specific and attribute-driven ranking mined for the thinner-competition queries Walmart buyers actually type.",
            "tag"   => "Attribute-mapped",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-66.webp",
            "icon"  => "assets/images/services/icons/Vector-64.webp",
            "title" => "eBay (Cassini)",
            "text"  => "Title and item-specifics research tuned to Cassini's engagement-weighted ranking - a different game from Amazon entirely.",
            "tag"   => "Cassini-tuned",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-67.webp",
            "icon"  => "assets/images/services/icons/Vector-65.webp",
            "title" => "Etsy",
            "text"  => "Tag, title, and attribute research built for Etsy's query-matching and quality-score system - where long-tail is everything.",
            "tag"   => "Tag-complete",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-68.webp",
            "icon"  => "assets/images/services/icons/Vector-66.webp",
            "title" => "TikTok Shop",
            "text"  => "Search and trend-term research for the newest marketplace - where query language shifts weekly and timing beats volume.",
            "tag"   => "Trend-timed",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-33.webp",
            "icon"  => "assets/images/services/icons/Vector-30.webp",
            "title" => "Google & web SEO",
            "text"  => "Buyer-intent web queries for your own store or brand site - the layer that feeds traffic from outside the marketplaces.",
            "tag"   => "Off-marketplace layer",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Sell on two or three of these? Bundle maps are scoped together so cross-platform terms are shared where they help — and separated where they'd hurt. Scope my platforms.";

    include '../includes/service-categories.php';
    ?>

    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From scoping call to executed map, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Scope",
            "text"  => "Products, platforms, and competitors defined; seed terms gathered from your catalog.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Mine & classify ",
            "text"  => "Query data pulled and expanded; every term tagged by intent and clustered.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Score & map",
            "text"  => "Difficulty scored to your listing, gaps analyzed, every keyword given a destination.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Deliver & walkthrough",
            "text"  => "Tiered map, PPC exports, and a walkthrough call — execution starts same-day.",
        ],
    ];

    $stepFooterText = "Typical timeline: scope to delivered map in about 7 days.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Listings live but invisible in search?";
    $ctaText = "A keyword gap audit shows exactly which queries you're missing and why rivals outrank you. Free sample first, honest verdict included.";
    $ctaBtnText = "Audit my existing store";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "Why our research runs deeper.";

    $wayItems = [
        [
            "title" => "Operators, not report factories",
            "text"  => "The same team runs live stores on these platforms — so every map reflects how rankings actually behave this quarter, not how a tool's manual says they should.",
        ],
        [
            "title" => "Decisions, not dumps",
            "text"  => "No 5,000-row spreadsheet exports. Every keyword arrives tiered, intent-tagged, and assigned to a destination — a map you execute, not a dataset you drown in.",
        ],
        [
            "title" => "Platform-specific method",
            "text"  => "A9 is not Cassini is not Etsy search. Each platform's map is built on its own ranking logic — never one list recycled across marketplaces.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>The method</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Raw queries in. Ranked listings out.</h2>
                    <p>
                        Four passes stand between a pile of search data and a map you can execute. Skipping any of them is how keyword research becomes keyword noise.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-75.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Mine</h3>
                                <p>Thousands of real queries pulled from platform data, seed expansion, and competitor listings — volume without judgment, yet.</p>
                                <a href="javascript:;">Breadth first</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-69.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Score</h3>
                                <p>Difficulty judged against your listing's actual strength — reviews, price, content — so the map targets winnable ground.</p>
                                <a href="javascript:;">Your listing, not averages</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-76.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Classify</h3>
                                <p>Every term tagged by intent — buy, compare, browse — because traffic without intent is a vanity metric with a hosting bill.</p>
                                <a href="javascript:;">Intent is the filter</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-77.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Map</h3>
                                <p>Each surviving term assigned a destination — title, bullet, backend, tag, or campaign — with the tier telling you what to do first.</p>
                                <a href="javascript:;">Destination per term</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Your three weeks, week by honest week.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Research is the one deliverable with no marketplace approvals to wait on — so the week below is the standard schedule, not a best case.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-78.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 1-2</h4>
                            </span>
                        </div>
                        <h3>Scope & seed</h3>
                        <p>Scoping call, product and competitor list locked, seed terms gathered from your catalog and your rivals'. You approve the scope before mining starts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-75.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 3-5</h4>
                            </span>
                        </div>
                        <h3>Mine, classify, score</h3>
                        <p>Full query mining across your platforms, intent tagging, difficulty scoring, and the competitor gap pass. The map takes shape in tiers.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-79.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Days 6-7</h4>
                            </span>
                        </div>
                        <h3>Map & walkthrough</h3>
                        <p>Final map assembled, PPC exports built, walkthrough call booked. You leave the call knowing exactly what to change first and why.</p>
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
                                    <h4>1,000+</h4>
                                    <h5>Keywords in a typical product-line map</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>3</h4>
                                    <h5>Tiers — priority, growth, long-tail</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-2.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>PPC</h4>
                                    <h5>Seed lists + starter negatives, export-ready</h5>
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
                                    <h5>Walkthrough call — execute same-day</h5>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">A tool subscription vs. finished research.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>Deep research, delivered</h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Intent-tagged terms, not raw volume columns</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Difficulty scored against your actual listing</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Competitor gaps you'd never spot manually</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Every keyword assigned a destination</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Walkthrough call — executing within a day</span></li>
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
                                <h3>Tool subscription, DIY</h3>
                            </span>
                        </div>
                        <div class="cb-box cb-box-trans">
                            <ul>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>5,000 rows of volume data, zero verdicts</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Difficulty scores that ignore your listing entirely</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Hours lost, analysis half-finished on a Sunday</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Big-volume terms stuffed into titles, ranking for none</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>The subscription renews; the strategy never ships</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Tools are excellent — we use several. The difference is the analyst hours between the data and the decision. You're buying those hours, finished.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your keyword map could be in your hands in 7 days.";
    $sectionText = "Free keyword sample on the first call — ten mapped terms, method on display. Fixed scope, yours forever.";

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