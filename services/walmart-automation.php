<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Walmart rewards discipline. We supply it daily.";
    $bannerParagraph = "Seller approval, catalog quality, Buy Box pricing, WFS logistics, and scorecard compliance — run daily by a dedicated team while you track everything from a live dashboard. You own the account. We do the work.";
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
    $sectionHeading = "A tougher door. A better room.";
    $sectionText = "
        Walmart Marketplace is deliberately harder to enter than other platforms — and that's exactly the opportunity. Fewer approved sellers means thinner competition for the buyers of America's largest retailer. Our Walmart automation service starts at the door: we prepare your application and documentation to clear Walmart's vetting, then build a catalog with complete specs and category-correct attributes that earn strong listing quality scores.
        <br><br>
        Once you're selling, the discipline begins: pricing tuned for Buy Box share without racing to zero margin, inventory synchronized so overselling never damages your metrics, and the seller scorecard — on-time delivery, order defect rate, tracking validity — reviewed weekly with corrective action taken before Walmart takes any. You own the account; we keep it compounding.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Approval application prepared to pass Walmart's vetting cleanly</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Catalog built to Walmart's listing-quality standards, spec by spec</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Buy Box pricing that defends margin instead of racing to zero</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Weekly report: sales, margin, scorecard metrics, next actions</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "150+", "text" => "Walmart stores launched & managed"],
        ["number" => "90%+", "text" => "Average on-time delivery maintained"],
        ["number" => "92%", "text" => "Clients see growth within 3 months"],
        ["number" => "Weekly", "text" => "Seller-scorecard compliance reviews"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
$subtitle = "What's included";
$sectionHeading = "Everything Walmart demands, delivered weekly.";
$sectionText = "Approval to assortment, Buy Box to scorecard — nine workstreams managed to the standards Walmart actually measures.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-8.webp",
        "icon"  => "assets/images/services/icons/Vector-4.webp",
        "title" => "Marketplace approval support",
        "text"  => "Application guidance and documentation prepared to clear Walmart's selective seller vetting the first time.",
        "tag"   => "Approval before anything",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-17.webp",
        "icon"  => "assets/images/services/icons/Vector-15.webp",
        "title" => "Catalog & listing quality",
        "text"  => "Complete item specs, rich content, and category-correct attributes for maximum listing quality scores — the ranking currency on Walmart.",
        "tag"   => "Every SKU, to standard",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-12.webp",
        "icon"  => "assets/images/services/icons/Vector-10.webp",
        "title" => "WFS & fulfilment operations",
        "text"  => "WFS enrollment, prep, and inbound shipments where it wins on speed and cost; disciplined seller fulfilment where it doesn't.",
        "tag"   => "Chosen per SKU",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-18.webp",
        "icon"  => "assets/images/services/icons/Vector-16.webp",
        "title" => "Buy Box pricing strategy",
        "text"  => "Repricing rules built for Walmart's algorithm — winning share while defending your floor margin around the clock.",
        "tag"   => "24 7 automated",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-19.webp",
        "icon"  => "assets/images/services/icons/Vector-17.webp",
        "title" => "Scorecard compliance",
        "text"  => "On-time delivery, order defect rate, and tracking validity reviewed weekly — corrective action taken before Walmart takes any.",
        "tag"   => "Reviewed weekly",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-20.webp",
        "icon"  => "assets/images/services/icons/Vector-18.webp",
        "title" => "Walmart Connect advertising",
        "text"  => "Sponsored Search campaigns tuned weekly for profitable return — spend follows proof, never habit.",
        "tag"   => "Weekly optimization",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-15.webp",
        "icon"  => "assets/images/services/icons/Vector-13.webp",
        "title" => "Customer service & reviews",
        "text"  => "Buyer messages answered within SLA, disputes managed, and review growth run inside Walmart's policies.",
        "tag"   => "Policy-safe, always",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-16.webp",
        "icon"  => "assets/images/services/icons/Vector-14.webp",
        "title" => "Profit-level reporting",
        "text"  => "Sales, referral fees, fulfilment costs, and true net per SKU — reported weekly in plain language, with next actions listed. ",
        "tag"   => "Every Friday",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-9.webp",
        "icon"  => "assets/images/services/icons/Vector-7.webp",
        "title" => "Assortment expansion",
        "text"  => "Winning SKUs deepen, new products launch on the data, and multi-channel sync keeps Walmart aligned with your other stores.",
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
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                        <div class="img"><h3>Walmart Automation <span>*</span></h3></div>
                    </div> -->
                    <div class="marquee-wrap" data-marquee data-text="Walmart Automation" data-speed="50">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From approval to hands-off Walmart, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Approval & onboarding",
            "text"  => "Application and documentation prepared; your seller account cleanly approved.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Catalog build",
            "text"  => "Products listed with complete, quality-scored content — spec by spec.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Operations live",
            "text"  => "Pricing, inventory, orders, and ads run daily with a fixed weekly report.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Optimize & expand",
            "text"  => "Winning SKUs scale; assortment grows on the data, synced with your other channels.",
        ],
    ];

    $stepFooterText = "Typical timeline: kickoff to first sales in 3–4 weeks.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Already selling on Walmart but stuck below potential?";
    $ctaText = "We take over existing Walmart accounts — catalog, pricing, and scorecard rescue included. Free audit first, honest verdict included.";
    $ctaBtnText = "Audit my existing store";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "What separates us on Walmart.";

    $wayItems = [
        [
            "title" => "Standards-first operation",
            "text"  => "We manage to Walmart's scorecard, because on this platform the scorecard is the growth strategy — visibility follows performance.",
        ],
        [
            "title" => "You own everything",
            "text"  => "The seller account, the catalog, and the revenue are registered to you. We're the operating team, never a co-owner — and replaceable at any time, which is the accountability you want.",
        ],
        [
            "title" => "Multi-channel coordination",
            "text"  => "Walmart runs alongside your Amazon or Shopify channels with synchronized inventory and pricing — the channels reinforce each other instead of conflicting.",
        ],
    ];

    include '../includes/service-way.php';
    ?>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your Walmart store could be selling in 5 weeks.";
    $sectionText = "Free Walmart audit on the first call — approval odds, category, and a realistic curve. We only do well when your store does.";

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