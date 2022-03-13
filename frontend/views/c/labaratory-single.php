<section class="page-header" style="background-image: url(/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2><?= $item->getText1() ?></h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Asosiy</a></li>
            <li><span>Labaratoriya</span></li>
        </ul>
    </div>
</section>

<section class="news_detail">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news_detail_left">
                    <div class="news_detail_image_box">
                        <img src="<?= $item->getPhoto1('770', '427', 'forceResize', 'transparent', 'center', 'center'); ?>" alt="">
                    </div>
                    <div class="news_detail_content">
                        <h2><?= $item->getText1() ?></h2>
                        <p class="news_detail_one_text"><?= $item->getText3() ?></p>
                    </div>
                    <div class="news_detail__bottom">
                        <div class="news_detail__social-list">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">So'nggi yangiliklar</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <?php foreach ($mostRead as $item): ?>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="<?= $item->getPhoto1('80', '77', 'forceResize', 'transparent', 'center', 'center'); ?>" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="#" class="sidebar__post-content_meta"><i
                                        <a href="news_detail.html"><?= $item->getText1() ?></a>
                                    </h3>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>