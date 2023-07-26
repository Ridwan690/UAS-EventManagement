        <header class="intro pt100 pb100 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="<?= BASEURL; ?>/front-assets/assets/img/bg/new-img-bg-14.jpg">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="brand-heading font-montserrat text-uppercase color-light tlt" data-in-effect="fadeInDown">SELAMAT DATANG DI EFG EVENT MANAGEMENT</h1>
                            <p class="intro-text color-light text-open-sans text-uppercase tlt" data-in-effect="swing">Mewujudkan Acara Impian Anda</p>
                            <p class="intro-text color-light text-open-sans text-uppercase tlt" data-in-effect="swing">Apakah Anda sedang merencanakan sebuah acara yang luar biasa? Kami di EFG Event Management siap membantu Anda mengatur dan mengorganisir acara yang tak terlupakan. Dengan pengalaman dan keahlian kami, kami akan menjadikan visi Anda menjadi kenyataan.</p>
                            <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
                                <a href="<?= BASEURL; ?>/create/event" class="button button-pasific button-lg hover-ripple-out mt50 animated" data-animation="fadeInUp" data-animation-delay="1200">Ayo mulai daftarkan acara mu!</a>
                            <?php else: ?>
                                <a href="<?= BASEURL; ?>/auth" class="button button-pasific button-lg hover-ripple-out mt50 animated" data-animation="fadeInUp" data-animation-delay="1200">Ayo mulai daftarkan acara mu!</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <div class="intro-direction">
                    <a href="#welcome">
                        <div class="mouse-icon"><div class="wheel"></div></div>
                    </a>
                </div>
                
            </div>
        </header>

        
        <!-- Welcome Area
        ===================================== -->
        <div id="welcome" class="pt75">
            <div class="container">
                <div class="row">
                    
                    <!-- title start -->
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Welcome to EFG Event Management</small>
                            We Are Smart Creative Agency
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>
                    <!-- title end -->
                    
                    <!-- title description start -->
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p>
                            <span class="lead"><strong>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam 
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</strong></span><br><br>

                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                        </p>
                    </div>
                    <!-- title description end -->
                </div>
                
                <div class="row mt50">
                    
                    <!-- item one start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                        <div class="content-box content-box-center">                        
                            <span class="icon-layers color-pasific"></span>
                                <h5>Clean Code</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item one end -->
                    
                    <!-- item two start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
                        <div class="content-box content-box-center">                        
                            <span class="icon-mobile color-pasific"></span>
                                <h5>Mobile Optimzed</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item two end -->
                    
                    <!-- item three start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="300">
                        <div class="content-box content-box-center">                        
                            <span class="icon-camera color-pasific"></span>
                                <h5>Photographer</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item three end -->
                    
                    <!-- item four start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="400">
                        <div class="content-box content-box-center">                        
                            <span class="icon-briefcase color-pasific"></span>
                                <h5>Awesome Portfolio</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item four start -->                    
                    
                </div>                
            </div>
        </div>
        
        
        <!-- Info Area
        ===================================== -->
        <div id="info-1" class="pt50 pb50 mt75 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="<?= BASEURL; ?>/front-assets/assets/img/bg/img-bg-44.jpg">
            <div class="container">
                <div class="row pt75">
                    <div class="col-md-12 text-center">
                        <h1 class="color-light">
                            <small class="color-light">The best way to be success</small>
                            Are you ready to be success with us?
                        </h1>
                        <a class="button button-md button-pasific hover-ripple-out mt25">Create Event</a>
                    </div>   
                </div>
            </div>
        </div>
        
        <!-- Service Area
        ===================================== -->
        <div id="service" class="pt75 pb25">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>New Service</small>
                            Latest Event
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
        ===================================== -->
        <div id="Info-1" class="bg-gray pt30 bb-solid-1">
            <div class="container">
                <div class="row">                
                    <div class="col-md-8 col-md-offset-2 text-center pb35">
                        <h4>We are here to help you reach success</h4>
                        <a class="button button-md button-blue hover-ripple-out mr10">Create Event</a>
                        <a class="button button-md button-pasific hover-ripple-out">Booking</a>
                    </div>                
                </div>
            </div>
        </div>