        <header class="intro pt100 pb100 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="<?= BASEURL; ?>/front-assets/assets/img/bg/new-img-bg-14.jpg">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="brand-heading font-montserrat text-uppercase color-light tlt" data-in-effect="fadeInDown">SELAMAT DATANG DI EFG EVENT MANAGEMENT</h1>
                            <p class="intro-text color-light text-open-sans text-uppercase tlt" data-in-effect="swing">Mewujudkan Acara Impian Anda</p>
                            <p class="intro-text color-light text-open-sans text-uppercase tlt" data-in-effect="swing">Apakah Anda sedang merencanakan sebuah acara yang luar biasa? Kami di EFG Event Management siap membantu Anda mengatur dan mengorganisir acara yang tak terlupakan. Dengan pengalaman dan keahlian kami, kami akan menjadikan visi Anda menjadi kenyataan.</p>
                            <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
                                <a href="<?= BASEURL; ?>/event/create" class="button button-pasific button-lg hover-ripple-out mt50 animated" data-animation="fadeInUp" data-animation-delay="1200">Ayo mulai daftarkan acara mu!</a>
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
                            Creating Unforgettable Moments, Together.
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>
                    <!-- title end -->
                    
                    <!-- title description start -->
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p>
                            <span class="lead"><strong>Kami memahami betapa pentingnya acara bagi Anda, baik itu pernikahan, konferensi, pameran, atau acara khusus lainnya. Oleh karena itu, tim profesional kami berkomitmen untuk memberikan pengalaman yang tak terlupakan kepada Anda dan semua tamu yang hadir.</strong></span><br><br>

                            Jadi, jika Anda mencari partner yang dapat diandalkan untuk mengorganisir acara yang luar biasa, percayakan kepada EFG Event Management. Hubungi kami hari ini untuk mendiskusikan detail acara Anda dan mulailah merencanakan momen yang tak terlupakan bersama kami.
                        </p>
                    </div>
                    <!-- title description end -->
                </div>
                
                <div class="row mt50">
                    
                    <!-- item one start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                        <div class="content-box content-box-center">                        
                            <span class="icon-hourglass color-pasific"></span>
                                <h5>Pengalaman yang Luar Biasa</h5>
                            <p>Dengan lebih dari 10 tahun pengalaman dalam industri event management, kami telah sukses mengorganisir berbagai acara dari pernikahan mewah hingga konferensi berskala besar.</p>
                      
                        </div>
                    </div>
                    <!-- item one end -->
                    
                    <!-- item two start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
                        <div class="content-box content-box-center">                        
                            <span class="icon-paintbrush color-pasific"></span>
                                <h5>Perhatian Terhadap Detail</h5>
                            <p> Kami memperhatikan setiap detail acara Anda, mulai dari pemilihan lokasi yang ideal hingga desain dekorasi yang menakjubkan. Kami berkomitmen untuk memberikan pengalaman yang tak terlupakan bagi Anda dan semua tamu yang hadir.</p>
                      
                        </div>
                    </div>
                    <!-- item two end -->
                    
                    <!-- item three start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="300">
                        <div class="content-box content-box-center">                        
                            <span class="icon-camera color-pasific"></span>
                                <h5>Jaringan Vendor Terpercaya</h5>
                            <p>Kami memiliki kemitraan yang solid dengan berbagai vendor terpercaya di industri ini. Ini memungkinkan kami untuk menyediakan pilihan terbaik dalam hal hiburan, catering, teknologi audio-visual, dan banyak lagi.</p>
                      
                        </div>
                    </div>
                    <!-- item three end -->
                    
                    <!-- item four start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="400">
                        <div class="content-box content-box-center">                        
                            <span class="icon-profile-male color-pasific"></span>
                                <h5>Tim Profesional</h5>
                            <p>Tim kami terdiri dari para ahli yang berdedikasi dalam memberikan layanan terbaik. Kami menggabungkan kreativitas, inovasi, dan keahlian manajemen untuk memastikan acara Anda berjalan dengan sempurna.</p>
                      
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
                            <small class="color-light">Event Manager terbaik yang pernah ada</small>
                            Apakah kalian ingin membuat event yang meriah dan juga tak terlupakan?
                        </h1>
                        <a class="button button-md button-pasific hover-ripple-out mt25">Buat Event</a>
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
                            Event Terbaru
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Berikut adalah beberapa event yang berhasil kita handle. 
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
                            <i class="fa fa-wordpress fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-joomla fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-drupal fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-shopping-basket fa-2x color-gray2 mr10"></i>
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
        
