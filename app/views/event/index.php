        <header class="pt100 pb100 parallax-window-2" data-parallax="scroll" data-speed="0.5" data-image-src="<?= BASEURL; ?>/front-assets/assets/img/bg/new-img-bg-14.jpg" data-positionY="1000">
            <div class="intro-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt50">
                            <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">
                                All Event
                                <small class="color-light alpha7">More Event</small>
                            </h1>                            
                        </div>
                    </div>
                </div>
                
            </div>
        </header>

        <!-- Service Area
        ===================================== -->
        <div id="service" class="pt75 pb25">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Modern Service</small>
                            We Build Website &amp; App
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem. 
                        </p>
                    </div>
                </div>
                <!-- title and short description end -->
                <?php foreach ( $data['event'] as $event ): ?>
                <!-- service one start -->
                <div class="row mt75">
                    <?php if (!empty($event['images'])): ?>
                        <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                            <img src="<?= BASEURL; ?>/images/<?= ($event['images'][0]); ?>" alt="website service" class="img-responsive mt20" widht="400">
                        </div>
                    <?php endif; ?>
                    <div class="col-md-5 animated" data-animation="fadeIn" data-animation-delay="100">
                        
                        <h3 class="font-size-normal">
                            <?= $event['title']; ?>
                            <small class="color-primary"><?= $event['venue']; ?></small>
                        </h3>
                        <p class="mt10">
                        <?php
                            $dateTime = DateTime::createFromFormat('Y-m-d - H:i:s', $event['date'] . ' - ' . $event['time']);
                            $formattedDateTime = $dateTime->format('d-F-Y H:i');
                            echo $formattedDateTime;
                        ?>
                        </p>
                        <p class="mt20">
                            <?= $event['deskripsi']; ?>
                        </p>
                        <p>
                            <a class="button-o button-sm button-primary hover-fade">View Event</a>
                        </p>
                    </div>
                </div>
                <!-- service one end -->
                <?php endforeach; ?>
                
            </div><!-- container end -->
        </div><!-- section service end -->
        

        <!-- Info Area
        =====================================-->
        <div id="info" class="bg-dark2 pt50 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= BASEURL; ?>/front-assets/assets/img/other/img-other-13.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6 mt25">
                        <h3 class="color-light font-open-sans">More Than 1,200 People Love Our Product.<br>Join with us now.</h3>
                        <a class="button button-pasific button-md pull-left mt25 hover-ripple-out">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>      