<section class="serv-card-sect srva-sect <?php echo $bgservice; ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h3 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><span><img src="assets/images/hero/line.webp" alt=""></span><?php echo $subtitle; ?></h3>
                <h2 class="sectionHeading" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><?php echo $sectionHeading; ?></h2>
                <p data-aos="fade-up" data-aos-anchor-placement="top-bottom"><?php echo $sectionText; ?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($cardItems as $card): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="srvin-card" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <img src="<?php echo $card['img']; ?>" class="img-fluid srvin-img" alt="">
                        <figure>
                            <img src="<?php echo $card['icon']; ?>" class="img-fluid" alt="">
                        </figure>
                        <h3><?php echo $card['title']; ?></h3>
                        <p><?php echo $card['text']; ?></p>
                        <a href="<?php echo $card['link']; ?>"><?php echo $card['tag']; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- <p class="p-5"></?php echo $sectionbottomText; ?></p> -->
    </div>
</section>