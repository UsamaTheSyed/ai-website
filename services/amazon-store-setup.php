<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Launch on Amazon right the first time.";
    $bannerParagraph = "Seller Central registration, first-attempt verification, category ungating, launch-ready listings, and a branded storefront — delivered in weeks with a documented handoff. Your account, built to professional standard from day one.";
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
    $sectionHeading = "Most Amazon stores are broken before the first sale.";
    $sectionText = "
       Most Amazon stores are damaged before the first sale: verification rejected over a mismatched document, tax settings misconfigured, products locked in gated categories, listings missing the details that rank. Our setup service exists so none of that happens to yours. We prepare your documents against Amazon's current requirements before anything is submitted, configure business, tax, payment, and shipping settings correctly the first time, and handle category ungating with the invoices and paperwork Amazon's approval process actually expects.
        <br><br>
       Then we make it launch-ready: professionally built listings with search-mapped titles and clean imagery standards, a branded storefront, and every policy checkbox verified. You receive a documented handoff of everything configured, a training call, and 30 days of post-launch support. Run it yourself from there — or hand the keys to our automation team. Either way, the foundation is right.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Documents reviewed against Amazon's requirements before submission</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Tax, payment, and shipping settings configured right the first time</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Ungating handled with the paperwork approvals actually require</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Documented handoff, training call, and 30 days of support</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "600+", "text" => "Seller accounts set up & launched"],
        ["number" => "2-3 Wks", "text" => "Typical registration-to-launch time"],
        ["number" => "1st Try", "text" => "Verification pass rate we build for"],
        ["number" => "30 Days", "text" => "Post-launch support included"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "Registration to launch day, nothing skipped.";
$sectionText = "Nine setup workstreams on one tracked checklist — you watch it move from documents to launch-ready.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-53.webp",
        "icon"  => "assets/images/services/icons/Vector-51.webp",
        "title" => "Registration & verification",
        "text"  => "Seller Central registration with every document reviewed against Amazon's current requirements before submission - built for a first-attempt pass.",
        "tag"   => "First-attempt standard",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-54.webp",
        "icon"  => "assets/images/services/icons/Vector-52.webp",
        "title" => "Business & tax configuration",
        "text"  => "Individual vs business registration mapped to your situation; tax interview, payment, and deposit settings configured correctly once.",
        "tag"   => "Set right, once",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-50.webp",
        "icon"  => "assets/images/services/icons/Vector-48.webp",
        "title" => "Category ungating",
        "text"  => "Restricted-category approvals prepared with the supplier invoices and documentation Amazon actually accepts - where most DIY attempts fail.",
        "tag"   => "Where your products need it",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-9.webp",
        "icon"  => "assets/images/services/icons/Vector-7.webp",
        "title" => "Launch listings",
        "text"  => "Your first products built to rank - search-mapped titles, complete bullets and backend terms, clean imagery standards.",
        "tag"   => "Launch-ready catalog",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-43.webp",
        "icon"  => "assets/images/services/icons/Vector-41.webp",
        "title" => "Brand storefront",
        "text"  => "A branded Amazon storefront and A+ groundwork where eligible - your store looks like a business, not an experiment.",
        "tag"   => "Brand-ready",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-12.webp",
        "icon"  => "assets/images/services/icons/Vector-10.webp",
        "title" => "Shipping & FBA configuration",
        "text"  => "Shipping templates, FBA enrollment, and first shipment plan set up - so fulfilment works from order one.",
        "tag"   => "Order-one ready",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-8.webp",
        "icon"  => "assets/images/services/icons/Vector-4.webp",
        "title" => "Compliance walkthrough",
        "text"  => "Policy essentials, account-health basics, and the mistakes that suspend new sellers - covered before you can make them.",
        "tag"   => "Suspension-proofing",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-55.webp",
        "icon"  => "assets/images/services/icons/Vector-53.webp",
        "title" => "Documented handoff",
        "text"  => "Everything configured, written down - credentials map, settings record, and a training call so you're operating with confidence.",
        "tag"   => "Yours to keep",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-56.webp",
        "icon"  => "assets/images/services/icons/Vector-54.webp",
        "title" => "30-day launch support",
        "text"  => "A month of post-launch answers for setup-related questions - and a seamless path to our automation service if you want the store run for you.",
        "tag"   => "Included, always",
        "link"  => "javascript:;",
    ],
];

include '../includes/service-cards.php';
?>
 

    <section class="test-in-sect">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="marquee-wrap" data-marquee data-text="Amazon Store Setup" data-speed="50">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $subtitle = "Who launches with us";
    $sectionHeading = "Six kinds of sellers, one clean launch.";
    $sectionText = "Different starting points, same requirement: an account built right the first time. Here's who books this service.";

    $categoryItems = [
        [
            "img"   => "assets/images/services/icons/av-9.webp",
            "icon"  => "assets/images/services/icons/Vector-7.webp",
            "title" => "First-time sellers",
            "text"  => "No ecommerce background, no problem - the maze of registration, verification, and settings is exactly what we remove.",
            "tag"   => "Most common start",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-57.webp",
            "icon"  => "assets/images/services/icons/Vector-55.webp",
            "title" => "Existing brand owners",
            "text"  => "Selling on your own site or in retail? We bring the brand onto Amazon properly - storefront, listings, and brand registry groundwork.",
            "tag"   => "Brand-first setup",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-33.webp",
            "icon"  => "assets/images/services/icons/Vector-30.webp",
            "title" => "International sellers entering the US",
            "text"  => "Cross-border documentation, tax interviews, and US marketplace requirements handled for non-US founders.",
            "tag"   => "Cross-border ready",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-43.webp",
            "icon"  => "assets/images/services/icons/Vector-41.webp",
            "title" => "Sellers from other platforms",
            "text"  => "Killing it on Shopify, eBay, or Etsy? Your catalog gets translated into Amazon's format and standards - without relearning everything.",
            "tag"   => "Catalog migration",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-58.webp",
            "icon"  => "assets/images/services/icons/Vector-56.webp",
            "title" => "Investors pre-automation",
            "text"  => "Setting up before handing operations to our automation team - the cleanest possible foundation for a managed store.",
            "tag"   => "Setup → managed",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-59.webp",
            "icon"  => "assets/images/services/icons/Vector-57.webp",
            "title" => "Stuck & rejected setups",
            "text"  => "Verification loops, denied ungating, half-configured accounts - diagnosed, fixed, and pushed through to launch.",
            "tag"   => "Rescue work",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Not sure which one you are? The setup call sorts it in twenty minutes. Find my path.";

    include '../includes/service-categories.php';
    ?>

    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From paperwork to launch day, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Documents & plan",
            "text"  => "Setup call, document checklist, and your launch plan — reviewed before anything is submitted.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Registration & verification ",
            "text"  => "Account registered and identity verification passed — built for the first attempt.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Configure & build",
            "text"  => "Tax, payments, shipping, ungating, listings, and storefront — every checklist item closed.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Handoff & support",
            "text"  => "Documented handoff, training call, and 30 days of post-launch support.",
        ],
    ];

    $stepFooterText = "Typical timeline: kickoff to launch-ready in 2–3 weeks.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Started a setup yourself and got rejected — or stuck?";
    $ctaText = "Setup rescues are half our work: we diagnose the rejection, fix the documents, and resubmit properly. Free audit first, honest verdict included.";
    $ctaBtnText = "Audit my existing store";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "Why setups go smoother with us.";

    $wayItems = [
        [
            "title" => "We know what Amazon checks",
            "text"  => "Six hundred setups have taught us exactly where verifications fail and ungating requests die — so your documents are corrected before submission, not after rejection.",
        ],
        [
            "title" => "Built in your name, handed to you",
            "text"  => "Everything — account, storefront, listings — is registered to you and documented for you. No dependency on us afterward unless you want it.",
        ],
        [
            "title" => "Fixed scope, no meter running",
            "text"  => "Setup is priced as a defined project with a tracked checklist — you see exactly what's included and watch it complete. No surprise add-ons mid-build.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>The launch sequence</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Four gates between you and launch day.</h2>
                    <p>
                        Amazon setup is sequential — each gate blocks the next, and a mistake at any of them costs weeks. We clear them in order, properly.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-2.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Documents</h3>
                                <p>ID, address, bank, and business details assembled and cross-checked against Amazon's requirements - before anything is submitted.</p>
                                <a href="javascript:;">Mismatches caught here</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-60.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Configuration</h3>
                                <p>Tax interview, payments, shipping templates, FBA enrollment, and ungating - the settings that silently break stores when rushed.</p>
                                <a href="javascript:;">Set right, once</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-4.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Verification</h3>
                                <p>Registration submitted clean; identity verification passed on the first attempt is the standard we build for.</p>
                                <a href="javascript:;">The gate that stalls DIY</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-7.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Catalog & launch</h3>
                                <p>Listings built to rank, storefront live, checklist verified - and the handoff that makes it genuinely yours.</p>
                                <a href="javascript:;">Launch day</a>
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
                    <p>
                        Setup is the one service where we control almost every variable — so this timeline is a commitment, not a hope. Verification review time is Amazon's; everything else is ours.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-24.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Week 1</h4>
                            </span>
                        </div>
                        <h3>Documents & submission</h3>
                        <p>Kickoff call, document collection and cross-check, registration submitted, verification underway. Your only homework: providing the documents on our checklist.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-56.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Week 2</h4>
                            </span>
                        </div>
                        <h3>Configuration & ungating</h3>
                        <p>Verification lands; tax, payment, and shipping configured; ungating requests filed with proper invoice packages where your products need them.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-41.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Week 3</h4>
                            </span>
                        </div>
                        <h3>Catalog, storefront & handoff</h3>
                        <p>Listings built and reviewed, storefront live, 24-point launch checklist closed, handoff document delivered, training call booked.</p>
                    </div>
                </div>
            </div>
            <div class="row  align-items-center">
                <div class="col-md-9">
                        <div class="ser-ban">
                            <h4 data-aos="fade-up" data-aos-anchor-placement="top-bottom">What lands in your inbox every week</h4>
                            <div class="icon-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>24-pt</h4>
                                    <h5>Launch checklist, every item closed</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>1</h4>
                                    <h5>Written handoff doc — every setting recorded</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-2.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>1</h4>
                                    <h5>Training call, recorded for reference</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-3.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>30</h4>
                                    <h5>Days of post-launch support included</h5>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Professional setup vs. figuring it out.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>Set up by specialists </h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Documents cross-checked before submission</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Verification built for a first-attempt pass</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Ungating filed with invoices Amazon accepts</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Tax and shipping configured right, once</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Live in 2–3 weeks with a written handoff</span></li>
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
                                <h3>Figuring it out solo</h3>
                            </span>
                        </div>
                        <div class="cb-box cb-box-trans">
                            <ul>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Rejection emails with no stated reason</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Verification loops that burn entire weeks</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Ungating denials with products already ordered</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Settings mistakes discovered at first payout</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Six weeks in, still not live, motivation gone</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Plenty of sellers do set up alone successfully. This service exists because the ones who don't lose weeks at exactly the moment their momentum matters most.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your store could be launch-ready in 3 weeks.";
    $sectionText = "Free setup plan on the first call — documents, timeline, and ungating needs. Fixed scope, no meter running.";

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