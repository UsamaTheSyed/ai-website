<section class="step-sect">
    <img src="assets/images/services/icons/Line.webp" class="line-one" alt="">
    <img src="assets/images/services/icons/Line-1.webp" class="line-two" alt="">
    <img src="assets/images/services/icons/Line-1.webp" class="line-three" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span><?php echo $subtitle; ?></h3>
                <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><?php echo $sectionHeading; ?></h2>
            </div>
        </div>
        <div class="row step-slider">
            <?php foreach ($stepItems as $step): ?>
                <div class="col-md-3">
                    <div class="step-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <span>
                            <figure>
                                <img src="<?php echo $step['icon']; ?>" class="img-fluid" alt="">
                            </figure>
                        </span>
                        <span>
                            <h3><?php echo $step['step']; ?></h3>
                            <h4><?php echo $step['title']; ?></h4>
                            <p><?php echo $step['text']; ?></p>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="step-text">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <?php echo $stepFooterText; ?>
                        <a href="<?php echo $stepFooterLink; ?>"><?php echo $stepFooterLinkText; ?> <i class="fa-solid fa-arrow-right-long"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>