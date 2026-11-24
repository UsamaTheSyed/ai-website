<section class="way-sect way-inner-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span><?php echo $subtitle; ?></h3>
                <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><?php echo $sectionHeading; ?></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($wayItems as $way): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="way-card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <h3><?php echo $way['title']; ?></h3>
                        <p><?php echo $way['text']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- <section class="way-sect way-inner-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="subtitle"><span><img src="assets/images/hero/line.webp" alt=""></span>Why Syntrax Ai Retail</h3>
                    <h2 class="sectionHeading">What separates us on Shopify dropshipping.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="way-card">
                        <h3>Process over hype</h3>
                        <p>No "winning product lists" recycled to every client. A repeatable testing system that keeps producing winners specific to your store.</p>
                        <a href="javascript:;" class="themeBtn">Get my free audit</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="way-card">
                        <h3>Real supplier standards</h3>
                        <p>Suppliers are held to written shipping-time and quality thresholds. Miss them twice, and they're replaced — your reviews are the asset we protect.</p>
                        <a href="javascript:;" class="themeBtn">Book a call</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="way-card">
                        <h3>Transparent unit economics</h3>
                        <p>You see profit per order after every cost — not revenue screenshots. If a product can't earn its place, we tell you and cut it.</p>
                        <a href="javascript:;" class="themeBtn">View comparison guide</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->