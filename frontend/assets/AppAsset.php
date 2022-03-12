<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/owl/owl.carousel.min.css',
        'plugins/owl/owl.theme.default.min.css',
        '/css/animate.min.css',
        '/css/bootstrap.min.css',
        '/css/owl.carousel.min.css',
        '/css/owl.theme.default.min.css',
        '/css/magnific-popup.css',
        '/css/fontawesome-all.min.css',
        '/css/swiper.min.css',
        '/css/bootstrap-select.min.css',
        '/css/jquery.mCustomScrollbar.min.css',
        '/css/bootstrap-datepicker.min.css',
        '/css/vegas.min.css',
        '/css/nouislider.min.css',
        '/css/nouislider.pips.css',
        '/css/agrikol_iconl.css',
        '/css/style.css',
        '/css/responsive.css'
    ];
    public $js = [
        'plugins/owl/owl.carousel.min.js',
        'plugins/scroll.js',
        'js/scripts.js',
        'js/jquery.min.js',
        'js/bootstrap.bundle.min.js',
        'js/owl.carousel.min.js',
        'js/waypoints.min.js',
        'js/jquery.counterup.min.js',
        'js/TweenMax.min.js',
        'js/wow.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.ajaxchimp.min.js',
        'js/swiper.min.js',
        'js/typed-2.0.11.js',
        'js/vegas.min.js',
        'js/jquery.validate.min.js',
        'js/bootstrap-select.min.js',
        'js/countdown.min.js',
        'js/jquery.mCustomScrollbar.concat.min.js',
        'js/bootstrap-datepicker.min.js',
        'js/nouislider.min.js',
        'js/isotope.js',
        'js/appear.js',
        'js/theme.js'
    ];
    public $depends = [
        YiiAsset::class,
    ];
}
