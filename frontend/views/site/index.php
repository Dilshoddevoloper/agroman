<?php

$this->title = 'Yii2 ready template';
?>
    <section class="banner-section banner-one">
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/slide_v1_1.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Eng yaxshi qishloq xo'jaligi mahsuloti</div>
                                <h1>"Agroman" loyihasiga <br> xush kelibsiz</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/slide_v1_2.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Eng yaxshi qishloq xo'jaligi mahsuloti</div>
                                <h1>"Agroman" loyihasiga <br> xush kelibsiz</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/slide_v1_3.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Eng yaxshi qishloq xo'jaligi mahsuloti</div>
                                <h1>"Agroman" loyihasiga <br> xush kelibsiz</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about1_img">
                        <div class="about1_shape_1"></div>
                        <img src="images/about/about-1-img-1.jpg" alt="About-Img">
                        <div class="about1_icon-box">
                            <div class="circle">
                                <span class="icon-focus"></span>
                            </div>
                        </div>
                        <div class="about_img_2">
                            <img src="images/about/about-1-img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="block-title text-left">
                        <p>Loyihamiz haqida</p>
                        <h3>Bu biz uchun juda muhim</h3>
                        <div class="leaf">
                            <img src="images/resources/leaf.png" alt="">
                        </div>
                    </div>
                    <div class="about_content">
                        <div class="text">
                            <p>Biz qishloq xo'jaligidagi yerlarning tuproqlari miqdorini o'rganib hosil samaradorligini bir necha barobarga oshirishni reja qilganmiz</p>
                        </div>
                        <div class="about1_icon_wrap">
                            <div class="about1_icon_single">
                                <div class="about1_icon">
                                    <span class="icon-harvest"></span>
                                </div>
                                <p>Tuproq samaradorligini oshirishga etibor qarating</p>
                            </div>
                            <div class="about1_icon_single">
                                <div class="about1_icon">
                                    <span class="icon-temperature"></span>
                                </div>
                                <p>Iqlim o'zgarishiga e'tibor qarating</p>
                            </div>
                        </div>
                        <div class="bottom_text">
                            <p> Qishloq xo‘jaligi yerlaridan foydalanuvchilar tomonidan tuproq unumdorligini oshirish, ayniqsa organik o‘g‘itlardan keng foydalanish bo‘yicha kompleks tadbirlarni yetarli darajada amalga oshirilmaganligi natijasida, so‘nggi 30 yilda sug‘oriladigan tuproqlarda gumus miqdori 10-15 foizga kamayib ketgan, oqibatda ekvivalent hisobida boy berilgan sug‘oriladigan ekin yerlari 450 ming gektarni tashkil qiladi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service_one">
        <div class="container">
            <div class="block-title text-center">
                <p>Bizga nima foyda</p>
                <h3>Eng sara foydali malumotlar</h3>
                <div class="leaf">
                    <img src="images/resources/leaf.png" alt="">
                </div>
            </div>
            <div class="row">
                <?php foreach ($useful as $item): ?>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="service_1_single wow fadeInUp">
                        <div class="content">
                            <h3><?= $item->getText1() ?></h3>
                            <p><?= $item->getText2() ?></p>
                        </div>
                        <div class="service_1_img">
                            <img src="<?= $item->getPhoto1('270', '175', 'zoomCrop', 'transparent', 'center', 'center'); ?>" alt="Service Image">
                            <div class="hover_box">
                                <a href="service-detail.html"><span class="icon-left-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-one-carousel owl-carousel">
                        <?php foreach ($partners as $partner): ?>
                        <div class="single_brand_item">
                            <a href="#"><img src="<?= $partner->getPhoto1('234', '90', 'forceResize', 'transparent', 'center', 'center'); ?>" alt="brand"></a>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="featured-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms">
                    <div class="single_featured_box">
                        <img src="images/resources/featured-leaf.png" alt=""><span>Yerlarning  o'g'itlari yetishmaydi</span><img src="images/resources/featured-leaf.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms">
                    <div class="single_featured_box">
                        <img src="images/resources/featured-leaf.png" alt=""><span>Yerlarga mehr bering</span><img src="images/resources/featured-leaf.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-one" style="background-image:url(images/resources/video-bg-1.jpg);">
        <div class="container text-center">
            <a href="https://www.youtube.com/watch?v=DgS61JCdvr8" class="video-one__btn video-popup"><i
                        class="fa fa-play"></i></a>
            <p>Bu siz uchun muhim</p>
            <h3>LABORATORIYA UCHUN TUPROQ NAMUNASINI OLISH</h3>
        </div>
    </section>