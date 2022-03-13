<section class="page-header" style="background-image: url(/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2>Mahsulot</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Asosiy</a></li>
            <li><a href="#" class="shop_style">Do'kon</a></li>
            <li><span>Mahsulot</span></li>
        </ul>
    </div>
</section>

<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="sidebar-wrapper style2">
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp animated" data-wow-delay="0.1s"
                         data-wow-duration="1200ms">
                        <div class="sidebar-search-box">
                            <form class="search-form" action="#">
                                <input placeholder="Qidiruv" type="text">
                                <button type="submit"><i class="icon-magnifying-glass"
                                                         aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sidebar Wrapper-->
            <div class="col-xl-9 col-lg-9">
                <div class="product-items">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="showing-result-shorting">
                                <div class="left">
                                    <div class="showing">
                                        <p>3 ta natijadan 1-3 tasi koʻrsatilmoqda</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="all_products">
                        <div class="row">
                            <?php foreach ($items as $item): ?>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="all_products_single text-center">
                                        <div class="all_product_item_image">
                                            <img src="<?= $item->getPhoto1('270', '293', 'forceResize', 'transparent', 'center', 'center'); ?>" alt="">
                                        </div>
                                        <h4><a href="#"><?= $item->getText1() ?></a></h4>
                                        <p><?= $item->getText2() ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>