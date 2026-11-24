<section class="servin-sect-two">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span><?php echo $subtitle; ?></h3>
                <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><?php echo $sectionHeading; ?></h2>
                <p><?php echo $sectionText; ?></p>
            </div>
        </div>
        <div class="row mb-5">
            <?php foreach ($categoryItems as $cat): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <img src="<?php echo $cat['img']; ?>" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="<?php echo $cat['icon']; ?>" class="img-fluid" alt="">
                        </figure>
                        <h3><?php echo $cat['title']; ?></h3>
                        <p><?php echo $cat['text']; ?></p>
                        <a href="<?php echo $cat['link']; ?>"><?php echo $card['tag']; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-11">
                <p data-aos="fade-up" data-aos-anchor-placement="top-bottom"><?php echo $sectionBottomText; ?></p>
            </div>
        </div>
    </div>
</section>