<header class="pt100 pb100 parallax-window-2" data-parallax="scroll" data-speed="0.5"
    data-image-src="<?= BASEURL; ?>/front-assets/assets/img/bg/new-img-bg-14.jpg"" data-positionY=" 1000">
    <div class="intro-body text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt50">
                    <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">
                        Portofolio</h1>
                    <h4 class="brand-heading font-montserrat text-uppercase color-light alpha5"
                        data-in-effect="fadeInDown">last Event</h4>
                </div>
            </div>

        </div>

    </div>
</header>


<div class="pt75 pb75">
    <div class="container">
        
            <div class="row">
            <?php foreach ($data['event'] as $event): ?>
                <div class="col-md-6 col-sm-6 col-xs-6 mb25">
                    <?php if (!empty($event['images'])): ?>
                        <img src="<?= BASEURL; ?>/images/<?= ($event['images'][0]); ?>" alt="gallery" class="img-responsive" width="550" height="350">
                    <?php endif; ?>
                    <h5 class="font-montserrat mt10">
                        <?= $event['title']; ?>
                        <small>
                            <p class="mt10">
                                <?php
                                $dateTime = DateTime::createFromFormat('Y-m-d - H:i:s', $event['date'] . ' - ' . $event['time']);
                                $formattedDateTime = $dateTime->format('d-F-Y H:i');
                                echo $formattedDateTime;
                                ?>
                            </p>
                        </small>
                    </h5>
                </div>
                <?php endforeach; ?>
            </div>
    </div>
</div>