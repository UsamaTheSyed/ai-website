<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Your eBay store, finally running itself.";
    $bannerParagraph = "Cassini-tuned listings, automated repricing, promoted listings, and daily order handling — with seller standards tracked weekly so growth never risks the account. You own the store. We do the work.";
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
    $sectionHeading = "Stalled eBay stores share one diagnosis. We treat it.";
    $sectionText = "
        Most stalled eBay stores share the same diagnosis: dated listings, static pricing, and hours lost to order admin. Our eBay automation service rebuilds all three. Listings get search-optimized titles and complete item specifics that match how eBay's Cassini engine actually ranks; pricing runs on competitive rules instead of gut feel; and promotions — markdown events, volume discounts, promoted listings — are deployed with intent rather than habit.
        <br><br>
        Just as important is what we protect: your seller standards. Late shipment rate, defect rate, and tracking validity are monitored weekly and managed to Top Rated thresholds — because on eBay, a healthy account is the growth strategy. Visibility follows performance, and performance is what we run daily: same-day order processing, fast case resolution, and feedback actively managed.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Listings rebuilt for Cassini — titles, item specifics, photo standards</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Repricing rules that respond to the market and protect your floor</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Orders processed same-day with tracking uploaded on time, every time</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Weekly report: sales, margin, seller standards, next actions</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "180+", "text" => "eBay stores revamped & managed"],
        ["number" => "Top Rated", "text" => "Seller thresholds managed weekly"],
        ["number" => "92%", "text" => "Clients see growth within 3 months"],
        ["number" => "Same-day", "text" => "Order processing tempo"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
$subtitle = "What's included";
$sectionHeading = "Cassini to checkout — the whole store, handled.";
$sectionText = "Listings, pricing, promotions, orders, returns, and standards — nine workstreams with one weekly report.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-25.webp",
        "icon"  => "assets/images/services/icons/Vector-22.webp",
        "title" => "Listing optimization",
        "text"  => "Search-tuned titles, complete item specifics, and clean photo standards across the catalog — built for how Cassini actually ranks.",
        "tag"   => "Every listing, to standard",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-34.webp",
        "icon"  => "assets/images/services/icons/Vector-32.webp",
        "title" => "Automated repricing",
        "text"  => "Competitive pricing rules that respond to the market around the clock while protecting your floor margin.",
        "tag"   => "24/7 automated",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-20.webp",
        "icon"  => "assets/images/services/icons/Vector-18.webp",
        "title" => "Promoted Listings & promotions",
        "text"  => "Markdown events, volume discounts, and Promoted Listings deployed where the economics work — with ad rates reviewed weekly.",
        "tag"   => "Intent, not habit",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-12.webp",
        "icon"  => "assets/images/services/icons/Vector-10.webp",
        "title" => "Order & shipping management",
        "text"  => "Repricing rules built for Walmart's algorithm — winning share while defending your floor margin around the clock.",
        "tag"   => "Same-day tempo",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-35.webp",
        "icon"  => "assets/images/services/icons/Vector-33.webp",
        "title" => "Returns & case handling",
        "text"  => "Returns, INR/SNAD cases, and disputes resolved fast to protect both the sale and your ratings.",
        "tag"   => "Resolved, not parked",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-8.webp",
        "icon"  => "assets/images/services/icons/Vector-4.webp",
        "title" => "Seller-standard protection",
        "text"  => "Defect rate, late shipment rate, and tracking validity managed to Top Rated thresholds — corrective action before eBay acts.",
        "tag"   => "Reviewed weekly",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-15.webp",
        "icon"  => "assets/images/services/icons/Vector-13.webp",
        "title" => "Buyer messages & feedback",
        "text"  => "Questions answered within SLA and feedback actively managed — reputation treated as the asset it is.",
        "tag"   => "Policy-safe, always",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-29.webp",
        "icon"  => "assets/images/services/icons/Vector-26.webp",
        "title" => "Profit-level reporting",
        "text"  => "Sales, final value fees, ad spend, and true net per listing — reported weekly in plain language, with next actions listed.",
        "tag"   => "Every Friday",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-9.webp",
        "icon"  => "assets/images/services/icons/Vector-7.webp",
        "title" => "Store growth strategy",
        "text"  => "Store subscription tiers, category expansion, and international visibility opened when the numbers say go.",
        "tag"   => "From month one",
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
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                        <div class="img"><h3>ebay Automation <span>*</span></h3></div>
                    </div> -->
                    <div class="marquee-wrap" data-marquee data-text="ebay Automation" data-speed="50">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From audit call to hands-off FBA, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Store audit",
            "text"  => "Listings, pricing, and metrics diagnosed to find the actual growth blockers.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Catalog revamp",
            "text"  => "Listings rebuilt to current Cassini search and content standards.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Automation live",
            "text"  => "Repricing, orders, returns, and promotions run daily with a fixed weekly report.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Grow",
            "text"  => "Promoted Listings and assortment expansion scale what the data says works.",
        ],
    ];

    $stepFooterText = "Typical timeline: kickoff to first sales in 3–4 weeks.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Store restricted, below standard, or drowning in cases?";
    $ctaText = "We rescue metrics and handle appeals in-house. Free audit first, honest verdict included.";
    $ctaBtnText = "Audit my existing store";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "What separates us on eBay.";

    $wayItems = [
        [
            "title" => "Cassini-literate listings",
            "text"  => "We optimize for how eBay search actually ranks — item specifics, engagement signals, and content standards — not seller-forum folklore.",
        ],
        [
            "title" => "Account health as strategy",
            "text"  => "Top Rated thresholds are managed weekly because on eBay, visibility follows performance. Metric protection isn't an add-on — it's the engine.",
        ],
        [
            "title" => "Fast operational tempo",
            "text"  => "Same-day orders, fast case resolution, daily message handling. Buyers notice — and so does eBay's algorithm.",
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