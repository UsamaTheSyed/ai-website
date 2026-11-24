<section class="serv-count">
    <div class="container">
        <div class="row">
            <?php foreach ($countItems as $item): ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="sac-cont" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                        <h3><?php echo $item['number']; ?></h3>
                        <p><?php echo $item['text']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- 
   <section class="serv-count">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sac-cont">
                        <h3>700+</h3>
                        <p>Shopify stores launched & managed</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sac-cont">
                        <h3>21 days</h3>
                        <p>Average build-to-launch time</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sac-cont">
                        <h3>92%</h3>
                        <p>Clients see growth within 3 months</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sac-cont">
                        <h3>0</h3>
                        <p>Inventory you'll ever touch</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->