<?php 
$pageTitle = "IT Solutions & Services";
$pageDescription = ""; 

include('../includes/header.php'); ?>

<body class="serv-body youtube-body">

    <?php include '../includes/menu.php';?>


    <?php 
    $bannerHeading = "Suspended isn't the end. It's a process — and we know it.";
    $bannerParagraph = "Your account is frozen, your funds are held, and every template appeal you send burns a chance. Our specialists find the real root cause, build the Plan of Action the platform actually wants to read, and manage every round until the realistic paths are exhausted — starting with a free case review and an honest read on your odds.";
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
    $sectionHeading = "The platform doesn't want your apology. It wants a plan.";
    $sectionText = "
       A suspension notice reads like a verdict, but it's actually a question: can you prove you understand what went wrong and show it won't happen again? Most sellers answer it badly — panicked same-day appeals, copied templates the reviewer has seen a thousand times, apologies where evidence should be. Every weak appeal makes the next one harder, because you're no longer just proving your case; you're repairing the record of bad answers on file.
        <br><br>
       Our reinstatement work starts where the platform's reviewer starts: root cause. We diagnose the actual trigger — the invoice gap, the metric breach, the complaint pattern — then build a Plan of Action with the three things reviewers are trained to find: what happened, what you fixed, and what prevents recurrence, each backed by documents. Then we manage every round: submissions, follow-ups, escalations when the front line stalls. And before any of it, a free case review tells you your honest odds — because taking your money for an unwinnable case is the industry habit we refuse to share.
    ";
    $sectionlist = "
        <ul>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Root-cause diagnosis before a single word is drafted</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> POAs written case-by-case — never from templates</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Every appeal round managed, with escalation paths ready</li>
            <li><span><i class=\"fa-solid fa-circle-check\"></i></span> Honest odds on the free review — before you pay anything</li>
        </ul>
    ";
    include '../includes/service-about.php';?>


    <?php 
    $countItems = [
        ["number" => "1,000+", "text" => "Suspension cases handled to date"],
        ["number" => "24–48h", "text" => "From documents to first appeal draft"],
        ["number" => "5", "text" => "Platforms — Amazon, Walmart, eBay, Etsy, TikTok"],
        ["number" => "Free", "text" => "Case review with honest odds, always"],
    ];

    include '../includes/service-count.php';
    ?>




<?php 
 $bgservice = "";
$subtitle = "What's included";
$sectionHeading = "Case review to reinstated — the full rescue.";
$sectionText = "Nine workstreams between the suspension notice and your account back — each one somebody's full-time specialty here.";

$cardItems = [
    [
        "img"   => "assets/images/services/icons/av-25.webp",
        "icon"  => "assets/images/services/icons/Vector-22.webp",
        "title" => "Root-cause analysis",
        "text"  => "The actual trigger diagnosed from your notices, metrics, and history — because appealing the wrong cause guarantees rejection.",
        "tag"   => "Diagnosis before drafting",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-82.webp",
        "icon"  => "assets/images/services/icons/Vector-96.webp",
        "title" => "Suspension-type diagnosis",
        "text"  => "Section 3, verification, IP, authenticity, performance, related accounts — each has its own playbook, and using the wrong one costs rounds.",
        "tag"   => "Right playbook, first time",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-83.webp",
        "icon"  => "assets/images/services/icons/Vector-97.webp",
        "title" => "Plan of Action writing",
        "text"  => "What happened, what you fixed, what prevents recurrence — written the way reviewers are trained to read, specific to your case.",
        "tag"   => "Never a template",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-7.webp",
        "icon"  => "assets/images/services/icons/Vector-2.webp",
        "title" => "Evidence & document prep",
        "text"  => "Invoices, supplier records, process screenshots, and identity documents assembled into the pack that makes the POA credible.",
        "tag"   => "Claims, backed",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-84.webp",
        "icon"  => "assets/images/services/icons/Vector-98.webp",
        "title" => "Appeal submission & rounds",
        "text"  => "Filed through the right channel, follow-ups timed, and every rejection answered with a stronger round — not a resend.",
        "tag"   => "Managed to the end",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-85.webp",
        "icon"  => "assets/images/services/icons/Vector-99.webp",
        "title" => "Escalation paths",
        "text"  => "When the front line stalls: executive escalations and formal channels, used at the right moment — not as a first resort.",
        "tag"   => "When, not just how",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-18.webp",
        "icon"  => "assets/images/services/icons/Vector-16.webp",
        "title" => "Funds release",
        "text"  => "Held balances pursued alongside reinstatement — or as a standalone case when an account is permanently closed.",
        "tag"   => "Your money, pursued",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-34.webp",
        "icon"  => "assets/images/services/icons/Vector-32.webp",
        "title" => "Listing & ASIN reinstatement",
        "text"  => "Blocked listings and ASIN takedowns appealed with the same rigor — because a dead hero SKU is its own suspension.",
        "tag"   => "SKU-level rescues too",
        "link"  => "javascript:;",
    ],
    [
        "img"   => "assets/images/services/icons/av-8.webp",
        "icon"  => "assets/images/services/icons/Vector-4.webp",
        "title" => "Post-reinstatement prevention",
        "text"  => "The compliance gaps that caused the suspension closed for good — because the second suspension is always harder to appeal.",
        "tag"   => "Never twice",
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
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                        <div class="img"><h3>Account Reinstatement <span>*</span></h3></div>
                    </div> -->
                    <div class="marquee-wrap" data-marquee data-text="Account Reinstatement" data-speed="50">
                        <div class="marquee-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $subtitle = "Matched to the work";
    $sectionHeading = "Six suspensions, six different playbooks.";
    $sectionText = "The first thing we determine is which case you actually have — because the appeal that saves a Section 3 account gets a verification case rejected.";

    $categoryItems = [
        [
            "img"   => "assets/images/services/icons/av-86.webp",
            "icon"  => "assets/images/services/icons/Vector-100.webp",
            "title" => "Section 3 / policy violations",
            "text"  => "The broadest and most serious Amazon suspension — root cause is everything, and the first appeal is your best-odds appeal.",
            "tag"   => "Playbook: root cause first",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-39.webp",
            "icon"  => "assets/images/services/icons/Vector-37.webp",
            "title" => "Verification failures",
            "text"  => "Identity, address, utility bill, and video-call verification loops — usually a documentation problem masquerading as a rejection.",
            "tag"   => "Playbook: document precision",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-72.webp",
            "icon"  => "assets/images/services/icons/Vector-70.webp",
            "title" => "IP & counterfeit complaints",
            "text"  => "Trademark, copyright, and patent claims — fought on two tracks at once: retraction pursuit and a defensible POA.",
            "tag"   => "Playbook: two tracks",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-87.webp",
            "icon"  => "assets/images/services/icons/Vector-101.webp",
            "title" => "Inauthentic / supply chain",
            "text"  => "Invoice-driven cases where the paperwork is the verdict — sourcing records rebuilt into a chain the reviewer can verify.",
            "tag"   => "Playbook: paper trail",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-88.webp",
            "icon"  => "assets/images/services/icons/Vector-102.webp",
            "title" => "Performance suspensions",
            "text"  => "ODR, late shipment, and cancellation breaches on Amazon, Walmart, or eBay — fixed operations, evidenced, then appealed.",
            "tag"   => "Playbook: fix, then file",
            "link"  => "javascript:;",
        ],
        [
            "img"   => "assets/images/services/icons/av-69.webp",
            "icon"  => "assets/images/services/icons/Vector-67.webp",
            "title" => "Related accounts & funds",
            "text"  => "Linked-account flags and held balances — including standalone funds recovery when an account stays closed.",
            "tag"   => "Playbook: untangle & pursue",
            "link"  => "javascript:;",
        ]
    ];

    $sectionBottomText = "Not sure which one you have? That\'s literally what the free case review answers first. Identify my case.";

    include '../includes/service-categories.php';
    ?>

    <?php include '../includes/service-proof.php';?>


    <?php 
    $subtitle = "How it works";
    $sectionHeading = "From suspension notice to selling again, in four phases.";

    $stepItems = [
        [
            "icon"  => "assets/images/services/icons/stp-1.webp",
            "step"  => "Step - 01",
            "title" => "Free case review",
            "text"  => "Notice read, suspension type identified, honest odds given - before you pay.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-2.webp",
            "step"  => "Step - 02",
            "title" => "Root cause & evidence",
            "text"  => "The real trigger diagnosed; invoices, records, and fixes assembled into the pack.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-3.webp",
            "step"  => "Step - 03",
            "title" => "POA & submission",
            "text"  => "The Plan of Action drafted in 24-48h, filed through the right channel, tracked.",
        ],
        [
            "icon"  => "assets/images/services/icons/stp-4.webp",
            "step"  => "Step - 04",
            "title" => "Rounds & escalation",
            "text"  => "Every rejection answered stronger; escalation paths used when the line stalls.",
        ],
    ];

    $stepFooterText = "Typical timeline: first draft in 24–48h; straightforward cases resolve in days, complex ones in weeks";
    $stepFooterLinkText = "Map my timeline";
    $stepFooterLink = "javascript:;";

    include '../includes/service-steps.php';
    ?>



    <?php 
    $ctaHeading = "Already sent appeals that got rejected?";
    $ctaText = "Stop sending. Failed rounds make the case harder — but rarely impossible. We review what's on file, repair the record, and rebuild around root cause.";
    $ctaBtnText = "Tell us what happened";
    $ctaBtnLink = "javascript:;";

    include '../includes/service-cta.php';
    ?>



    <?php 
    $subtitle = "Why Syntrax Ai";
    $sectionHeading = "What separates our appeals.";

    $wayItems = [
        [
            "title" => "We run stores, so we read cases right",
            "text"  => "Our team operates live marketplace accounts every day — we know what compliance actually looks like from the inside, and it shows in how our POAs read.",
        ],
        [
            "title" => "Honest odds, before money moves",
            "text"  => "The free case review ends with a candid verdict — including \"this one isn't winnable\" when it's true. Taking fees for dead cases is the industry habit we refuse to share.",
        ],
        [
            "title" => "Speed where it counts",
            "text"  => "First draft in 24–48 hours of receiving documents — because every suspended day costs revenue, rank, and stranded inventory fees.",
        ],
    ];

    include '../includes/service-way.php';
    ?>

    <section class="monet-sect">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12">
                    <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span>How matching works</h3>
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">What a winning Plan of Action contains.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Reviewers skim hundreds of appeals a day looking for four things. Templates fail because they contain sentences — not these.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-103.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>The real root cause</h3>
                                <p>Named specifically - not "we misunderstood the policy," but the exact process gap that triggered the enforcement.</p>
                                <a href="javascript:;">Specific or rejected</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-104.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>The prevention system</h3>
                                <p>The change that makes recurrence impossible - new checks, new sourcing rules, new review steps, all concrete.</p>
                                <a href="javascript:;">Systems, not intentions</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-105.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>The immediate fix</h3>
                                <p>What was corrected already, with dates - refunds issued, listings removed, supplier dropped, process stopped.</p>
                                <a href="javascript:;">Done, not promised</a>
                            </div>
                            <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                                <figure>
                                    <img src="assets/images/services/icons/Vector-106.webp" class="img-fluid" alt="">
                                </figure>
                                <h3>The evidence pack</h3>
                                <p>Invoices, records, and screenshots supporting every claim - because unverifiable assertions read as excuses.</p>
                                <a href="javascript:;">Every claim, backed</a>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">The honest shape of a reinstatement case.</h2>
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Some cases resolve on round one in days. Some take rounds and escalation. Here\'s the real shape — the one we\'ll map for your specific case on the free review.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-9.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Week 1</h4>
                            </span>
                        </div>
                        <h3>Triage & first draft</h3>
                        <p>Case review, suspension type identified, root cause diagnosed from your documents, evidence pack assembled, and the first POA drafted. You stop sending panic appeals; we start building the record right.</p>
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
                                <h4>Weeks 2-3</h4>
                            </span>
                        </div>
                        <h3>Rounds & responses</h3>
                        <p>The appeal is filed and tracked; platform responses answered with stronger rounds, never resends. Many cases resolve here — the rest tell us exactly which escalation path to take.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expec-cont srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <div class="expec-head">
                            <span>
                                <figure>
                                    <img src="assets/images/services/icons/Vector-99.webp" class="img-fluid" alt="">
                                </figure>
                            </span>
                            <span>
                                <h4>Week 4</h4>
                            </span>
                        </div>
                        <h3>Escalation & endgame</h3>
                        <p>Executive escalations and formal channels, used at the right moment. And a straight answer if the realistic paths are exhausted — including pivoting to funds recovery when that\'s the smart play.</p>
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
                                    <h4>Free</h4>
                                    <h5>Case review with honest odds, before payment</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-1.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>24–48h</h4>
                                    <h5>Documents to first POA draft</h5>
                                </span>
                            </div>
                            <div class="icon-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <span>
                                    <figure>
                                        <img src="assets/images/services/Vector-2.webp" class="img-fluid" alt="">
                                    </figure>
                                </span>
                                <span>
                                    <h4>All</h4>
                                    <h5>Appeal rounds managed to conclusion </h5>
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
                                    <h5>Prevention plan after reinstatement</h5>
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
                    <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom">A built case vs. a panic appeal.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="compare-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="ct-box">
                            <span>
                                <h3>Specialist-built case</h3>
                            </span>
                        </div>
                        <div class="cb-box">
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Root cause diagnosed before a word is written</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>POA structured the way reviewers are trained to read</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Every claim backed by a document</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Rounds and escalations sequenced deliberately</span></li>
                                <li><span><i class="fa-solid fa-check"></i></span><span>Honest odds before you spend anything</span></li>
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
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Sent same-day, appealing the wrong cause</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>A template the reviewer has rejected 1,000 times</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Apologies and promises where evidence should be</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>Each weak round making the next one harder</span></li>
                                <li><span><i class="fa-regular fa-circle-xmark"></i></span><span>"Guaranteed reinstatement" services keeping the fee either way</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        The cruel math of appeals: your first one has the best odds, and panic spends it. If you\'ve already sent some — stop, and let us read the file before anything else goes out.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include '../includes/testimonials.php';?>

    <?php include '../includes/faq.php';?>



    <?php 
    $subtitle = "One call. Zero pressure.";
    $sectionHeading = "Every suspended day is costing you. Start now.";
    $sectionText = "Free case review first — suspension type, honest odds, right first move. First draft within 24–48 hours of your documents.";

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