<section class="page-header" style="background-image: url(/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2>Labaratoriya</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="/">Asosiy</a></li>
            <li><span>Labaratoriya</span></li>
        </ul>
    </div>
</section>

<section class="blog-one news">
    <div class="container">
        <div class="row">
            <?php foreach ($items as $item): ?>
            <div class="col-xl-4 col-lg-4">
                <div class="blog_one_single mb-30">
                    <div class="blog_one_image">
                        <div class="blog_image">
                            <img src="<?= $item->getPhoto1('370', '309', 'forceResize', 'transparent', 'center', 'center'); ?>" alt="Blog One Image">
                        </div>
                        <div class="blog-one__content">
                            <h3><a href="news_detail.html"><?= $item->getText1() ?></a></h3>
                            <div class="blog_one_text">
                                <p><?= $item->getText2() ?></p>
                            </div>
                            <div class="read_more_btn">
                                <a href="<?= $item->link ?>"><i class="fa fa-angle-right"></i>Batafsil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
