<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Expert hands for your store, without the hiring.";
    $bannerParagraph = "A marketplace-trained virtual assistant handles your listings, orders, customer messages, and admin — supervised by our QA layer, with backup coverage built in. You get the output of a great hire without the recruiting, training, or single-point-of-failure risk.";
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
    $sectionHeading = "The work that eats your week isn't the work that grows your store.";
    $sectionText = "
       Every seller reaches the same wall: the store's growth depends on strategy, sourcing, and marketing — but the week disappears into messages, order admin, listing updates, and spreadsheet upkeep. Hiring help sounds like the answer until you price the reality: job posts, interviews, training someone on marketplace operations from scratch, and the risk that they leave with all of it in their head.
        <br><br>
       Our VA service removes the whole problem, not just the tasks. You're matched with an assistant already trained on marketplace operations — Amazon, Walmart, eBay, Etsy, Shopify, TikTok Shop — then onboarded to your store's own SOPs. A supervision layer QA-checks the work, a cross-trained backup covers absences, and your documentation lives with us, so the knowledge survives even if the person ever changes. You delegate outcomes, not just tasks.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> VAs pre-trained on marketplace operations before they meet you</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> A supervision layer QA-checks the work — not just a person, a system</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Backup coverage built in — absences never become your problem</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Weekly task report: what was done, what's queued, hours used</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "250+", "text" => "Trained VAs placed with sellers"],
        ["number" => "6", "text" => "Platforms every VA is trained on"],
        ["number" => "<1 Wk", "text" => "Typical time to match your VA"],
        ["number" => "Built-in", "text" => "Backup coverage for every placement"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "Everything a trained VA takes off your plate.";
$sectionText = "Nine workstreams your assistant can own — scoped to your store on the workload audit, reported weekly.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-77.webp",
        "icon"  => "assets/images/services/icons/Vector-89.webp",
        "title" => "A dedicated, trained VA",
        "text"  => "Matched to your platforms and workload, pre-trained on marketplace operations, onboarded to your store's own SOPs.",
        "tag"   => "Matched in under a week",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-62.webp",
        "icon"  => "assets/images/services/icons/Vector-60.webp",
        "title" => "Listing & catalog upkeep",
        "text"  => "New listings entered, prices and stock updated, images swapped, variants kept clean — the catalog maintenance that never ends.",
        "tag"   => "Daily upkeep",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-12.webp",
        "icon"  => "assets/images/services/icons/Vector-10.webp",
        "title" => "Order & tracking processing",
        "text"  => "Orders confirmed, tracking uploaded, shipping issues chased with carriers — the daily rhythm that keeps metrics green.",
        "tag"   => "Every order, on time",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-78.webp",
        "icon"  => "assets/images/services/icons/Vector-90.webp",
        "title" => "Customer service inbox",
        "text"  => "Buyer questions answered in your voice within agreed response times; returns and disputes triaged, escalations flagged to you.",
        "tag"   => "Your voice, their hours",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-79.webp",
        "icon"  => "assets/images/services/icons/Vector-91.webp",
        "title" => "Inventory & alerts monitoring",
        "text"  => "Stock levels watched, restock flags raised early, account notifications triaged daily so nothing important sits unread.",
        "tag"   => "Watched daily",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-25.webp",
        "icon"  => "assets/images/services/icons/Vector-22.webp",
        "title" => "Research & data tasks",
        "text"  => "Competitor checks, supplier shortlists, price comparisons, and spreadsheet work — delivered as findings, not raw tabs.",
        "tag"   => "Findings, not tabs",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-54.webp",
        "icon"  => "assets/images/services/icons/Vector-52.webp",
        "title" => "Admin & back office",
        "text"  => "Invoices filed, reports pulled, calendars and email kept in order — the quiet work that otherwise fills your evenings.",
        "tag"   => "Evenings returned",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-80.webp",
        "icon"  => "assets/images/services/icons/Vector-92.webp",
        "title" => "The QA supervision layer",
        "text"  => "A team lead reviews output quality, response times, and accuracy — you manage outcomes, we manage the person.",
        "tag"   => "Included, always",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-72.webp",
        "icon"  => "assets/images/services/icons/Vector-70.webp",
        "title" => "Backup & continuity",
        "text"  => "A cross-trained backup covers sickness and leave; your SOPs live with us, so the knowledge survives any change of person.",
        "tag"   => "Never a single point of failure",
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
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                        <div class="img"><h3>Virtual Assistant <span>*</span></h3></div>
                    </div> -->
                    <div class="marquee-wrap" data-marquee data-text="Virtual Assistant" data-speed="50">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $subtitle = "Matched to the work";
    $sectionHeading = "Six kinds of VA. Matched to your bottleneck.";
    $sectionText = "\"Virtual assistant\" means six different jobs depending on where your week goes. The workload audit finds your bottleneck; the match is made for it.";

    $categoryItems = [
        [
            "img"   => "assets/images/services/icons/av-81.webp",
            "icon"  => "assets/images/services/icons/Vector-93.webp",
            "title" => "Store operations VA",
            "text"  => "Orders, tracking, inventory alerts, and platform notifications — the daily rhythm of a marketplace store, owned end to end.",
            "tag"   => "Best for: daily-grind relief",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-5.webp",
            "icon"  => "assets/images/services/icons/Vector-3.webp",
            "title" => "Customer service VA",
            "text"  => "Buyer messages in your voice within agreed hours, returns triaged, disputes escalated with context - inbox zero as a service.",
            "tag"   => "Best for: response times",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-62.webp",
            "icon"  => "assets/images/services/icons/Vector-60.webp",
            "title" => "Listing & catalog VA",
            "text"  => "New listings entered, bulk updates run, variants and specs kept clean - for stores where the catalog is the workload.",
            "tag"   => "Best for: big catalogs",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-25.webp",
            "icon"  => "assets/images/services/icons/Vector-22.webp",
            "title" => "Research VA",
            "text"  => "Competitor tracking, supplier shortlists, price checks, and data pulls - delivered as summarized findings, not raw spreadsheets.",
            "tag"   => "Best for: decision support",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-54.webp",
            "icon"  => "assets/images/services/icons/Vector-52.webp",
            "title" => "Admin & back-office VA",
            "text"  => "Email, invoices, reports, scheduling, and bookkeeping prep — the general assistant your business half of the business needs.",
            "tag"   => "Best for: owner overload",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-33.webp",
            "icon"  => "assets/images/services/icons/Vector-30.webp",
            "title" => "Multi-platform VA",
            "text"  => "For sellers on two or three marketplaces — one assistant trained across all of them, keeping every channel\'s basics green.",
            "tag"   => "Best for: multi-channel sellers",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Workload bigger than one role? Placements can combine roles or grow into a small managed team. Map my workload.";

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
            "title" => "Workload audit",
            "text"  => "Your week mapped, delegable work flagged, hours and schedule agreed.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Match & onboard",
            "text"  => "VA matched to your platforms, secure access set up, your SOPs documented.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "Supervised ramp",
            "text"  => "First weeks run with tight QA review — quality locked in before speed scales up.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Steady rhythm",
            "text"  => "Full task ownership with weekly reports — and more hours added as trust grows. ",
        ],
    ];

    $stepFooterText = "Typical timeline: audit call to working VA in about a week.";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Burned by freelancer roulette before?";
    $ctaText = "Ghosted freelancers, quality lotteries, retraining every quarter — the supervision layer and backup coverage exist because of exactly those stories.";
    $ctaBtnText = "Tell us what happened";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Stackline Retail";
    $sectionHeading = "What separates a managed VA from a hire.";

    $wayItems = [
        [
            "title" => "Trained before they arrive",
            "text"  => "Every VA completes marketplace-operations training across six platforms before their first client — you onboard them to your store, not to ecommerce.",
        ],
        [
            "title" => "A system, not a person",
            "text"  => "Supervision, QA, documented SOPs, and a cross-trained backup wrap every placement — the single-point-of-failure risk of hiring one person is designed out.",
        ],
        [
            "title" => "Security taken seriously",
            "text"  => "Least-privilege sub-user access, vaulted credentials, NDAs as standard, and activity you can see. You can revoke access in one click, any day.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>How matching works</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Why the match holds where hires fall apart.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Most VA horror stories are matching failures — the wrong skills, unclear scope, no oversight. The placement process is built against all three.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-2.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Workload mapped</h3>
                                <p>The audit lists actual tasks and hours - the match is made against real work, not a job title.</p>
                                <a href="javascript:;">Scope in writing</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-24.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>SOPs documented</h3>
                                <p>Your processes written down during onboarding - the asset that makes backup coverage and continuity real.</p>
                                <a href="javascript:;">Knowledge captured</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-94.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Skills matched</h3>
                                <p>Your platforms, task mix, and schedule matched against our trained bench - not whoever\'s free.</p>
                                <a href="javascript:;">Bench, not roulette</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-95.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>Fit reviewed</h3>
                                <p>Structured check-ins in the first month - and if the fit isn\'t right, a rematch, fast, at no cost.</p>
                                <a href="javascript:;">Rematch guaranteed</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Your first thirty days, mapped honestly.</h2>
                    <p>
                        A VA who\'s brilliant on day one is a myth — a VA who\'s indispensable by day thirty is a process. Here\'s the process.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-48.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Week 1</h4>
                            </span>
                        </div>
                        <h3>Audit, match & access</h3>
                        <p>Workload audit, VA matched from the trained bench, least-privilege access configured, and your SOPs drafted. Delegation starts with the lowest-risk tasks first.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-92.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Weeks 2-3</h4>
                            </span>
                        </div>
                        <h3>Supervised ramp</h3>
                        <p>Task scope widens as QA reviews confirm quality - messages, listings, orders come over in stages. Expect questions; they\'re the sign your SOPs are being learned, not skimmed.</p>
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
                                <h4>Week 4</h4>
                            </span>
                        </div>
                        <h3>Steady rhythm</h3>
                        <p>Full agreed scope owned, weekly task reports flowing, QA settled into spot-checks. The fit review confirms the match - or triggers a fast, free rematch.</p>
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
                                    <h5>Trained VA, matched to your platforms</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>QA</h4>
                                    <h5>Supervision layer reviewing the output</h5>
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
                                    <h5>Cross-trained backup on your SOPs</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-3.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>52</h4>
                                    <h5>Long-term contracts — month to month</h5>
                                </span>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="btn-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <a href="javascript:;" class="themeBtn">Start my thirty days</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">A managed VA vs. hiring one yourself.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>Managed placement</h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Pre-trained on six platforms before day one</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>QA layer reviews the work — you manage outcomes</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Cross-trained backup covers sickness and leave</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>SOPs documented — knowledge outlives the person</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Wrong fit? Fast rematch at no cost</span></li>
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
                                <h3>Solo freelancer hire</h3>
                            </span>
                        </div>
                        <div class="cb-box cb-box-trans">
                            <ul>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Weeks of posts, interviews, and gut-feel screening</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>You train them on ecommerce — on your clock</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Sick day or ghosting = your store stops</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Everything lives in one person\'s head</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Bad hire? Start the whole search again</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Great freelancers exist — the lottery of finding, vetting, training, and keeping one is what you\'re paying to skip.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Your week could look very different in 7 days.";
    $sectionText = "Free workload audit on the first call — what to delegate, what it costs, hours returned. Matched in about a week.";

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