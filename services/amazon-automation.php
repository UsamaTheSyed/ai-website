<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "A complete Amazon business, operated for you.";
    $bannerParagraph = "Product sourcing, listing SEO, FBA logistics, advertising, and account health — run daily by a dedicated team while you track everything from a live dashboard. You own the account. We do the work.";
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
    $sectionHeading = "Amazon is an operation. We are the operators.";
    $sectionText = "
        Selling on Amazon is a full-scale operation: sourcing that protects margin, listings that rank, logistics that never miss a check-in, and account health that stays green. Our Amazon automation service places that entire operation with one accountable team. We research products with verified demand data, negotiate with vetted suppliers, and build listings engineered for both the A9 algorithm and the human buyer.
        <br><br>
        Once your store is live, the daily grind is ours — inventory forecasting, repricing, FBA shipment management, customer messages, and weekly performance reviews. You keep full ownership of the account and the brand; we operate it under a pricing model tied to your results, so our incentive is identical to yours: profitable, compounding growth.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Products chosen on verified sales data, never trend anecdotes</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Listings built for rank and conversion — title to backend terms</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> FBA restocks forecast so you never pay for stockouts or overstock</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Weekly report: sales, margin, account health, next actions</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "400+", "text" => "Amazon stores launched & managed"],
        ["number" => "10+ days", "text" => "Operating on the Amazon platform"],
        ["number" => "92%", "text" => "Clients see growth within 3 months"],
        ["number" => "Daily", "text" => "Account-health & metric monitoring"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
$subtitle = "What's included";
$sectionHeading = "Every moving part, under one accountable team.";
$sectionText = "Nine workstreams, one weekly report. This is the full operation — not a store build with a goodbye email.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-10.webp",
        "icon"  => "assets/images/services/icons/Vector-8.webp",
        "title" => "Product research & sourcing",
        "text"  => "Demand-verified selection with full margin modeling after every Amazon fee, and supplier vetting before any capital is committed.",
        "tag"   => "Evidence before inventory",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-11.webp",
        "icon"  => "assets/images/services/icons/Vector-9.webp",
        "title" => "Listing creation & SEO",
        "text"  => "Titles, bullets, backend terms, and imagery built from real search data — written to rank on A9 and convert the human reading them.",
        "tag"   => "Every SKU, to standard",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-12.webp",
        "icon"  => "assets/images/services/icons/Vector-10.webp",
        "title" => "FBA logistics management",
        "text"  => "Shipment plans, inventory forecasting, and restock timing handled so you never pay for stockouts or long-term storage fees.",
        "tag"   => "Forecast-driven restocks",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-13.webp",
        "icon"  => "assets/images/services/icons/Vector-11.webp",
        "title" => "Dynamic repricing",
        "text"  => "Buy Box-aware pricing rules that defend margin while keeping your offers competitive around the clock.",
        "tag"   => "24/7 automated",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-8.webp",
        "icon"  => "assets/images/services/icons/Vector-4.webp",
        "title" => "Account health monitoring",
        "text"  => "Performance metrics, policy compliance, and case management watched daily — warnings handled before Amazon acts.",
        "tag"   => "Checked every day",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-14.webp",
        "icon"  => "assets/images/services/icons/Vector-12.webp",
        "title" => "PPC advertising management",
        "text"  => "Sponsored Products and Brands campaigns tuned weekly for profitable ACOS — spend follows proof, never habit.",
        "tag"   => "Weekly optimization",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-15.webp",
        "icon"  => "assets/images/services/icons/Vector-13.webp",
        "title" => "Customer service & reviews",
        "text"  => "Buyer messages answered within SLA, cases managed, and review generation run inside Amazon's terms of service.",
        "tag"   => "TOS-safe, always",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-16.webp",
        "icon"  => "assets/images/services/icons/Vector-14.webp",
        "title" => "Profit-level reporting",
        "text"  => "Sales, fees, ad spend, and true net per SKU — reported weekly in plain language, with the next actions listed.",
        "tag"   => "Every Friday",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-9.webp",
        "icon"  => "assets/images/services/icons/Vector-7.webp",
        "title" => "Scaling & expansion",
        "text"  => "Winning SKUs deepen, new products launch on the data, and international marketplaces open when the numbers say go.",
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
                    <div class="marquee-wrap" data-marquee data-text="Amazon Automation" data-speed="50">
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
            "title" => "Audit & strategy",
            "text"  => "Budget, timeline, and goals assessed; category and product plan mapped with real numbers.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Store & product launch",
            "text"  => "Account setup or takeover, sourcing, and first listings — live, compliant, and to standard.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Daily operations",
            "text"  => "Logistics, pricing, support, and ads run by our team with a fixed weekly report.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Scale",
            "text"  => "Winners get deeper inventory and budget; new SKUs and markets extend the curve.",
        ],
    ];

    $stepFooterText = "Typical timeline: kickoff to first sales in 3–4 weeks.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Already selling on Amazon but stuck — or suspended?";
    $ctaText = "We take over existing accounts and handle reinstatements in-house. Free audit first, honest verdict included.";
    $ctaBtnText = "Audit my existing store";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "What separates us on Amazon.";

    $wayItems = [
        [
            "title" => "A decade on the platform",
            "text"  => "Ten years of Amazon operations means we've already made — and fixed — the mistakes that sink new sellers. Policy shifts don't surprise us; we manage to them.",
        ],
        [
            "title" => "You own everything",
            "text"  => "The Seller Central account, the brand, and the revenue are registered to you. We're the operating team, never a co-owner — and replaceable at any time, which is the accountability you want.",
        ],
        [
            "title" => "Results-tied pricing",
            "text"  => "No bloated retainers. Our compensation scales with your store's performance — and if a product can't earn its shelf space, we're the ones who tell you.",
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